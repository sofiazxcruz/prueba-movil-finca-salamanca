<?php
require_once('../conf/conf.php');
    
class Login extends Conf {
    public $username;
    public $password;
     
    public function get_user(){
        $query = "SELECT id, username, email FROM users WHERE username=:username && password=:password";
        $params = [
        ':username' => $this->username,
        ':password' => md5($this->password)
        ];
         
        $result = $this->exec_query($query, $params);
         
        if ($result){
            return $result->fetch(PDO::FETCH_ASSOC);
        } else {
            return [];
        }
    }
}