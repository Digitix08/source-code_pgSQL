<?php

include './config.php';

if (!isset($_SESSION['loggedin'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <title>Simple Flash Video Site</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style type="text/css">
  </style>
</head>

<body>
<div id="container-top">
  <!-- Header -->
  <table width="100%">
   <tr>
    <td width="40px">
     <a href="#">
      <img src="https://upload.wikimedia.org/wikipedia/commons/b/b6/Cube-h.svg" alt="Site logo" height="40px">
     </a>
    </td>
    <td style="width: 466px">
     <form method="post">
        <input name="query" style="width: 82%" type="text">
        <input name="Submit1" type="submit" value="submit">
      </form>	
    </td>
    <td id="top-links">
      <a href="#">SiteName</a> |
      <a href="#">About</a> |
      <a href="logout.php">Logout</a>
    </td>
   </tr>
  </table>
  		  <hr>
  		  <h1>Welcome to dashboard</h1>
	<p>If you see this page then it means youre logged in</p>
	<h3>Statistics</h3>
	<p>Using php for backend scripts</p>
</div> <!-- end of container-top -->
</body>
</html>
