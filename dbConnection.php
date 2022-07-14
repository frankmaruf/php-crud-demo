<?php
class Connection{
    protected $link;
    protected $sql_command;
    private $dsn, $username, $password;
    public function __construct($dsn, $username, $password){
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
    }
    public function connect(){
        try{
            $this->link = new PDO($this->dsn, $this->username, $this->password);
            return $this->link;
        }
        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public function close(){
        $this->link = null;
    }
    public function __destruct(){
        $this->close();
    }
    public function __sleep()
    {
        return array('dsn', 'username', 'password');
    }
    public function __wakeup()
    {
        $this->connect();
    }
    public function getData($command){
        try{
            $this->sql_command = $command;
            $result = $this->link->query($this->sql_command);
            $data = $result->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }
        catch(PDOException $e){
            echo "Query failed: " . $e->getMessage();
        }
    }
    
}
?>