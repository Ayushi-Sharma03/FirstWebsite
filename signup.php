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
function nex()
{
window.location.href="https://www.theverge.com/";
}
</script>
<style>
body{
background-color:white;
background-position:top;
background-image:url("https://i.pinimg.com/originals/78/54/dc/7854dccccc6f6abb22aea0fc7426df42.jpg");
background-size:1540px 800px;
background-repeat:no-repeat;
}
#but
{
background-color:#CCFFCC;
border-radius:40px;
color:black;
border-width:2px 2px 6px 6px;
border-color:#339933;
height:50px;
width:100px;
text-size:12px;
}
</style>
</head>
<body>
<center>
<h1><b><font face="CENTURY GOTHIC" color=333333 size="64">Welcome</font></b></h1><br>
<h2><u><font face="Candara" color=FF9900>Register Yourself Now by Signing Up for Free!!</font></u></h2><br><br>
</center>
<form action="signup.php" method="post">
<center>
<br>
Enter Name :&nbsp&nbsp&nbsp<input type=text placeholder="your NAME here" id=name name="name" required><br><br>
Enter Father's Name :&nbsp&nbsp&nbsp<input type=text placeholder="your FATHER NAME here" id=fn name="fn" required><br><br>
Enter Mother's Name :&nbsp&nbsp&nbsp<input type=text placeholder="your MOTHER NAME here" id=mn name="mn" required><br><br>
Enter Branch :&nbsp&nbsp&nbsp<input type=text placeholder="your BRANCH here" id=branch name="branch" required><br><br>
Enter Date Of Birth :&nbsp&nbsp&nbsp<input type=date id=dob name="dob" required><br><br>
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
</select><br><br><br>
<input type=submit value="Sign Up" id=but>&nbsp&nbsp&nbsp&nbsp&nbsp
<input type=button value="Clear" onclick=clr() id=but>&nbsp&nbsp&nbsp&nbsp&nbsp
<input type=submit value="Proceed" id=but onclick=nex()>
<br><br><br>
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
$name=$_POST['name'];
$fn=$_POST['fn'];
$mn=$_POST['mn'];
$branch=$_POST['branch'];
$dob=$_POST['dob'];
$state=$_POST['state'];
$sm=$con->prepare("INSERT INTO `student`(`Name`, `Father's Name`, `Mother's Name`, `Branch`, `D.O.B.`, `State`) VALUES ('$name','$fn','$mn','$branch','$dob','$state')");
$sm->bind_param("ssssss",$name,$fn,$mn,$branch,$dob,$state);
if($sm->execute())
{
echo "    Record added successfully.";
}
$sm->close();
$con->close();
?>
<br>

</form>
<h2><center><font color=#99CCFF face="Gabriola"><a href="techie's_club.php">Back to HOME</a></font></center></h2>
</body>
</body>
</html>