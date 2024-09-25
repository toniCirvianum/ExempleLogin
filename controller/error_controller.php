<?php
function errorController ($error) {

    switch ($error) {
        case 0:
            $message ="El usuari no existeix";
            break;
        case 4:
            $message ="El usuari ja existeix";
            break;
        default:
            $message="";
            break;
    }
    
    return $message;

}
?>