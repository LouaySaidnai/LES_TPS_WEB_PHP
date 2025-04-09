<?php

session_start();

class Session {
    public static function initialiser(){
        $_SESSION['nbrvisite'] = 1 ;
    }
    public static function incrémenter(){
        isset($_SESSION['nbrvisite']) ? $_SESSION['nbrvisite']++ : $_SESSION['nbrvisite'] = 1 ;
    }
    public static function destroy(){
        session_unset(); 
        session_destroy();
    }
}