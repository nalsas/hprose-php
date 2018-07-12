<?php
    require_once "hprose/Hprose.php";
    use Hprose\Client;

    $client=Client::create('tcp://localhost:8888',false);
    $t=microtime(true);
    for($i=0;$i<10000;++$i){
        $client->hello('hprose');
        //var_dump($client->hello('hprose'));
    }
    echo microtime(true)-$t;

