<?php

namespace App\view;
use App\db\dbconn; 

class Printpage{

    function printsumma($s){

        echo "summan blir".$s;
        echo'<a href="http://localhost/webbserverprog/mvc1test/public/contact">Contact</a>';

    }
    function printpersoner($users){

            foreach ($users as $user) {
                echo '<div>' . $user['username'] . '</div>';
            }
    }

}


?>