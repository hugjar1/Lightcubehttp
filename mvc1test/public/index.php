<?php

require '../vendor/autoload.php';

use App\controller\Getpage;
use App\model\Calc;
use App\view\Printpage;
use App\view\form;


$model = new Calc();

$view = new Printpage();

$viewform = new form();

$page = new Getpage($model, $view, $viewform);



$url= "http://127.0.0.1".$_SERVER['REQUEST_URI'];

$purl=parse_url($url);

$url_parts=explode("/",$purl['path']);

var_dump($url_parts);

echo $url."<br>";



if($url_parts[4] == 'main'){

 $page->main();

}   

if($url_parts[4] =='contact'){

    $page->contact();
}

if($url_parts[4]=="showform"){

    $page->showform();

}

if($url_parts[4]=="spara"){

    $page->storedata();

}







echo 'hej';
?>