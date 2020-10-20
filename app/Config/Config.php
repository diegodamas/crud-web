<?php

    $PastaInterna="crud-web";

    define('BASEURL', "http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}");

    if(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/'){ 
        define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}"); 
    }else{ 
        define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}/{$PastaInterna}"); 
    }

    // DB
    define('DB_HOST', '');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', '');
