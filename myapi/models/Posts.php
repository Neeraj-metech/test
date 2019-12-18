<?php
class Post{
    private $conn;

    public $id;
    public $title;
    public $body;
    public $created_at;
    public $updated_at;

    
    //construction call
    public function __construct(){
        require_once '../../config/Database.php';
        $database = new Database();
        $db = $database->connection();
        $this->conn = $db;
    }

    // fetch  posts
    public function read(){
        $sql = 'select * from posts';
        $data = $this->conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function singlepost($id){
        $sql = 'select * from posts where id="'.$id.'"';
        $data = $this->conn->query($sql)->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    //create posts
    public function createpost($data){
        $query = 'INSERT INTO posts SET 
            title = :title,
            body = :body,
            created_at = :created_at,
            updated_at = :updated_at
        ';

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':title', $data->title);
        $stmt->bindParam(':body', $data->body);
        $stmt->bindParam(':created_at', $data->create);
        $stmt->bindParam(':updated_at', $data->update);
        if ($stmt->execute()) {
            return true;
        }else{
            return false;
        }

    }
    
    
}
// $post =new Post();
// $newdata = $post->read();
// print_r($newdata);
