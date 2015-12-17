<?php
/**
 * Created by naveedulhassan.
 * Date: 12/11/15
 * Time: 12:37 PM
 */

namespace App\Helpers;


class D
{
    public static function pr($obj , $label=''){
        echo "<hr><b>".$label.":</b>";
        echo "<pre>";
        print_r($obj);
        echo "</pre>";
    }

    public static function pr_exit($obj,$label=''){
        pr($obj,$label);
        exit;
    }

    public static function pEcho($str){
        echo "<p>$str</p>";
    }
    public static function prpost(){ pr( $_POST , 'POST Array' ); }
    public static function prget(){ pr( $_GET , 'GET Array' ); }
    public static function prses(){ pr( $_SESSION , 'SESSION Array' ); }
    public static function prser(){ pr( $_SERVER , 'SERVER Array' ); }


}