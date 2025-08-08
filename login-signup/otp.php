<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <title>Verify account</title>
  <style type="text/css">
    body {
      background-color: #ffffff;
      font-family: Arial, sans-serif;
      text-align: center;
    }
    .container {
      width: 500px;
      margin: 100px auto;
      border: 1px solid #999;
      background-color: #eeeeee;
      padding-bottom: 20px;
      padding-right: 20px;
      padding-left: 20px;
      text-align: left;
    }
    .form-label {
      display: block;
      margin-bottom: 5px;
    }
    .form-input {
      width: 100%;
      padding: 5px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
    }
    .login-button {
      padding: 6px 12px;
      background-color: #d3d3d3;
      border-top: 2px solid #ddd;
      border-left: 2px solid #ddd;
	  border-right: 2px solid #aaa;
	  border-bottom: 2px solid #aaa;
      cursor: pointer;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Verify your account</h2>
    <p>Enter your One Time Password</p>
    <form method="post" action="loading.php">
        <label class="form-label">OTP:</label>
        <input type="text" name="name" class="form-input">
        <input type="submit" name="verify" value="verify" class="login-button">
      </form>
  </div>

</body>
</html>