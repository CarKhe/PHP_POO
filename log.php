<?php 

class Log{

    private $file_log;

    function __construct($path){
        $this->file_log = fopen($path,"a");
    }

    function writeLine($type,$message){
        $date = new DateTime();
        $format = $date->format("m-d-y H:i:s");
        fputs($this->file_log,"[".$type."][".$format."]: ".$message." \n");
    }

    function close(){
        fclose($this->file_log);
    }
}

$log = new LOG("log.txt");

$log->writeLine("E","Can´t insert");
$log->writeLine("I","Data inserted");
$log->writeLine("W","double inserted");

$log->close();



?>