<?php
// Class URL Parser 
Class URLParser
{
    // Check if URL is valid
    function checkURL($url)
    {
        $pages = array("home","link1");
        if(hash('md5',$pages[0]) == $url)
        {
            return 0;
        }
        else if(hash('md5',$pages[1]) == $url)
        {
            return 1;
        }
        else
            return 404;
    }
}

Class Controller
{
    function homeIndex($url = "home")
    {
        return hash('md5', $url);
    }
}

$parser = new URLParser();
$route = new Controller();