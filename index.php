<?php
    interface uso{
        public function sentarses():string;
    }

    class silla{
        public $tamano;
        public $dimension;
        public $catidadPaticas;
        function __construct(){
            $arg = (func_num_args()) ? (object) func_get_args()[0] : (object) null;
            $this->tamano = $arg->TAMANO;
            $this->dimension = $arg->DIMENSION;
            $this->catidadPaticas = $arg->CATIDADPATICAS;
        }
        public function sentarse():string{
            // $arg = (func_num_args()) ? (object) func_get_args()[0] : (object) null;
            return  "Me sente en una silla normal";
        }
    }
    class mesedora extends silla{
        function __construct(){
            $arg = (func_num_args()) ? (object) func_get_args()[0] : (object) null;
            $this->catidadPaticas = $arg->CATIDADPATICAS;
        }
        public function sentarse():string{
            // $arg = (func_num_args()) ? (object) func_get_args()[0] : (object) null;
            return  "Me sente en una silla mesedora y me balancie";
        }
    }

    $obj = new mesedora([
        "TAMANO" => (int) 80,
        "CATIDADPATICAS" => (string) '2 patas de arco', 
        "DIMENSION" => (string) "45x80"
    ]);
    
    print_r(([$obj, 'sentarse'])());



?>