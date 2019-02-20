<?
$dbhost = 'localhost';
$dbname='minichat';
$dblogin='root';
$dbpw='';

try {
	$db = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8", $dblogin, $dbpw);
} catch(Exception $e) {
	die('Error : ' .$e->getMessage());
}
?>