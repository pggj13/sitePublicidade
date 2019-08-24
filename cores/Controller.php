<?php

class Controller {

    public function loadView($viewName, $viewData = array()) {
        extract($viewData);
        include 'views/' . $viewName . '.php';
    }

    public function loadTemplate($viewName, $viewData = array()) {

        $validaCache = new is_validaCache();
        if (file_exists('./caches/'.$viewName.'.txt') && $validaCache->is_valido('./caches/'.$viewName.'.txt')) {
            require './caches/'.$viewName.'.txt';
            
        } else {
            ob_start();
            include 'views/template.php';
            $html = ob_get_contents();
            ob_end_clean();

            file_put_contents('./caches/'.$viewName.'.txt', $html);
            echo $html;
        }
    }

    public function loadViewInTemplate($viewName, $viewData = array()) {
        extract($viewData);
        include 'views/' . $viewName . '.php';
    }

}
