

<?php
extract($_REQUEST);


/* Connecting, selecting database */
    $link = mysql_connect("localhost","dhar","monkeyboy")
        or die("Could not connect");
    mysql_select_db("boxes") or die("Could not select database");


$dbdate = "2003-" . $month . "-". $day;
$dbtime = $time . ":00";


if($presenter==""):

else:
	
	 print "The Faciliator for this session has been changed to: $presenter";
	 $insert = "UPDATE sessions SET presenter=\"$presenter\" WHERE date=\"$dbdate\" and time=\"$dbtime\"  " ;
         $work = mysql_query($insert) or die ("insert failed");

endif;


    /* Performing SQL query */
    $query = "SELECT * FROM attendees WHERE date=\"$dbdate\" and time=\"$dbtime\" ";

    $result = mysql_query($query) or die("Query failed");
    $value =mysql_result($result,0);

    print "<p><b>There are <u>" . mysql_num_rows($result) . "</u> people
registered for boxes and walls at $dbdate $dbtime</b></p>";


    $query1 ="SELECT presenter FROM sessions WHERE date=\"$dbdate\" and time=\"$dbtime\" ";
    $result1 = mysql_query($query1) or die("Query failed");
    $presenter1 = mysql_result($result1,0);
    print "The facilitator for this session is: $presenter1";



    /* Printing results in HTML */
    print "<table>\n";
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
        print "\t<tr>\n";
        foreach ($line as $col_value) {
            print "\t\t<td>$col_value</td>\n";
        }
        print "\t</tr>\n";
    }
    print "</table>\n";





    /* Free resultset */
    mysql_free_result($result);

    /* Closing connection */
    mysql_close($link);

?>

