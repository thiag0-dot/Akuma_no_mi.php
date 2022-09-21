<?php
    namespace AKUMA_NO_MI\Controller;

    abstract class Controller{

        protected static function render($view, $model = null){
            $file = VIEWS . $view . ".php";

            if(file_exists($file)){
                include $file;
            }
            else {
                exit('Arquivo da view não encontrado. Arquivo:' . $view);
            }
        }
    }