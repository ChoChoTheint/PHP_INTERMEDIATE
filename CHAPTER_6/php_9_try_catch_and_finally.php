<?php

error_reporting(0);
try{
    if(fopen('ttt.txt','r')){
        echo "aung tl";
    }else{
        throw new Exception("file can't be read");
    }
}catch(Exception $e){
    echo $e->getMessage();
}finally{
    echo "<br/>har har ";
}
