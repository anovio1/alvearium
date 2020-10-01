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
                    <a href='/classes'><div class='child'>Classes</div></a>
                    <a href='/races'><div class='child'>Races</div></a>
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
        return file_get_contents(dnd::$docroot . '/pages/'.$inputString.'.php');
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