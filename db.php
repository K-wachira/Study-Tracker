<?php

class DB {

    function __construct() {
        // Deployment
        // $dbhost = 'sql2.freesqldatabase.com';
        // $dbuname = 'sql2339583';
        // $dbpass = 'wM9%hW3!';
        // $dbname = 'sql2339583';


        // Development
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