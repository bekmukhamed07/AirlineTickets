<html>
<head>
<?php
include "header.php";
?>
<script type='text/javascript' src='calendarDateInput.js'>
</script>
</head>
<body>
<?php    include "top.php" ?>
<a href = admin_home.php><img src = images/goback.png></a>
<div>


<h2 align = center>Manage Flight</h2>
				
<form method="POST">
<table align=center  width=700>
<tr>
<td width=200>Enter Flight id</td>
<TD><input type=text name=fid size=30  
 />&nbsp;</td>

</tr>
<tr>
<td width=200>Enter Flight Number</td>
<TD><input type=text name=flightno size=30 />&nbsp;</td>

</tr>
<tr>
<td width=200>Select Company</td>
<TD><select name='company'><option value='AirAstana' > AirAstana </option><option value='BekAir' > BekAir </option><option value='KazakhAir' > KazakhAir </option><option value='Scat' > Scat </option></select>&nbsp;</td>

</tr>
<tr>
<td width=200>From City</td>
<TD><select name='fromcity'><option value='Almaty' > Almaty </option><option value='Nur-Sultan' > Nur-Sultan </option><option value='Kokshetau' > Kokshetau </option><option value='Atyrau' > Atyrau </option><option value='Aktau' > Aktau </option><option value='Qostanay' > Qostanay </option><option value='Karaganda' >  Karaganda </option><option value='Aktobe' > Aktobe </option><option value='Shymkent' >  Shymkent </option></select>&nbsp;</td>

</tr>
<tr>
<td width=200>From City: Departure time (HH:MM:SS)</td>
<TD><input type=text name=from_dtime size=30  
 />
</tr>
<tr>
<td width=200>To City</td>
<TD><select name='tocity'><option value='Nur-Sultan' > Nur-Sultan </option><option value='Almaty' > Almaty </option><option value='Kokshetau' > Kokshetau </option><option value='Aktobe' > Aktobe </option><option value='Aktau' > Aktau </option><option value='Atyrau' > Atyrau </option><option value='Karaganda' > Karaganda </option><option value='Qostanay' > Qostanay </option><option value=' Shymkent' >  Shymkent </option></select>&nbsp;</td>
<td width=200>

</tr>
<tr>
<td width=200>To City:Arrival Time (HH:MM:SS)</td>
<TD><input type=text name=to_atime size=30 
 />&nbsp;</td>
</tr>

<tr>
<td width=200>Select Days</td>
<TD><select name='days' size=5 multiple><option value='sun' > Sunday </option><option value='mon' > Monday </option><option value='tue' > Tuesday </option><option value='wed' > Wednesday </option><option value='thu' > Thursday </option><option value='fri' > Friday </option><option value='sat' > Saturday </option></select>&nbsp;</td>
<td width=200>
</td>
</tr>
<tr>
<td width=200>Number of Seats (E)</td>
<TD><input type=text name=seats_e  size=30  
 />&nbsp;</td>
</tr>
<tr>
<td width=200>Number of Seats (B)</td>
<TD><input type=text name=seats_o size=30 />&nbsp;</td>

</tr>
<tr>
<td width=200>Fare Economy Class</td>
<TD><input type=text name=fare_e />&nbsp;</td>

</tr>
<tr>
<td width=200>Fare Business Class</td>
<TD><input type=text name=fare_b size=30  
 />&nbsp;</td>

</tr>
<tr>
<td align=center ><input type=reset name=reset id=reset value='Reset' style='width:75px;' /></td>
<td align=center>
<input type=submit name=save value='Save'  style='width:75px;' /><br/>
</td>
<td align=center>
<input type=submit name=search value='Search' style='width:75px;'  /><br/>
</td>

</tr>
<tr>
<td colspan='3'>&nbsp;</td>
</tr>
<tr>
<td align=center>
<input type=submit name=modify value='Modify' style='width:75px;' /><br/>
</td>
<td align=center>
<input type=submit name=remove value='Remove' style='width:75px;'><br/>
</td>
<td align=center>
<input type=submit name=searchbycity value='Search By City'  /><br/>
</td>

</tr>
</table>
</form>	


<?php
include "dbconfigure.php";
if(isset($_POST['save']))
{
//$fid = $_POST['fid'];
$flightno = $_POST['flightno'];
$company = $_POST['company'];
$fromcity = $_POST['fromcity'];
$from_dtime = $_POST['from_dtime'];
$tocity = $_POST['tocity'];
$to_atime = $_POST['to_atime'];
$days = $_POST['days'];
$seats_e = $_POST['seats_e'];
$seats_o = $_POST['seats_o'];
$fare_e = $_POST['fare_e'];
$fare_b = $_POST['fare_b'];

$query = "insert into flight values('','$flightno','$company','$fromcity','$from_dtime','$tocity','$to_atime','$days',$seats_e,$seats_o,$fare_e,$fare_b)";
$n = my_iud($query);
echo "$n record saved"; 
}

if(isset($_POST['modify']))
{
$fid = $_POST['fid'];
$flightno = $_POST['flightno'];
$company = $_POST['company'];
$fromcity = $_POST['fromcity'];
$from_dtime = $_POST['from_dtime'];
$tocity = $_POST['tocity'];
$to_atime = $_POST['to_atime'];
$days = $_POST['days'];
$seats_e = $_POST['seats_e'];
$seats_o = $_POST['seats_o'];
$fare_e = $_POST['fare_e'];
$fare_b = $_POST['fare_b'];

$query = "update flight set flightno='$flightno',company='$company',fromcity='$fromcity',from_atime='$from_atime',tocity='$tocity',to_atime='$to_atime',days='$days',seats_e=$seats_e,seats_o=$seats_o,fare_e=$fare_e,fare_b=$fare_b where b_id=$b_id";
$n = my_iud($query);
echo "$n record modified"; 
}

if(isset($_POST['remove']))
{
$fid = $_POST['fid'];
$flightno = $_POST['flightno'];
$company = $_POST['company'];
$fromcity = $_POST['fromcity'];
$from_dtime = $_POST['from_dtime'];
$tocity = $_POST['tocity'];
$to_atime = $_POST['to_atime'];
$days = $_POST['days'];
$seats_e = $_POST['seats_e'];
$seats_o = $_POST['seats_o'];
$fare_e = $_POST['fare_e'];
$fare_b = $_POST['fare_b'];

$query = "delete from flight where fid=$fid";
$n = my_iud($query);
echo "$n record removed"; 
}

if(isset($_POST['search']))
{


$query = "select * from flight";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1>";
echo "<tr>";
echo "<td>flight ID</td>";
echo "<td>Flight No.</td>";
echo "<td>Company</td>";
echo "<td>From City:</td>";
echo "<td>From City: Departure time</td>";
echo "<td>To City</td>";
echo "<td>To City:Arrival Time</td>";
echo "<td>Days</td>";
echo "<td>Number of Seats (E)</td>";
echo "<td>Number of Seats (B)</td>";
echo "<td>Fare Economy Class</td>";
echo "<td>Fare Business Class</td>";


echo "</tr>";
while($column=mysql_fetch_array($rs))
{

echo "<tr>";
echo "<td>$column[0]</td>";
echo "<td>$column[1]</td>";
echo "<td>$column[2]</td>";
echo "<td>$column[3]</td>";
echo "<td>$column[4]</td>";
echo "<td>$column[5]</td>";
echo "<td>$column[6]</td>";
echo "<td>$column[7]</td>";
echo "<td>$column[8]</td>";
echo "<td>$column[9]</td>";
echo "<td>$column[10]</td>";
echo "<td>$column[11]</td>";


echo "</tr>";
}
echo "</table>";
}
?>
<?php


if(isset($_POST['searchbycity']))
{
	$fc=$_POST['fromcity'];
	$tc=$_POST['tocity'];
$query="select * from flight where fromcity='$fc' and tocity='$tc'";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1>";
echo "<tr>";
echo "<td>Flight No.</td>";
echo "<td>Company</td>";
echo "<td>From City</td>";
echo "<td>From City: Departure time</td>";
echo "<td>To City</td>";
echo "<td>To City:Arrival Time</td>";
echo "<td>Days</td>";
echo "<td>Number of Seats (E)</td>";
echo "<td>Number of Seats (B)</td>";
echo "<td>Fare Economy Class</td>";
echo "<td>Fare Business Class</td>";


echo "</tr>";
while($column=mysql_fetch_array($rs))
{

echo "<tr>";

echo "<td>$column[1]</td>";
echo "<td>$column[2]</td>";
echo "<td>$column[3]</td>";
echo "<td>$column[4]</td>";
echo "<td>$column[5]</td>";
echo "<td>$column[6]</td>";
echo "<td>$column[7]</td>";
echo "<td>$column[8]</td>";
echo "<td>$column[9]</td>";
echo "<td>$column[10]</td>";
echo "<td>$column[11]</td>";


echo "</tr>";
}
echo "</table>";
}




?>


</div>

</body>
</html>
