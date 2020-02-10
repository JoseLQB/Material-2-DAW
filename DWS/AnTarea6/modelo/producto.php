<?php
    require_once 'conexion.php';
    /**
     * 
     * Objeto Articulo.
     * Tiene como parametros fecha, titulo y contenido
    */
    class Producto { 
        /**
         * clase producto
         * 
         * @param string
         * @return float  
         */
        public function ejecuta($sql) {
            $conn = new Conn();
            $result = $conn->prepare($sql); 
            $result->execute();
            $conn=null;
            return $result;
        }
        /**
         * 
         * Devuelve PVP a partir de un codigo de producto que
         * recibirá como parámetro
         * 
         * @param int
         * @return int  
         */
        public function getPvP($cod) {
            $sql = "SELECT * FROM producto WHERE cod = $cod";
            //$registro=ejecuta($sql);
            $conn = new Conn();
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
         * Devuelve el stok del producto en la tienda a partir del codigo de producto
         * y la tienda, que será pasados a la función como parámetros
         * 
         * 
         * @param int
         * @param int
         * @return int 
         */
        public function getStock($cod, $tienda) {
            $sql = "SELECT * FROM stock WHERE producto = $cod AND tienda = $tienda";
            $conn = new Conn();
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
         * Devuelve un array con todas las familias que hay
         * en la base de datos
         * 
         * @return string[]
         */
        public function getFamilias() {
            
            $sql = "SELECT * FROM `familia`";
            $conn = new Conn();
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
         * Se la pasa como parametro una familia y devuelve un array
         * con todos los códigos de productos de esa familia
         * 
         * @param string
         * @return string[]  
         */
        public function getProductosFamilia($familia) {
            $sql = "SELECT * FROM producto WHERE familia =$familia";
            $conn = new Conn();
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