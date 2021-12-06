<?php

unset($_SESSION['errorType']);
unset($_SESSION['errorName']);
unset($_SESSION['errorImage']);
unset($_SESSION['errorState']);

if($_SESSION['permission'] == "user" && $_SERVER['REQUEST_METHOD'] == "POST")
{
    require_once "db_connect.php";
	
    $idUser = $_SESSION['userid'];
    $imageCorrect = false;  
    $nameCorrect = false;
    $typeCorrect = false;
    $stateCorrect = false;

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
                $destination = 'images/auction_products/' . $idUser  . sha1(basename($tmpName)) . "." . $extension;

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

    if(!empty($_POST['state']))
    {
        $state = $_POST['state'];
        $stateCorrect = true;
    }
    else
        $_SESSION['errorState'] = 'Należy podać stan produktu!';

    if(!empty($_POST['description']))
    {
        $description = $_POST['description'];
        $descriptionCorrect = true;
    }
    else
        $_SESSION['errorDescription'] = 'Należy wprowadzić opis!';

    $prize = $_POST['prize'];
    $age = $_POST['age'];

	if ($imageCorrect && $nameCorrect && $typeCorrect && $stateCorrect && $descriptionCorrect) {
		$createAuctionProduct= $db->prepare('INSERT INTO produkty_aukcje (name, type, state, age,  prize, image, description, id_autora) VALUES (:name,:type,:state,:age,:prize,:description,:image,:id_autora)');
        $createAuctionProduct->bindValue(':name', $name);
        $createAuctionProduct->bindValue(':type', $type);
        $createAuctionProduct->bindValue(':state', $state);
        $createAuctionProduct->bindValue(':age', $age);
        $createAuctionProduct->bindValue(':prize', $prize);
        $createAuctionProduct->bindValue(':image', $destination);
        $createAuctionProduct->bindValue(':description', $description);
        $createAuctionProduct->bindValue(':id_autora', $idUser);
        $createAuctionProduct->execute();
        header("location: index.php?state=shop");
	}
}