<?php
// Class URL Parser 
Class URLParser
{
    // Check if URL is valid
    public function checkURL($url)
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

// Class to control the routes
Class Controller
{
    public function homeIndex($url = "home")
    {
        return hash('md5', $url);
    }
}

// Class for database config for mysql
/*
Class DBConfig
{
    function connect($db_host, $db_user,$db_pass,$db_name)
    {
        $conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
        if(!$conn)
        {
            return $conn->error;
        }
        else
        {
            echo "Connected";
        }

        return $conn;
    }

}
*/

$parser = new URLParser();
$route = new Controller();
//$db = new DBConfig();