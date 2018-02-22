<?php

$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("toppers");

if($conn)
{
    $db_selected = mysql_select_db("toppers");

    if (!$db_selected)
    {
        die ('Can\'t use : '.mysql_error());
    }

}
else
{
    die('Not connected : ' . mysql_error());
}

?>

?>

