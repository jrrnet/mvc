<?php
/**
 * Created by PhpStorm.
 * User: JRNET
 * Date: 14/02/2017
 * Time: 21:43
 */

    class postsController extends controller {

        public function index(){
            echo "Listar postagens";
        }

        public function ver($nome, $sobrenome) {
        echo "Meu nome é: ".$nome." ".$sobrenome;
        }
    }