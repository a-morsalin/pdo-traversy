<?php

$host = 'localhost';
$user = 'root';
$password = 'dbbl96811';
$dbname ='traversy';
//Set  DSN
$dsn = 'mysql:$host='.$host.';dbname='.$dbname;

//Create a PDO instance
$pdo = new PDO($dsn,$user,$password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
//prepare statement for limit
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

//$query = $pdo->query('SELECT * FROM pdo_main');
//while($row= $query->fetch(PDO::FETCH_ASSOC)){
//    echo $row['title'].'<br/>';
//}

//$query = $pdo->query('SELECT * FROM pdo_main');
//while($row= $query->fetch(PDO::FETCH_OBJ)){
//    echo $row->title .'<br/>';
//}

# Prepared statements (Prepare & execute)
//Unsafe
//$sql = "SELECT * FROM pdo_main WHERE author = '$author'";

//Fetch Multiple post
//Positional params

$author = 'Zimran';
//$is_published = true;
//$id = 1;

//$query =  'SELECT *FROM pdo_main WHERE author = ?';
//$data = $pdo->prepare($query);
//$data->execute([$author]);
//$posts = $data->fetchAll();

//Named param
//$query =  'SELECT *FROM pdo_main WHERE author = :author && is_published = :is_published';
//$data = $pdo->prepare($query);
//$data->execute(['author' => $author, 'is_published' => $is_published]);
//$posts = $data->fetchAll();
//
//foreach($posts as $post){
//    echo $post->title .'<br/>';
//}

#Fetch Single Post
//$query =  'SELECT * FROM pdo_main WHERE id = :id';
//$data = $pdo->prepare($query);
//$data->execute(['id' => $id]);
//$posts = $data->fetchAll();
//
//foreach($posts as $post){
//    echo $post->body .'<br/>';
//}

//Get row count
//$query= $pdo->prepare('SELECT * FROM pdo_main WHERE author = ?');
//$query->execute([$author]);
//$postCount = $query->rowCount();
//
//echo $postCount;

//Insert
//$title ="Post Five";
//$body = "This is post five";
//$author = "Kevin";
//$query = "INSERT INTO pdo_main(title.,body,author)  VALUES(:title,:body,:author)";
//$data = $pdo->prepare($query);
//$data->execute(['title'=>$title,'body'=>$body,'author'=>$author]);
//echo "Post added";

//Update
//$id = 3;
//$body = "This is post three edited";
//
//$query = "UPDATE pdo_main SET body=:body WHERE id=:id";
//$data = $pdo->prepare($query);
//$data->execute(['body'=> $body,'id'=> $id]);
//echo "Post Updated";

//Delete
//$id = 2;
//
//$query = "DELETE FROM pdo_main WHERE id=:id";
//$data = $pdo->prepare($query);
//$data->execute(['id'=> $id]);
//echo "Post Deleted";

//Search

//$search = "%f%";
//
//$query = "SELECT * FROM pdo_main WHERE LIKE ?";
//$data = $pdo->prepare($query);
//$data->execute([$search]);
//$posts = $data->fetchAll();


//foreach($posts as $post){
//    echo $post->title .'<br/>';
//}
