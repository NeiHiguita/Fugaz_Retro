<?php
require 'cone.php';
class ClienteModelo
{
    public function registrarcliente($documento, $Nombre, $Correo, $Celular)
    {
        $pdo = new Conexion();
        $sentencia = $pdo->prepare("INSERT INTO cliente(documento, nombre, correo, celular)");
        $sentencia->bindParam(':IdEmpleado', $documento);
        $sentencia->bindParam(':IdNombre', $Nombre);
        $sentencia->bindParam(':IdCorreo', $Correo);
        $sentencia->bindParam(':IdCelular', $Celular);
        try {
            $sentencia->execute();

            $otro = header('Location: index.php');
        } catch (Exception $e) {
            $otro = "Error insertando datos. Error" . $e;
        }
        return $otro;
    }
}
