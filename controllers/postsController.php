<?php
/**
 * Created by PhpStorm.
 * User: JRNET
 * Date: 14/02/2017
 * Time: 21:43
 */

    class postsController extends controller {

        public function index(){
            echo "Esse é um teste";
        }

        public function ver($url) {
        echo "Nome da noticia que veremos: ".$url;
        }
    }