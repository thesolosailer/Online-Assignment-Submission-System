<?php

$connect= new mysqli("localhost","root","","demo1") or die("ERROR:could not connect to the database!!!");
 
extract($_POST);
if(isset($save))
{
$msg="<pre>$a</pre>";
$query="insert into textarea values('','$e','$msg')";
$connect->query($query);
echo "Data saved";	
}
?><head>
	<title>Textarea to database - Phptpoint</title>
</head>


<style>
input,textarea{width:250px}
textarea{height:200px}
input[type=submit]{width:150px}
</style>




<form method="post">
<table  style="float:left;margin-left:13%" width="200" border="1">
 
  <tr>
    <td>For Email</td>
    <td><input type="email" name="e" placeholder="email" /></td>
  </tr>
 
  
  <tr>
    <td>Solutions..</td>
    <td><textarea placeholder="contents"  name="a"></textarea></td>
  </tr>
  <tr>
    <td colspan="2">
		<input type="submit" value="Save" name="save"/>
		<input type="submit" value="Display" name="disp"/>
	</td>
  </tr>
  
</table>
</form>



<?php 
if(isset($disp))
{
	$query="select * from textarea";
	$result=$connect->query($query);
	echo "<table width='60%' border=1>";
	echo "<tr><th>Email</th><th>Message</th></tr>";
	while($row=$result->fetch_array())
		{
		echo "<tr>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['message']."</td>";
		echo "</tr>";
		}
	echo "</table>";	
}