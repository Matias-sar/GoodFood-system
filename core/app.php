<?php
    class App{
        function __construct(){
           // Extraer controladorymétodo de url
            $url = $_GET['url'];
            $arregloUrl = explode('/',$url);
            $controlador = empty($arregloUrl[0])?'inicio':$arregloUrl[0];
            $metodo = empty($arregloUrl[1])?'login':$arregloUrl[1];
            // Url del controlador
            $urlControlador='controllers/'.$controlador.'.php';
            if(file_exists($urlControlador)){
               // Crear objeto del controlador
               require_once $urlControlador;
               $controller= new $controlador();
               // Cargar el modelo de cada controlador
               $urlModelo='models/'.$controlador.'modelo.php';
               if(file_exists($urlModelo)){
                    require_once $urlModelo;
                   $controller->loadModel($controlador.'modelo');
               }

               if(method_exists($controller,$metodo)){
                     $controller->$metodo();
               }
            }
        }
    }

 ?>
    