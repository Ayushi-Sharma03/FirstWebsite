<!DOCTYPE html>
<html>
<head>
<script language="javascript">
function passw()
{
var p=document.getElementById("p").value;
if(p!=6603)
{
alert("Wrong Password!! Try Again.");
}
else
{
window.location.href="http://localhost/list.php";
}
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
background-image:url("https://wallpaperaccess.com/full/2454628.png");
background-size:1500px 780px;
background-repeat:no-repeat;
}
</style>
</head>
<body>
<center>
<h1><b><font face="CENTURY GOTHIC" color=white size="64">Hey Admin!!</font></b></h1><br><br>
<h2><font face="Candara" color=00FFFF>Please Enter your Password Here</font></h2><br><br><br><br>
<h2><font color=99FF99 face="CENTURY GOTHIC">Enter Password :&nbsp&nbsp&nbsp<input type=password id=p placeholder="Enter the Password here"></font><h2><br><br>
<input type=button value="Submit" id=but onclick=passw()><br><br><br><br>
<h2><b><font color=#99CCFF face="Gabriola"><a href="techie's_club.php">Back to HOME</a></font></b></h2>
</center>
</body>
</html>