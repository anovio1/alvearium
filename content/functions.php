<?php


class dnd{
    static public function classRaceContent($inputString){
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
                <div class='main-content-menu-container noselect'>
                    <a href='/'><div class=''>Home</div></a>
                    <a href='/stats'><div class=''>Stats Checker</div></a>
                    <a href='/dndcsgo'><div class=''>D&D CSGO RPG</div></a>
                    <a href='/classes'><div class='child'>Classes</div></a>
                    <a href='/races'><div class='child'>Races</div></a>
                    <a href='/modhelp'><div class=''>Mod Help</div></a>
                    <a href='/bug'><div class=''>Found a Bug?</div></a>
                </div>
            </div>
            <div class='main-content-content-container noPadding'>
            ".dnd::get_class_page($inputString)."
            </div>
        </div>
        <script src='/js/scripts.js'></script>
        </body>
        </html>
        ";
    }
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
                <div class='main-content-menu-container noselect'>
                    <a href='/'><div class=''>Home</div></a>
                    <a href='/stats'><div class=''>Stats Checker</div></a>
                    <a href='/dndcsgo'><div class=''>D&D CSGO RPG</div></a>
                    <a href='/classes'><div class='child'>Classes</div></a>
                    <a href='/races'><div class='child'>Races</div></a>
                    <a href='/modhelp'><div class=''>Mod Help</div></a>
                    <a href='/bug'><div class=''>Found a Bug?</div></a>
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

    static public function get_class_page($inputString){
        $passthrough = $inputString;
        return include(dnd::$docroot . '/pages/class_template.php');
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