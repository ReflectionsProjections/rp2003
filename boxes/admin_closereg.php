<html>

<?php
extract($_REQUEST);


$dbdate = "2003-" . $month . "-". $day;
$dbtime = $time . ":00";

/* Connecting, selecting database */
    $link = mysql_connect("localhost","dhar","monkeyboy")
        or die("Could not connect");
    mysql_select_db("boxes") or die("Could not select database");

    /* Performing SQL query */
    $query = "SELECT numsigned FROM sessions WHERE date=\"$dbdate\" and time=\"$dbtime\" ";
    $result = mysql_query($query) or die("Query failed");
    $value =mysql_result($result,0);


    $spotcounter = "UPDATE sessions SET numsigned='12' WHERE date=\"$dbdate\" and time=\"$dbtime\" ";
    $work1 = mysql_query($spotcounter) or ("increment failed");

print " Update confirmed, $dbdate $dbtime has been closed to further registration.";


/*endif;*/

    /* Free resultset */
    mysql_free_result($result);

    /* Closing connection */
    mysql_close($link);

?>



  </tr>
  <tr>
    <td width="100%">&nbsp;</td>
  </tr>
  <tr>
    <td width="100%">&nbsp;</td>
  </tr>
</table>
</body>
</html>


