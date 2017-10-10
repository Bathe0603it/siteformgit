<?php
    if(!function_exists('get_action_name')){
        function get_action_name($input = null){
            echo 'hello';
        }
    }

    if(!function_exists('dd')){
        function dd($input = null,$break = null){
            echo '<pre>';
            var_dump($input);
            echo '</pre>';
            if(empty($break))
            exit();
        }

    }

    if(!function_exists('ii')){
        function ii($input = null,$break = null){
            echo 'here<div style="display: none;">';
            echo '<pre>';
            var_dump($input);
            echo '</pre>';
            echo '</div>';
            if(!empty($break))
            exit();
        }

    }
    
    if(!function_exists('public_url')){
        function public_url($input = null){
            return base_url('templates/site/');
        }
    }
    
    if(!function_exists('url_now')){
        function url_now($input = null){
            return current_url().$input;
        }
    }
    
    if(!function_exists('is_post')){
        function is_post($input = null){
            if ($_POST) {
                // $_SERVER['REQUEST_METHOD'] == 'POST'
                return true;
            }
            return false;
        }
    }
    
    if(!function_exists('is_get')){
        function is_get($input = null){
            if ($_GET) {
                // $_SERVER['REQUEST_METHOD'] == 'GET'
                return true;
            }
            return false;
        }
    }
?>