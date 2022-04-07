<?php

class Index{
    public function doIt($finish){
        $i = 0;
        $sum = 0;
        while ($i < 1000){
            $sum += $i;
        }
        $this->finish($sum);
    }
    public function finish($total){
        echo "all total is {$total}";
    }
}

$ind = new Index();
$ind->doIt("finish");