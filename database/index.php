<?php
require_once "vendor/autoload.php";
use app\database\DBGen;

class Index{

    private $db;
    public function __construct(){
        $shops = [
            ["Apple","98765432","apple","987",1,],
            ["Banana","98765432","banana","987",1,],
            ["Orange","98765432","orange","987",1,]
        ];
        $this->db = new DBGen();
        // $this->db->getSingleShop(1);
        // $this->db->getMultipleShop(1);
        // $this->db->insertSingleShop("Nokiya","98765432","nokiya","987",1,);
        // $this->db->insertMultipleShop($shops);
        // $this->db->updateShop(13,"hawei");
        // $this->db->deleteShop(13);
        // $this->db->fetchAllShop(1);
        $this->db->getJoinData(1);
    }
}

new Index();