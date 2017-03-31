<?php

/**
 * Created by PhpStorm.
 * User: LEONARDO TI
 * Date: 27/03/2017
 * Time: 18:29
 */
namespace Source;

class Conn implements IConn
{

    //Atributos para conexão
    private $dsn;
    private $user;
    private $pass;

    //Contrututor de conexão para o PDO
    public function __construct($dns,$user,$pass)
    {
        $this->dsn = $dns;
        $this->user = $user;
        $this->pass = $pass;
    }

    //Nova conexão
    public function connect()
    {
        return new \PDO($this->dsn,$this->user, $this->pass);
    }
}