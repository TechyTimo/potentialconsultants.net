<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMINISTRATION PAGE</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<div id="container">

<div id="logo" align="left">
   <a href="Home.php"><img src="logo.gif"  alt="logo" width="200"/></a>
    </div>


<div id="body">
<div id="navMenu">
<ul>
<li><a href="index.html">Home</a></li>
<li><a href="Services.php">Services</a></li>
<li><a href="gallery.php">Gallery</a></li>
<li><a href="about us.html">About Us</a></li>
<li><a href="contacts.html">Contact Us</a></li>


</ul>

</div>
<div id="leftnav">
<div style="margin-left:30px;">
<h3><b>Browse by</b></h3>
<a href="addproduct.php">Add Services</a><br /><br />
<a href="viewproducts.php">View Services</a><br /><br />
<a href="addevent.php">Add Events</a><br /><br />
<a href="viewevent.php">View Events</a><br /><br />
<a href="uploadimage.php">Add Photo</a>
</div>

</div>
<div id="body">
<div align="center" style="margin-top:30px;">

<form action="sliding.php" method="post"  enctype="multipart/form-data">
<table border="0"><tr></tr><tr></tr><tr></tr><tr></tr>
<tr><th></th> <th> UPLOAD PHOTO</th></tr>
<tr></tr><tr></tr><tr></tr>

<tr>
<td>Image</td>
<td><input type="file" name="file" value="image" /></td>
</tr>


<tr>
<td>Title</td>
<td><input type="text" name="title"  /></td>
</tr>

<tr></tr><tr></tr>

<tr>
<td></td>
<td><input type="submit" value="UPLOAD" /></td>
</tr>

</table>
</form>

</div>
</div>



<div id="footer">
</div>
</div>
</body>
</html>