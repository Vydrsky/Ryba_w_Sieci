<?php

unset($_SESSION['errorType']);
unset($_SESSION['errorName']);
unset($_SESSION['errorImage']);

if($_SESSION['permission'] == "user" && $_SERVER['REQUEST_METHOD'] == "POST")
{
    require_once "db_connect.php";
	
    $idUser = $_SESSION['userid'];
    $imageCorrect = false;  
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
                $destination = './images/galery/' . $imageName; 

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
        $_SESSION['errorDescription'] = 'Należy wprowadzić opis!';
    
    $weight = $_POST['weight'];

	if ($imageCorrect && $descriptionCorrect) {
		$addImage = $db->prepare('INSERT INTO galeria_zdobyczy (description, weight, image, id_autora) VALUES (:description, :weight, :image, :id_autora)');
        $addImage->bindValue(':description', $description);
        $addImage->bindValue(':weight', $weight);
        $addImage->bindValue(':image', $imageName);
        $addImage->bindValue(':id_autora', $idUser);
        $addImage->execute();
        header("location: index.php?state=galery");
	}
}

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_GET['edit'])){
    $query = $db->prepare("UPDATE zawody SET title=:title,date=:date,fishery=:fishery,start_time=:start_time,type=:type WHERE id=:id");
    $query->bindValue(":id" $_POST['edit-id']);
}