<?php
function errorController ($error) {
    if ($error=0) {
        $message ="El usuari no existeix";
        
    }


    return $message;

}
?>