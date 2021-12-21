<!DOCTYPE html>
<html>
<head>
<script language="javascript">
</script>
<style>
#but
{
background-color:#FFCCFF;
border-radius:50px;
color:black;
border-width:4px 4px 8px 8px;
border-color:purple;
height:50px;
width:100px;
text-size:12px;
}
body{
background-color:black;
background-position:top;
background-image:url("https://s24806.pcdn.co/wp-content/uploads/2021/03/CannonDesign-feature-iStock-970.jpg");
background-size:1500px 780px;
background-repeat:no-repeat;
}
</style>
</head>
<body>
<center>
<h1><b><font face="CENTURY GOTHIC" color=333333 size="64">Administration Block</font></b></h1>
<h2><font face="Candara" color=333333>The List of all Registered Users</font></h2><br><br>
</center>
<form action="list.php" method="post">
<center>
<b>
<?php
error_reporting(0);
$con=new mysqli("localhost","root","","login");
if($con->connect_error)
{
die("Connection Failed : ".$con->connect_error);
}
else
{
echo "Connection Done.    ";
}
echo "<br><br><br>";
$ji="SELECT * from `student`";
$result=$con->query($ji);
echo "<center>";
echo "<table border=5px bgcolor=CCFFFF>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Father's Name</th>";
echo "<th>Mother's Name</th>";
echo "<th>Branch</th>";
echo "<th>D.O.B.</th>";
echo "<th>State</th>";
echo "</tr>";
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
echo "<tr>";
echo "<td>".$row["Name"]."</td>";
echo "<td>".$row["Father's Name"]."</td>";
echo "<td>".$row["Mother's Name"]."</td>";
echo "<td>".$row["Branch"]."</td>";
echo "<td>".$row["D.O.B."]."</td>";
echo "<td>".$row["State"]."</td>";
echo "</tr>";
}
} 
echo "</table>";
echo "</center>";
$con->close();
?>
</b>
<br><br><br>
</center>
</form>
<h2>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font face="Candara" color=black>Any Changes?</font><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font color=#99CCFF face="Gabriola"><a href="delete.php">Delete</a></font><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font color=#99CCFF face="Gabriola"><a href="update.php">Update</a></font><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font color=#99CCFF face="Gabriola"><a href="techie's_club.php">Back to HOME</a></font><br>
</h2>
</body>
</html>