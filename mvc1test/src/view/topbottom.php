<?php 

namespace App\view;

class topbottom{

    public function __construct(){
        
    }
    static function top(){
        echo <<<TOPHTML

            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>
            <body>

        TOPHTML;

    }
    static function bottom(){

        echo <<<BOTTOMHTML

            </body>
            </html>

        BOTTOMHTML;

    }


}





?>
    
