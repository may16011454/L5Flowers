

<?php

class Controllers {

    protected $db = null;
    protected $users = null;

    public function __construct()
    {
        $type ='mysql';
        $server = '127.0.0.1';
        $db = 'shop';
        $port = '3306';
        $charset = 'latin1';

        $username = 'root';
        $password = '';
    

        $dsn = "$type:host=$server;dbname=$db;port=$port;charset=$charset";
    
        try {
            $this->db = new DatabaseController($dsn, $username, $password); 
        }
        catch (PDOException $e) {
            throw new PDOException($e -> getMessage(), $e -> getCode());
            echo $e;
        }
    }

    public function members()
    {
        if ($this->users === null) {
            $this->users = new MemberController($this->db);
        }
        return $this->users;
    }
}