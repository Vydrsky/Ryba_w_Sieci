<?php

unset($_SESSION['errorType']);
unset($_SESSION['errorName']);
unset($_SESSION['errorImage']);

if($_SESSION['permission'] == "admin" && $_SERVER['REQUEST_METHOD'] == "POST")
{
    require_once "db_connect.php";
	
    $idUser = $_SESSION['userid'];
    $imageCorrect = false;
    $titleCorrect = false;  
    $descriptionCorrect = false;

    if(isset($_FILES['image']))
    {
        
        $tmp = pathinfo($_FILES['image']['name']);
        @$extension = $tmp['extension'];
	
        if($extension == "jpg" || $extension == "jpeg" || $extension == "png")
        {	
            if(is_uploaded_file($_FILES['image']['tmp_name'])) 
            {
                $imageName = $_FILES['image']['name'];
                $size = $_FILES['image']['size'];
                $tmpName = $_FILES['image']['tmp_name'];
                $destination = 'images/news/' . $idUser  . sha1(basename($tmpName)) . "." . $extension; 

                if($size <= 0)
                    $_SESSION['errorImage'] = 'Plik jest pusty.';
                elseif(file_exists($destination))
                    $_SESSION['errorImage'] = 'Zdjęcie o podanej nazwie istnieje już na serwerze.';
                else 
                {
                    if (!@move_uploaded_file($tmpName, $destination))
                        $_SESSION['errorImage'] = 'Podana lokalizacja nie istnieje.';
                    else 
                        $imageCorrect = true;	
                }
            }
        }
        else
            $_SESSION['errorImage'] = 'Rozszerzenie wybranego pliku nie jest typu jpg/png/jpeg!';
    }

    if(!empty($_POST['description']))
    {
        $description = $_POST['description'];
        $descriptionCorrect = true;
    }
    else
        $_SESSION['errorDescription'] = 'Należy wprowadzić treść!';

    if(!empty($_POST['title']))
    {
        $title = $_POST['title'];
        $titleCorrect = true;
    }
    else
        $_SESSION['errorTitle'] = 'Należy wprowadzić tytuł!';
    

	if ($imageCorrect && $descriptionCorrect && $titleCorrect) {
        $publicationDate = date("Y-m-d");
		$addNews = $db->prepare('INSERT INTO ogloszenia (title, publication_date, description, image, id_autora) VALUES (:title, :publication_date, :description, :image, :id_autora)');
        $addNews->bindValue(':title', $title);
        $addNews->bindValue(':publication_date', $publicationDate);
        $addNews->bindValue(':description', $description);
        $addNews->bindValue(':image', $destination);
        $addNews->bindValue(':id_autora', $idUser);
        $addNews->execute();
        header("location: index.php?state=news");
	}
}