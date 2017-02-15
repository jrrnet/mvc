<?php
/**
 * Created by PhpStorm.
 * User: JRNET
 * Date: 06/02/2017
 * Time: 22:37
 *
 * Começar com um AutoLoad das pastas Controller, Models, Core
 */

// AutoLoad
spl_autoload_register(function ($class){
    // Verificação se existe um controller
    if(strpos($class, 'Controller') > -1){
        if(file_exists('controllers/'.$class.'.php')){
            require_once 'controllers/'.$class.'.php';
        }
    } else if(file_exists('models/'.$class.'.php')){ // Verifica se é models
        require_once 'models/'.$class.'.php';
    } else {
        require_once 'core/'.$class.'.php';
    }
});

$core = new Core();
$core->run();

?>

