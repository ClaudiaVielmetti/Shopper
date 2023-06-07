<?php
//declare  the function show
function show($data)
{
    // print pre-tag
    echo "<pre>";
    //print data in readable format
    print_r($data);
    // print post-tag
    echo "</pre>";
}