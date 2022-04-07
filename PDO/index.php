<?php
require_once "databases/DAL.php";

class index{
    private $dal;
    public function __construct(){
        // $db = DBGen::getInstance()->getConn();
        // var_dump($db);
        $dal = new DAL();
        // $dal->getSingleShop(1);
        // $dal->getAllShop(1);
        // $dal->singleShopInsert("Nokia","21435232","nokia","123",1);

        $shop = [
            ["Apple","98765432","apple","987",1,],
            ["Banana","98765432","banana","987",1,],
            ["Orange","98765432","orange","987",1,]
        ];
        // $dal->multipleShopInsert($shop);
        // $dal->updateShop(1,"Burma");
        // $dal->deleteShop(10);
        $dal->joinData(1); // error
    }

}

new index();