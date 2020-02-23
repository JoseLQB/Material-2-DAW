<?php

    require_once('conexion.php');

    class Producto { 

        /**
         * 
         * Esta función recibirá como parámetro el código de un
         * producto, y devolverá el PVP correspondiente al mismo. 
         * 
         * @param string $cod
         * @return float  
         */
        public function getPvP($cod) {
            $sql = "SELECT * FROM `producto` WHERE `cod` = \"".$cod."\"";
            //$registro=ejecuta($sql);
            $conn = new Conexion();
            $result = $conn->prepare($sql); 
            $result->execute();
            $conn=null;
            while ($registro = $result->fetchObject()) {

                $pvp = $registro->PVP;
            }
            return  $pvp;
        }
        /** 
         * 
         * Esta función recibirá dos parámetros: el código de un
         * producto y el código de una tienda. Devolverá el stock existente en
         * dicha tienda del producto.
         * 
         * 
         * @param string $cod
         * @param string $tienda
         * @return int 
         */
        public function getStock($cod, $tienda) {
            $sql = "SELECT * FROM `stock` WHERE `producto` = \"".$cod."\" AND `tienda` = \"".$tienda."\"";
            $conn = new Conexion();
            $result = $conn->prepare($sql); 
            $result->execute();
            $conn=null;
            while ($registro = $result->fetchObject()) {
                $stock = $registro->unidades;
            }
            return  $stock;
        }


        /**
         * 
         * No recibe parámetros y devuelve un array con los
         * códigos de todas las familias existentes.
         * 
         * @return array 
         */
        public function getFamilias() {
            
            $sql = "SELECT * FROM `familia`";
            $conn = new Conexion();
            $result = $conn->prepare($sql); 
            $result->execute();
            $conn=null;
            while ($registro = $result->fetchObject()) {                
                $familias []= $registro->cod;
            }
            return  $familias;
        }

       /**
         * 
         * Recibe como parámetro el código de una
         * familia y devuelve un array con los códigos de todos los productos
         * de esa familia.
         * 
         * @param string $familia
         * @return array  
         */
        public function getProductosFamilia($familia) {
            $sql = "SELECT * FROM `producto` WHERE `familia` = \"".$familia."\"";
            $conn = new Conexion();
            $result = $conn->prepare($sql); 
            $result->execute();
            $conn=null;
            while ($registro = $result->fetchObject()) {
                $codigos []= $registro->cod;
            }
            return  $codigos;
        }

    }
    ?>