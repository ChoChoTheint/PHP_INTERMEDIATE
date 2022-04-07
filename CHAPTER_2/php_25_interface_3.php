<?php

interface sheInter(){
    public function sheGotoSchool();
    public function outPut();
    public function busy();
}
interface heInter(){
    public function heGotoSchool();
    public function outPut();
    public function busy();
}

class Index implements sheInter(){
    private $data;

    public function sheGotoSchool($data){
        $this->data = $data;
    }

    public function outPut(){
       echo "<pre>" . print_r($this->data,true) . "</pre>"; 
    }

    public function busy(){
       echo "this person is busy with " .$this->data[count($htis->data)-1];
    }
}

class Index implements heInter(){
    private $data;

    public function heGotoSchool($data){
        $this->data = $data;
    }

    public function outPut(){
       echo "<pre>" . print_r($this->data,true) . "</pre>"; 
    }

    public function busy(){
       echo "this person is busy with " .$this->data[count($htis->data)-1];
    }
}

$obj = new Index();
$sheAry = ["book","pencile","bag","comsmatic"];
$sheAry = ["book","pencile","bag","rubber ban"];
$obj->sheGotoSchool($sheAry);
$obj->outPut();
$obj->busy();

$bb = new Index();
$bb->heGotoSchool($heAry);
$bb->outPut();
$bb->busy();