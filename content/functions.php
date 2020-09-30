<?php


class dnd{
    static public function content($inputString){
        echo "
        <!DOCTYPE html>
        <html>
            <link rel='stylesheet' href='/css/style.css'>
        <head>

        </head>
        <body>
        <div class='content-view'>
            <div class='main-content-menu'>
                <div class='main-content-search-container'>
                    <form action='' class=''>
                        <label for='' class=''></label>
                        <input type='text' class=''>
                    </form>
                </div>
                <div class='main-content-menu-container'>
                    <a href='/'><div class=''>Home</div></a>
                    <a href='/dndcsgo'><div class=''>D&D CSGO RPG</div></a>
                    <a href='/'><div class=''>Classes</div></a>
                    <a href='/'><div class=''>Races</div></a>
                    <a href='/'><div class=''>Mod Help</div></a>
                    <a href='/'><div class=''>Found a Bug?</div></a>
                </div>
            </div>
            <div class='main-content-content-container'>
            ".dnd::get_page($inputString)."
            </div>
        </div>
        <script src='/js/scripts.js'></script>
        </body>
        </html>
        ";
    }

    static public function get_page($inputString){
        switch($inputString){
            case "home":
                return file_get_contents(dnd::$docroot . '/pages/home.php');
            case "dndcsgo":
                return file_get_contents(dnd::$docroot . '/pages/dndcsgo.php');
        }
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