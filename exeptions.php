<?php
function foo(){

    try {
        throw new Exception('err');
    } catch(Exception $exeptions) 
    {
        return false;
    }
    $err = true;
    if($err){
        
        return false;
    }
    return true;
}