<?php
set_include_path(__DIR__);

function autoload($folder)
{
    foreach (glob("{$folder}/*.php") as $filename){
        include $filename;
    }

    foreach(glob("{$folder}/",GLOB_ONLYDIR) as $d){
        autoload("{$folder}/{$d}");
    }
}

$SCAN = ['config','lib','filters','controller','resources'];
foreach($SCAN as $s){
    autoload(__DIR__."/{$s}");
}

