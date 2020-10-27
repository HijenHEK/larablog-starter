<?php
namespace App ;

class Container {
    
    protected $reg=[] ;

    public function bind($key ,$value) {
        $this->reg[$key] = $value ;
        
    }
    public function resolve($key) {
        if(isset($this->reg[$key])){
            return call_user_func($this->reg[$key]);
        };
        return false  ;      
    }
}