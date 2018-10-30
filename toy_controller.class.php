<?php

class ToyController {
    private $toy_model;
    
    public function __construct(){
        $this->toy_model = new ToyModel();
    }
    
    //list all toys
    public function all(){
        //get all the toys
        $toys = $this->toy_model->getToys();
        
        if(!$toys){
            $this->error("No toys were found.");
        }
        //display all toys
        $view = new ToyView();
        $view->display($toys);
    }
    
    //display an error message
    public function error($message){
        $view = new ToyError();
        $view->display($message);
    }
}
