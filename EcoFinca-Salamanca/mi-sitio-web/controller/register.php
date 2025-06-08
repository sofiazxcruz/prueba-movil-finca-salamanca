<?php
require_once('../model/UserModel.php');
$user = new User();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user->username = isset($_POST['username']) ? $_POST['username'] : "";
    $user->email = isset($_POST['email']) ? $_POST['email'] : "";
    $user->password = isset($_POST['password']) ? md5($_POST['password']) : "";
    $user->username = isset($_POST['username']) ? $_POST['username'] : "";

    header('Content-Type: application/json');
    try {
        $result = $user->create();

        if ($result){
            http_response_code(201);
            echo json_encode([
                'status' => 'success',
                'message' => 'Usuario agregado con exito'
            ]);
        } else {
            http_response_code(400);
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Error al agregar el usuario'
                ]);
        }
    } catch (Exception $e) {
        http_response_code(500);
            echo json_encode([
                'status' => 'error',
                'message' => $e->getMessage() 
            ]);
    }
}


?>