<?php class Model
{

    protected $mysqli;

    public function __construct()
    {
        $dbhostname = 'localhost';
        $dbusername = 'root';
        $dbpassword = 'admin';
        $dbname = 'paw';

        $this->mysqli = new mysqli($dbhostname, $dbusername, $dbpassword, $dbname);

        if ($this->mysqli->connect_errno) {
            die('Database connection error!');
        }
    }
};