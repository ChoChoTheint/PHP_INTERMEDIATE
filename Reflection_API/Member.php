<?php

namespace App;

class Member{
    private $isAuth = false;
    private $detailInfo = [
        "name" => "Mg Mg",
        "age" => 30,
        "school" => "Yangon"
    ];

    public function getDetailInfo($data=""){
        return $this->detailInfo;
    }

    public function setAuth($bol){
        $this->isAuth = $bol;
    }

    public function getAuth(){
        return $this->isAuth;
    }
}