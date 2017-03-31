<?php
/**
 * Created by PhpStorm.
 * User: LEONARDO TI
 * Date: 28/03/2017
 * Time: 12:24
 */

namespace Source;


interface IProduct
{
    public function getId();
    public function getName();
    public function getDesc();
    public function setId($id);
    public function setName($name);
    public function setDesc($desc);
}