<?php
/**
 * Created by PhpStorm.
 * User: dulee
 * Date: 11/21/2018
 * Time: 8:39 PM
 */

class Database
{
	private $con;

    public function __construct()
    {
        $this->con = new mysqli("localhost", 'root', "", "shanthi-sewana-2");
    }

    public function getConnection()
    {

    	return $this->con;
    }

}

?>