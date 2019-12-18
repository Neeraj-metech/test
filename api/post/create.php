<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');


require_once '../../models/Posts.php';
$post = new Post();

$data = json_decode(file_get_contents("php://input"));

// $post->title = $data->title;
// $post->body = $data->body;
// $post->created_at = $data->create;
// $post->updated_at = $data->update;

$result = $post->createpost($data);


if ($result) {
	echo json_encode(
		array('message' => 'Post created')
	);
}else{
	echo json_encode(
		array('message' => 'Post Not created')
	);
}
