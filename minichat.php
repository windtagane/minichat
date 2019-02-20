<? 
include 'db_login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Minichat</title>
</head>
<body>
	<form action="./minichat_post.php" method="POST">
		<div>
			<label for="Name">Name</label> 
			<input type="text" name="name">
		</div>
		<div>
			<label for="Text">Text</label>
			<input type="" name="text">
		</div>
		<button type="submit" name="send" action="./minichat_post.php">Send</button>
	</form>

	<?
	$message = $db->query('SELECT name, text FROM minichat');

	while ($data = $message->fetch()) {
		echo $data['name'] .  '<br>';
		echo $data['text'] .  '<br>';
	}
	?>


</body>
</html>