<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

// require_once '../../config/Database.php';
require_once '../../models/Posts.php';

// $database = new Database();
// $db = $database->connection();

$post = new Post();

$singlpost = $post->singlepost($_GET['id']);
if ($singlpost) {
    $post_item = array(
        'id'=>$singlpost['id'],
        'title'=>$singlpost['title'],
        'body'=>html_entity_decode($singlpost['body']),
        'create'=>$singlpost['created_at'],
        'update'=>$singlpost['updated_at']
    );
    echo json_encode($post_item);
}else{
    echo json_encode(
        array('message'=>'No Data!!!')
    );
}