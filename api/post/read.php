<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require_once '../../models/Posts.php';


$post = new Post();

$result = $post->read();
// $num = $result->rowCount();
$num = count($result);


// if ($num > 0) {
//     $post_arr = array();
//     $post_arr['data']=array();
//     while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
//         extract($row);
//         $post_item = array(
//             'id' => $id,
//             'title'=>$title,
//             'body'=>html_entity_decode($body),
//             'created'=>$created_at,
//             'updated'=>$updated_at
//         );
//         array_push($post_arr['data'],$post_item);
//     }
//     echo json_encode($post_arr);
// }else{
//     echo json_encode(
//         array('message'=>'No Post Avaliable!!')
//     );
// }

if ($num > 0) {
    // echo json_encode($result);
    $post_data=array();
    foreach ($result as $value) {
        $post_item = array(
            'id'=>$value['id'],
            'title'=>$value['title'],
            'body'=>html_entity_decode($value['body']),
            'create'=>$value['created_at'],
            'update'=>$value['updated_at']
        );
        array_push($post_data, $post_item);
    }
    echo json_encode($post_data);
}else{
    echo json_encode(
        array('message'=>'No Post Avaliable!!')
    );
}
