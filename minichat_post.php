<?
include 'db_login.php';

echo $_POST['name'] .  ' , ' . $_POST ['text'];

$message = $db->prepare('INSERT INTO minichat(name, text) VALUES(?, ?)'); 

$message->execute(array(
	$_POST['name'],
	$_POST['text']
));

header('Location: ./minichat.php');
?>