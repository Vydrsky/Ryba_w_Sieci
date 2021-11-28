<?php

unset($_SESSION['errorType']);
unset($_SESSION['errorName']);
unset($_SESSION['errorImage']);

if($_SESSION['permission'] == "admin" && $_SERVER['REQUEST_METHOD'] == "POST")
{
    require_once "db_connect.php";
	
    $idUser = $_SESSION['userid'];
    $imageCorrect = false;  
    $nameCorrect = false;
    $typeCorrect = false;

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
                $destination = './images/products/' . $imageName; 

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

    if(!empty($_POST['name']))
    {
        $name = $_POST['name'];
        $nameCorrect = true;
    }
    else
        $_SESSION['errorName'] = 'Należy podać nazwę produktu!';
    
    if(!empty($_POST['type']))
    {
        $type = $_POST['type'];
        $typeCorrect = true;
    }
    else
        $_SESSION['errorType'] = 'Należy podać typ produktu!';

    $prize = $_POST['prize'];

	if ($imageCorrect && $nameCorrect && $typeCorrect ) {
		$createProduct = $db->prepare('INSERT INTO produkty_sklep (name, type, prize, image, id_autora) VALUES (:name,:type,:prize,:image,:id_autora)');
        $createProduct->bindValue(':name', $name);
        $createProduct->bindValue(':type', $type);
        $createProduct->bindValue(':prize', $prize);
        $createProduct->bindValue(':image', $imageName);
        $createProduct->bindValue(':id_autora', $idUser);
        $createProduct->execute();
        header("location: index.php?state=shop");
	}
}