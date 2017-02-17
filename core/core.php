<?php
/**
 * Created by PhpStorm.
 * User: JRNET
 * Date: 09/02/2017
 * Time: 22:21
 */

class Core {

    public function run() {
        //$url = substr($_SERVER['PHP_SELF'], 10); Limita a URL em 10 caracteris        

        $url = explode("index.php", $_SERVER['PHP_SELF']);
        $url = end($url);

        $params = array();
        if(!empty($url)) {
            $url = explode('/', $url);
            array_shift($url);

            $currentController = $url[0].'Controller';
            array_shift($url);

            if(isset($url[0])) {
                $currentAction = $url[0];
                array_shift($url);
            } else {
                $currentAction = 'index';
            }

            if(count($url) > 0) {
                $params = $url;
            }
        } else {
              $currentController = 'homeController';
              $currentAction = 'index';      
            }        
        

        /* Teste  
        echo "CONTROLLER: ".$currentController;
        echo "<br/>ACTION: ".$currentAction;
        echo "<br/>PARAMs: ";
        print_r($params);
        exit;
        */

        require_once 'core/controller.php';

        $c = new $currentController();
        call_user_func_array(array($c, $currentAction), $params);
    }
}