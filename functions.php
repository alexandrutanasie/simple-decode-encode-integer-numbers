<?php

function self_encode($str){
    $codes = array(
        'xa',
        'wg',
        'tx',
        'ic',
        'sm',
        'ik',
        'lp',
        'dt',
        'nu',
        'vq'
    );

    $strs = str_split($str);

    $encoded = '';
    for($i=0;$i< count($strs);$i++){
        $key = $strs[$i];    
        $encoded .= $codes[$key];
    }
    return $encoded;
    
}

function self_decode($str){
    $codes = array(
        'xa',
        'wg',
        'tx',
        'ic',
        'sm',
        'ik',
        'lp',
        'dt',
        'nu',
        'vq'
    );
    
    $strs = str_split($str,2);

    $decoded = '';
    for($i=0;$i< count($strs);$i++){
        $decoded .= array_search($strs[$i],$codes);
    }
    return $decoded;
}
?>

