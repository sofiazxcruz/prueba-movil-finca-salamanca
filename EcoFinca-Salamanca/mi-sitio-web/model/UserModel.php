<?php
require_once('../conf/conf.php');

class User extends Conf{
    public $id;

    public $username;

    public $email;

    public $password;

    public function create(){
        $query = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
        $params = [
            ":username" => $this->username,
            ":email" => $this->email,
            ":password" => $this->password
        ];

        return $this->exec_query($query, $params);
    }
    
}
?>