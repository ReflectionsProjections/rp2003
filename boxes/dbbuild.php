<?php
extract($_REQUEST);


/* Connecting, selecting database */
    $link = mysql_connect("localhost","dhar","monkeyboy")
        or die("Could not connect");
    mysql_select_db("boxes") or die("Could not select database");

    /* Performing SQL query */

	$dbdate = "2003-" . $month . "-". $day;

$dbtime = "05:00:00";
    $insert = " INSERT INTO sessions SET date =\"$dbdate\",time=\"$dbtime\", numsigned =0, presenter = \"\"  " ;
    $work = mysql_query($insert) or die ("insert failed");

$dbtime = "05:30:00";   
    $insert = " INSERT INTO sessions SET date =\"$dbdate\",time=\"$dbtime\", numsigned =0, presenter = \"\"  " ;
    $work = mysql_query($insert) or die ("insert failed");

$dbtime = "06:00:00";   
    $insert = " INSERT INTO sessions SET date =\"$dbdate\",time=\"$dbtime\", numsigned =0, presenter = \"\"  " ;
    $work = mysql_query($insert) or die ("insert failed");

$dbtime = "06:30:00";   
    $insert = " INSERT INTO sessions SET date =\"$dbdate\",time=\"$dbtime\", numsigned =0, presenter = \"\"  " ;
    $work = mysql_query($insert) or die ("insert failed");

$dbtime = "07:00:00";   
    $insert = " INSERT INTO sessions SET date =\"$dbdate\",time=\"$dbtime\", numsigned =0, presenter = \"\"  " ;
    $work = mysql_query($insert) or die ("insert failed");

$dbtime = "07:30:00";   
    $insert = " INSERT INTO sessions SET date =\"$dbdate\",time=\"$dbtime\", numsigned =0, presenter = \"\"  " ;
    $work = mysql_query($insert) or die ("insert failed");

$dbtime = "08:00:00";   
    $insert = " INSERT INTO sessions SET date =\"$dbdate\",time=\"$dbtime\", numsigned =0, presenter = \"\"  " ;
    $work = mysql_query($insert) or die ("insert failed");

$dbtime = "08:30:00";   
    $insert = " INSERT INTO sessions SET date =\"$dbdate\",time=\"$dbtime\", numsigned =0, presenter = \"\"  " ;
    $work = mysql_query($insert) or die ("insert failed");

$dbtime = "09:00:00";   
    $insert = " INSERT INTO sessions SET date =\"$dbdate\",time=\"$dbtime\", numsigned =0, presenter = \"\"  " ;
    $work = mysql_query($insert) or die ("insert failed");












print " Thank you for Registering for Boxes and Walls.  Please print out this confirmation and bring it with you on your tour!";

    /* Free resultset */

    /* Closing connection */
    mysql_close($link);

?>

