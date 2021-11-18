<?php

unset($_SESSION['emailError']);
unset($_SESSION['usernameError']);
unset($_SESSION['passError']);
unset($_SESSION['birthDateError']);

/*
<input type="text" class="text_inputs" name="email"> <br />
<input type="text" class="text_inputs" name="email2"><br />
<input type="text" class="text_inputs" name="name"> <br />
<input type="text" class="text_inputs" name="surname"><br />
<input type="text" class="text_inputs" name="username"> <br />
<input type="password" class="text_inputs" name="pass"><br />
<input type="password" class="text_inputs" name="pass2"> <br />
<input type="date" class="text_inputs" name="birthDate"><br />
<input type="submit" value="Utwórz konto"/>
*/

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$_SESSION['inputName'] = $_POST['name'];
	$validationSuccess = true;
    echo 
	require_once "db_connect.php";

	$query = $db->prepare('SELECT email,login,password,permission FROM users');
	$query->execute();
	$result = $query->fetchALL(PDO::FETCH_ASSOC);
    $flagEmail=false;
    $flagUsername=false;
    foreach($result as $row){
        if($_POST['email']==$row['email']){
            $flagEmail=true;
        }
        if($_POST['username']==$row['login']){
            $flagUsername=true;
        }
    }
	if ($flagEmail) {
		$_SESSION['emailError'] = "Istnieje już konto o takim adresie e-mail";
		$validationSuccess = false;
	} else {
		unset($_SESSION['emailError']);
	}
	if ($flagUsername) {
		$_SESSION['usernameError'] = "Użytkownik o takim loginie już istnieje";
		$validationSuccess = false;
	} else {
		unset($_SESSION['usernameError']);
	}
    if ($_POST['email']!=$_POST['email2']) {
		$_SESSION['emailError'] = "Adresy e-mail nie zgadzają się";
		$validationSuccess = false;
	} else {
		unset($_SESSION['emailError']);
	}
    if ($_POST['pass']!=$_POST['pass2']) {
		$_SESSION['passError'] = "Hasła nie zgadzają się";
		$validationSuccess = false;
	} else {
		unset($_SESSION['passError']);
	}
    if((strtotime(date("Y-m-d"))-strtotime($_POST['birthDate']))/31536000<18){
        $_SESSION['birthDateError'] = "Musisz mieć skończone 18 lat by się zarejestrować";
		$validationSuccess = false;
    }
    else{
        unset($_SESSION['birthDateError']);
    }

	if ($validationSuccess) {
		$createUser = $db->prepare('INSERT INTO users (login,password,email,name,surname,permission) VALUES (:login,:password,:email,:name,:surname,"user")');
        $createUser->bindValue(':login',$_POST['username']);
        $createUser->bindValue(':password',sha1($_POST['pass']));
        $createUser->bindValue(':email',$_POST['email']);
        $createUser->bindValue(':name',$_POST['name']);
        $createUser->bindValue(':surname',$_POST['surname']);
        $createUser->execute();
        header("location: index.php?state=login");
	}

}