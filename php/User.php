<?php
include_once('database.php');
class User extends Database 
{
    private $id;
    private $name = NULL;
    private $email = NULL;
    private $password = NULL;

    public function get_id() {
        return $this->id;
    }

    public function get_name() {
        return $this->name;
    }

    public function get_email() {
        return $this->email;
    }

    public function get_password() {
        return $this->password;
    }

    public function set_name($name) {
        $this->name = $name;
    }

    public function set_email($email) {
        $this->email = $email;
    }

    function __construct($id) {
        $sql = "SELECT * FROM Users WHERE id = $id;";
        $statement = Database::$db->prepare($sql);
        $statement->execute();
        $data = $statement->fetch(PDO::FETCH_ASSOC);
        if(empty($data)){return;}
        foreach ($data as $key => $value) {
            $this->{$key} = $value; 		
        }
    }

    public static function add($name, $email, $password, $imageFile) 
    {
        $sql = "INSERT INTO Users (name, email, password, photo) VALUES (?,?,?,?);";

        $statement = Database::$db->prepare($sql);
        $statement->execute([$name, $email, $password, $imageFile]);
        $id = Database::$db->lastInsertId();
        return $id;
    }

    public function delete() 
    {
        $sql = "DELETE FROM Users WHERE id = $this->id;";
        Database::$db->query($sql);
    }

    public function save() 
    {
        $sql = "UPDATE Users SET name = ? , email = ? WHERE id = ?;";
        Database::$db->prepare($sql)->execute([$this->name, $this->email, $this->id]);
    }

    public static function all($keyword) {
        //$keyword = str_replace(" ", "%", $keyword);
        $sql = "SELECT * FROM Users WHERE email like ('$keyword');";
        $statement = Database::$db->prepare($sql);
        $statement->execute();
        $users = [];
        while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $users[] = new User($row['id']);
        }
        return $users;
    }
}
?>
