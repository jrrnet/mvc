<?php
/**
 * Created by PhpStorm.
 * User: JRNET
 * Date: 13/02/2017
 * Time: 23:14
 */

    class controller {

        public function loadView($viewName, $viewData = array()) {

            extract($viewData);

            include 'views/'.$viewName.'.php';

        }
    }