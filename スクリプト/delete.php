<?php 

$host = "mysql419.db.sakura.ne.jp"; 

$user = "server-tech"; 

$pass = "password"; 

$db = "server-tech_sample"; 



$param = "mysql:dbname=".$db.";host=".$host; 

$pdo = new PDO($param, $user, $pass); 

$pdo->query('SET NAMES utf8;'); 



if ($_GET['id']) { 

$stmt = $pdo->prepare("DELETE FROM reminder WHERE id = :id"); 

$stmt->bindValue(':id', $_GET["id"]); 

$flag = $stmt->execute(); 

} 

unset($pdo); 



header("Location: index.php"); 

exit; 

?>