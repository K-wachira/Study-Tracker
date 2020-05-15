<?php

class DB {

    function __construct() {
        // // Deployment
        // $dbhost = 'us-cdbr-east-06.cleardb.net';
        // $dbuname = 'b00550ee7b5ab8';
        // $dbpass = 'fd2b9d60';
        // $dbname = 'heroku_258dae5e7a012fc';



        // Development

        // mysql://b00550ee7b5ab8:fd2b9d60@us-cdbr-east-06.cleardb.net/heroku_258dae5e7a012fc?reconnect=true
        //  mysql://bf3e8d75a985ac:7e4d6ba1@us-cdbr-east-06.cleardb.net/heroku_89def9d4932c331?reconnect=true


    

        $dbhost = 'localhost';
        $dbuname = 'root';
        $dbpass = '';
        $dbname = 'Study-Tracker';

        $this->_dbconn = mysqli_connect($dbhost, $dbuname, $dbpass, $dbname);

        if (!$this->_dbconn) {  
            die("Connection to DB could not be made! " . mysqli_connect_error());
        }
    }

}