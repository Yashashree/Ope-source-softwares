<?php
/**
 * Created by PhpStorm.
 * User: Vitthal
 * Date: 3/23/2015
 * Time: 11:06 PM
 */
$conn = mysql_connect('localhost','root','');
if(!@$conn||!@mysql_select_db('hospital'))
{
    die('Could not connected.');
}


?>