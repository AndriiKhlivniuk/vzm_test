<?php
	$conn = new PDO('sqlite:comment.db');
	$name = $_POST["name"];
	$comment = $_POST["comment"];

	$date = new DateTime("now", new DateTimeZone('Europe/Kiev') );
	$date = $date->format('H:i  Y-m-d');

	$sql = $conn->query ("INSERT OR IGNORE INTO comments (name, comment, data)
    VALUES ('$name', '$comment', '$date')");

    $result = $conn->query("SELECT * FROM comments");
    

  session_start();
  $_SESSION['message'] = 'Комментарий добавлен!';
  header('Location: index.php');


?>