<?php
require_once ('db.php');

//Set DSN

$dsn = 'mysql:host='.$host.';dbname='.$db_name;

//Create pdo instance
$pdo = new PDO($dsn,$user,$password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

// Create PDO query
//$stmt = $pdo->query('SELECT * FROM posts');

//while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
//    echo $row['title'].'</br>';
//
//}

//Alternative to use object instead fetch_assoc
//while ($row = $stmt->fetch(PDO::FETCH_OBJ)){
//    echo $row->title.'</br>';
//}

//PREPARED STATEMENTS
//User input
//$author = 'Joe Doe';
////Safe way for fetch multiple
//$sql = 'SELECT * FROM posts WHERE author = ?';
//$stmt = $pdo -> prepare($sql);
//$stmt -> execute(array($author));
//$posts = $stmt->fetchAll();
//
//foreach ($posts as $post){
//    echo $post->title.'<br>';
//}

//Fetch single post
//$id = 1;

//$sql = 'SELECT * FROM posts WHERE id = :id';
//$stmt = $pdo -> prepare($sql);
//$stmt->execute(array('id'=> $id));
//$post = $stmt->fetch();
//
//echo $post->body;

//INSERT DATA
//$title = "Dodany Post za pomocą PDO";
//$body = "DODANE : Aliquam erat volutpat. Praesent mi ligula, volutpat quis odio eget, feugiat scelerisque nisi.
//Aenean dui turpis, vulputate et nisl pretium, vestibulum ullamcorper elit.
//Donec ullamcorper risus suscipit arcu feugiat tristique. Aliquam sed tristique dui, ut semper dolor.
//Nullam finibus justo eu lectus faucibus semper. Ut in pellentesque ante.";
//$author = "Kevin Silverman";
//$sql = 'INSERT INTO posts(title, body, author) VALUES(:title, :body, :author)';
//$stmt = $pdo->prepare($sql);
//$stmt->execute(array('title'=>$title, 'body'=>$body, 'author'=>$author));
//echo 'Post Added...';

//UPDATE DATA
//$id = 5;
//$title = "Update Post za pomocą PDO";
//$body = "Zaktualizowane : Aliquam erat volutpat. Praesent mi ligula, volutpat quis odio eget.";
//$author = "Samanta Williams";
//$sql = 'UPDATE  posts SET title=:title, body=:body, author=:author WHERE id=:id';
//$stmt = $pdo->prepare($sql);
//$stmt->execute(array('title'=>$title, 'body'=>$body, 'author'=>$author, 'id'=>$id));
//echo 'Post is update right now...';

//DELETE DATA
//$id = 5;
//
//$sql = 'DELETE FROM posts WHERE id=:id';
//$stmt = $pdo->prepare($sql);
//$stmt->execute(array('id'=>$id));
//echo 'Post is DELETED right now...';

//SEARCH DATA using LIKE SQL OPERATOR
$search = "%post%";
$sql = 'SELECT * FROM posts WHERE title LIKE ?';
$stmt = $pdo->prepare($sql);
$stmt-> execute(array($search));
$posts = $stmt->fetchAll();
foreach($posts as $post){
    echo $post->title.'</br>';
}




