<?php

class HelloWorld
{
    /**
     * @var PDO
     */
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function hello($what = 'World')
    {
        $sql = "INSERT INTO hello VALUES (" . $this->pdo->quote($what) . ")";
        $this->pdo->query($sql);
        return "Hi $what";
    }


    public function what()
    {
        $sql = "SELECT what FROM hello";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchColumn();
    }
    
    public function mypow($a, $b)
    {
        
    }
}
