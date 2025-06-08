<?php
require_once('../model/ReservasModel.php');
$reserva = new Reserva();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $reserva->clienteId = isset($_POST['clienteId']) ? $_POST['clienteId'] : "";
    $reserva->nombreCompleto = isset($_POST['nombre']) ? $_POST['nombre'] : "";
    $reserva->combo = isset($_POST['combo']) ? ($_POST['combo']) : "";
    $reserva->telefono = isset($_POST['telefono']) ? ($_POST['telefono']) : "";
    $reserva->costo = isset($_POST['costo']) ? $_POST['costo'] : "";
    $reserva->correo = isset($_POST['correo']) ? $_POST['correo'] : "";
    $reserva->metodoPago = isset($_POST['metodo']) ? $_POST['metodo'] : "";
    $reserva->fecha = isset($_POST['fecha']) ? $_POST['fecha'] : "";


    header('Content-Type: application/json');
    try {
        $result = $reserva->create();

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