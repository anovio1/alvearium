<?php


class dnd{
    static public function content(){
        echo "
        <!DOCTYPE html>
        <html>
            <link rel='stylesheet' href='/css/style.css'>
        <head>

        </head>
        <body>
        </body>
        </html>
        ";
    }

    static public function get_header(){
        include_once(dnd::$docroot . '/header.php');
    }

    static public $docroot = "";

    static public function initialize(){
        dnd::$docroot = $_SERVER['DOCUMENT_ROOT'];
    }

}

dnd::initialize();


?>