<?php

namespace App\controller;
use App\view\topbottom;



class Getpage{

    private $model;
    private $view;
    private $viewform;

    function __construct($m,$v, $v2){

        $this->model=$m;
        $this->view=$v;
        $this->viewform=$v2;
    }

    public function main() {

        $summa=$this->model->calcsumma(5,5);
        topbottom::top();
        $this->view->printsumma($summa);
        topbottom::bottom();

    }

    public function contact(){

        $personer=$this->model->person('Agneta', 'bosse');
        $this->view->printpersoner($personer);

    }
    
     public function showform (){


        $this->viewform->storedata();
     }

     public function storedata (){

        $clean_users=filter_input(INPUT_POST, 'user
        ', FILTER_SANITIZE_STRING);

        $this->model->push($clean_users);
    }

}


?>