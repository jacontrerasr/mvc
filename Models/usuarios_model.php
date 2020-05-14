<?php

include_once("conexion.php");


    class usuarios_model{


        private $db;
        private $usuarios;

        public function __construct(){

            $this->db=Conectar::conecta();
            $this->usuarios = array();

        }



        public function get_usuarios(){

             $consulta = $this -> db -> query("SELECT * FROM usuarios");
                while($filas = $consulta -> fetch_assoc()) {
                    $this->usuarios[] = $filas;
                }

        return $this->usuarios;




        }



    }

    ?>