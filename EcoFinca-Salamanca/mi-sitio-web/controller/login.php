<?php
require_once('../model/Login.php');
$user = new Login();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user->username = isset($_POST['username']) ? $_POST['username'] : "";
    $user->password = isset($_POST['password']) ? ($_POST['password']) : "";

    header('Content-Type: application/json');
    try {
        $result = $user->get_user();

        if ($result){
            http_response_code(201);
            echo json_encode([
                'status' => 'success',
                'message' => 'Usuario encontrado con exito',
                'data' => $result
            ]);
        } else {
            http_response_code(400);
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Usuario o contraña incorrectos'
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