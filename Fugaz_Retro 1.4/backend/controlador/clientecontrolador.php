<?php
include './modelo/clientemodelo.php';
require_once './modelo/cone.php';
    class Clientecontrolador{
        public function nuevo(){
            require_once './vista/crearcliente.php';
        }
        public function crear(){
            $documento = $_GET['documento'];
            $Nombre = $_GET['nombre'];
            $Correo = $_GET['correo'];
            $Celular = $_GET['celular'];
            $clientes = new ClienteModelo();
            return $clientes->registrarCliente($documento,$Nombre,$Correo,$Celular);
        }
    }
?>