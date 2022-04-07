<?php

require_once "DBGen.php";

class DAL{
    private $db;
    public function __construct(){
        $this->db = DBGen::getInstance()->getConn();
    }

    public function getSingleShop($id){
        $stmt = $this->db->prepare("SELECT * FROM shop WHERE id=:id");
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        $stmt->bindColumn("name",$name);
        $stmt->bindColumn("ipadd",$ipadd);

        while($stmt->fetchObject()){
            echo $name . "<br/>";
            echo $ipadd . "<br/>";
        }
    }

    public function getAllShop($state){
        $stmt = $this->db->prepare("SELECT * FROM shop WHERE state=:state");
        $stmt->bindParam(":state", $state);
        $stmt->execute();
        // $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        foreach($result as $item){
            // echo $item["name"]."<br/>";
            // echo $item["ipadd"]."<br/>";
            // echo $item["created_at"]."<br/>";

            echo $item->name . "<br/>";
            echo $item->ipadd . "<br/>";
            echo $item->created_at . "<br/>";
            echo "<hr/>";
        }
    }

    public function singleShopInsert($name,$ipadd,$username,$password,$state){
        $datty = date("Y-m-d H:m:s");
        $stmt = $this->db->prepare("INSERT INTO shop (name,ipadd,username,password,state)
        VALUE  (:name,:ipadd,:username,:password,:state,:created_at)
        ");
        $stmt->bindParam(":name",$name);
        $stmt->bindParam(":ipadd",$ipadd);
        $stmt->bindParam(":username",$username);
        $stmt->bindParam(":password",$password);
        $stmt->bindParam(":state",$state);
        $stmt->bindParam(":created_at",$datty);
        
        $result = $stmt->execute(); // error
        $insertId = $this->db->lastInsertId();

        echo $result ? "Success Inserting" . $insertId : "Fail to insert Data";

    }

    public function multipleShopInsert($shop){
        $datty = date("Y-m-d H:m:s");
        $stmt = $this->db->prepare("INSERT INTO shop (name,ipadd,username,password,state)
        VALUE  (:name,:ipadd,:username,:password,:state,:created_at)
        ");
        foreach($shop as $item){
            $stmt->bindParam(":name",$item[0]);
            $stmt->bindParam(":ipadd",$item[1]);
            $stmt->bindParam(":username",$item[2]);
            $stmt->bindParam(":password",$item[3]);
            $stmt->bindParam(":state",$item[4]);
            $stmt->bindParam(":created_at",$datty);
            $result = $stmt->execute(); //error
            $liId = $this->db->lastInsertId();

        echo $result ? "Success Inserting" . $liId : "Fail to insert Data";
        }  
    }

    public function updateShop($id,$name){
        $stmt = $this->db->prepare("UPDATE shop SET name=:name WHERE id=:id");
        $stmt->bindParam(":name",$name);
        $stmt->bindParam(":id",$id);
        $result = $stmt->execute();
        echo $result ? "update data" : "update fail";
    }

    public function deleteShop($id){
        $stmt = $this->db->prepare("DELETE FROM shop WHERE id=:id");
        $stmt->bindParam(":id",$id);
        $result = $stmt->execute();
        echo $result ? "Delete Already" : "Delete Fail";
    }

    public function joinData($shopid){
        $stmt = $this->db->prepare("
        SELECT 
            sh.name as name,
            sh.ipadd as ipadd,
            SUM(od.price * od.amount) as total
        FROM
            shop as sh
        LEFT JOIN
            order as od 
        ON 
            od.shopid = sh.id 
        WHERE 
            sh.id = :id AND sh.state = 1
        ");
        $stmt->bindParam(":id",$shopid);
        $stmt->execute();
        $stmt->bindColumn("name",$name);
        $stmt->bindColumn("ipadd",$ipadd);
        $stmt->bindColumn("total",$total);
        $result = $stmt->fetchObject();

        echo $result->name . "<br/>";
    }// error

}