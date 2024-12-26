<?php
include_once __DIR__.'/../database/pdo.php';

$name = $_POST['name'];
$message = $_POST['message']; 
$postId = $_POST['postId']; 
$insert = $pdo->prepare('INSERT INTO comments (authorName, body, post_id) VALUES (:authorName, :body, :post_id)');
$insert->execute([
    ':authorName' => $name,
    ':body' => $message,
    ':post_id' => $postId
]);
header("Location: /post.php?id=$postId");
?>