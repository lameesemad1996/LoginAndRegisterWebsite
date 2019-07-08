<?php
include_once('database.php');
class User extends Database 
{
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
        $statement = Database::$db->prepare($sql)->execute([$name, $email, $password, $imageFile]);
    }

    public function delete() 
    {
        $sql = "DELETE FROM Users WHERE id = $this->id;";
        Database::$db->query($sql);
    }

    public function save() 
    {
        $sql = "UPDATE Users SET name = ? , email = ? , password  = ? , photo  = ? WHERE id = ?;";
        Database::$db->prepare($sql)->execute([$this->name, $this->email, $this->password, $this->photo , $this->id]);
    }

    public static function all($keyword) {
        $keyword = str_replace(" ", "%", $keyword);
        $sql = "SELECT * FROM Users WHERE name like ('%$keyword%');";
        $statement = Database::$db->prepare($sql);
        $statement->execute();
        $user = [];
        while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $users[] = new User($row['id']);
        }
        return $users;
    }
}
?>
