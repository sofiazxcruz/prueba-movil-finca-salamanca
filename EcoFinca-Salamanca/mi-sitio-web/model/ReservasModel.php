<?php
require_once('../conf/conf.php');

class Reserva extends Conf{
    public $id;

    public $clienteId;

    public $nombreCompleto;

    public $combo;

    public $costo;

    public $telefono;

    public $correo;

    public $metodoPago;

    public $fecha;

    public function create(){
        $query = "INSERT INTO reservas (clienteId, nombreCompleto, correo,combo, telefono, costo, metodoPago, fecha) VALUES (:clienteId, :nombreCompleto, :correo, :combo, :telefono, :costo, :metodoPago, :fecha)";
        $params = [
            ":clienteId" => $this->clienteId,
            ":nombreCompleto" => $this->nombreCompleto,
            ":correo" => $this->correo,
            ":combo" => $this->combo,
            ":telefono" => $this->telefono,
            ":costo" => $this->costo,
            ":metodoPago" => $this->metodoPago,
            ":fecha" => $this->fecha
        ];

        return $this->exec_query($query, $params);
    }
    
}
?>