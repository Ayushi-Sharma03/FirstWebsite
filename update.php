<!DOCTYPE html>
<html>
<head>
<script language="javascript">
function clr()
{
document.getElementById("name").value="";
document.getElementById("fn").value="";
document.getElementById("mn").value="";
document.getElementById("branch").value="";
document.getElementById("dob").value="";
document.getElementById("state").value="";
}
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
background-image:url("https://images.hdqwalls.com/wallpapers/computer-desktop-minimalism-lu.jpg");
background-size:1500px 780px;
background-repeat:no-repeat;
}
</style>
</head>
<body>
<center>
<h1><b><font face="CENTURY GOTHIC" color=white size="64">Welcome</font></b></h1><br>
<h2><font face="Candara" color=00FFFF>To the Updation Page</font></h2><br><br>
</center>
<form action="update.php" method="post">
<center>
<h2><font color=99FF99 face="CENTURY GOTHIC">
Search Name :&nbsp&nbsp&nbsp<input type=text placeholder="SEARCH NAME here" id=r name="r" required><br>
Enter Name :&nbsp&nbsp&nbsp<input type=text placeholder="your NAME here" id=name name="name" required><br>
Enter Father's Name :&nbsp&nbsp&nbsp<input type=text placeholder="your FATHER NAME here" id=fn name="fn" required><br>
Enter Mother's Name :&nbsp&nbsp&nbsp<input type=text placeholder="your MOTHER NAME here" id=mn name="mn" required><br>
Enter Branch :&nbsp&nbsp&nbsp<input type=text placeholder="your BRANCH here" id=branch name="branch" required><br>
Enter Date Of Birth :&nbsp&nbsp&nbsp<input type=date id=dob name="dob" required><br>
Select State :&nbsp&nbsp<select id=state name="state">
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
</select>
</font><h2><br><br>
<input type=submit value="Submit" id=but>&nbsp&nbsp&nbsp&nbsp&nbsp
<input type=button value="Clear" onclick=clr() id=but>
<br><br>
<font color=white>
<?php
error_reporting(0);
$con=new mysqli("localhost","root","","login");
if($con->connect_error)
{
die("Connection Failed : ".$con->connect_error);
}
else
{
echo "Connection Done";
}
error_reporting(0);
$r=$_POST['r'];
$name=$_POST['name'];
$fn=$_POST['fn'];
$mn=$_POST['mn'];
$branch=$_POST['branch'];
$dob=$_POST['dob'];
$state=$_POST['state'];
$mo="UPDATE `student` SET `Name`='$name',`Father's Name`='$fn',`Mother's Name`='$mn',`Branch`='$branch',`D.O.B.`='$dob',`State`='$state' WHERE Name='$r'";
if($con->query($mo)==TRUE)
{
echo "Record UPDATED successfully.\t";
}
else
{
echo "Record NOT UPDATED: ".$con->error;
}
$con->close();
?>
</font>
</center>
</form>
<h2><b><center><font color=#00FFFF face="Gabriola"><a href="list.php">Back to ADMINISTRATION Block</a></font></center></b></h2><br>
</body>
</html>