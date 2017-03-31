<?php
/**
 * Created by PhpStorm.
 * User: LEONARDO TI
 * Date: 28/03/2017
 * Time: 12:10
 */

namespace Source;


class ServiceProduct implements IServiceProduct
{
    private $db;
    private $product;

    public function __construct(IConn $db,IProduct $product)
    {
        $this->db = $db->connect();
        $this->product = $product;
    }

    public function Mylist()
    {
        $query = "SELECT * FROM products";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);

    }
    public function save()
    {

    }
    public function update()
    {

    }
    public function delete()
    {

    }
}