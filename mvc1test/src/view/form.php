<?php

namespace App\view;


class form{

   
    function storedata(){
        echo <<<FORM

        <form action="spara">
            <label for="users">First name:</label><br>
            <input type="text" id="users" name="users" value="John"><br>
            <input type="submit" value="Lägg till user">
        </form> 


    FORM;

    }

}


?>