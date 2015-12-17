<?php

function pr($obj , $label=''){
    echo "<hr><b>".$label.":</b>";
    echo "<pre>";
    print_r($obj);
    echo "</pre>";
}

function pr_exit($obj,$label=''){
    pr($obj,$label);
    exit;
}

function pEcho($str){
    echo "<p>$str</p>";
}
function prpost(){ pr( $_POST , 'POST Array' ); }
function prget(){ pr( $_GET , 'GET Array' ); }
function prses(){ pr( $_SESSION , 'SESSION Array' ); }
function prser(){ pr( $_SERVER , 'SERVER Array' ); }