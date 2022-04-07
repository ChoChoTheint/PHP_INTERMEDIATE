<?php
//1
// function myFileRead($file){
//     if(file_exists($file)){
//         $handler = fopen($file,'r');
//         $size = filesize($file);
//         $data = fread($handler,$size);
//         echo $data;
//     }else{
//         throw new Exception("the file is not exit");
//     }
// }
// try{
//     myFileRead('Hello.txt');
// }catch(Exception $e){
//     echo $e->getMessage() . "<br/>";
//     echo $e->getFile();
// }


//3
class MyCustomException extends Exception{
    public function __construct($message, $code){
        parent::__construct($message, $code);
        $handler = fopen("log.txt", 'a');
        $data = "\n\n Error Message => \n " .$message."\n Error Number => \n " .
                $code . "\n Error Timestamp\n " . date("Y-m-d H:i:s", time());
        fwrite($handler,$data);
        fclose($handler);
    }
}

function rFile($file){
    if(!file_exists($file))
        throw new MyCustomException("File is not Found", 1001);
}

try{
    rFile("HH.txt");
}catch(Exception $e){
    echo $e->getMessage();
}