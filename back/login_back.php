<?php

unset($_SESSION['passError']);
unset($_SESSION['nameError']);


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$_SESSION['inputName'] = $_POST['name'];
	$validationSuccess = true;

	require_once "db_connect.php";

	$query = $db->prepare('SELECT id,login,password,permission FROM users WHERE login=:login');
	$query->bindValue(':login',$_SESSION['inputName']);
	$query->execute();
	$result = $query->fetch();

	if (!ctype_alnum($_SESSION['inputName']) || $_SESSION['inputName'] != $result['login']) {
		$_SESSION['nameError'] = "Nieprawidłowa nazwa użytkownika";
		$validationSuccess = false;
	} else {
		unset($_SESSION['nameError']);
	}
	if (sha1($_POST['pass']) != $result['password']) {
		$_SESSION['passError'] = "Nieprawidłowe Hasło";
		$validationSuccess = false;
	} else {
		unset($_SESSION['passError']);
	}

	if ($validationSuccess) {
		$_SESSION['userid'] = $result['id'];
		$_SESSION['name'] = $_SESSION['inputName'];
		$_SESSION['permission'] = $result['permission'];
		header("location: index.php?state=start");
	}
}
