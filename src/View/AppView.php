<?php
namespace App\View;
use Cake\View\View;
use Cake\Routing\Router;

class AppView extends View{

    public function initialize(){
        
    }
    
    public function url($option){
        return Router::url($option);
    }
    
    public function escape($string) {
        if($string === null || $string === false || trim($string) === ""){
            return "";
        }
        return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    }
    
    public function date($date, $format="d/m/Y") {
        if(empty($date) || !is_object($date)){
            return "";
        }
        return $date->format($format);
    }
    
    public function dateTime($datetime, $format="d/m/Y H:i:s") {
        if(empty($datetime) || !is_object($datetime)){
            return "";
        }
        return $datetime->format($format);
    }
}
