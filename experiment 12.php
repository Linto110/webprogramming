<html>
<head>
  <title>Form using PHP and JavaScript</title>
  <style>
    body {
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }
    .container {
      width: 40%;
      margin: 0 auto;
      padding: 20px;
      background-color: white;
      border-radius: 8px;
      margin-top: 50px;
    }
    h2 {
      text-align: center;
      color: #333;
    }
    label {
      display: block;
      margin-bottom: 8px;
      color: #333;
    }
    
 
  </style>
</head>
<body>
  <div class="container">
    <form method="post" action="">
      <h2>Registration Form</h2>

      <label for="Name">Name:</label>
      <input type="text" name="Name" id="Name" />

      <label for="mob">Mobile No:</label>
      <input type="text" name="mob" id="mob" maxlength="10"/>

      <label for="email">Email:</label>
      <input type="email" name="email" id="email" />

      <label for="user">Username:</label>
      <input type="text" name="user" id="user" />

      <label for="password">Password:</label>
      <input type="password" name="password" id="password" />

      <input type="submit" value="Submit" name="submit" />
    </form>
  </div>

  <?php
  if (isset($_POST['submit'])) {
      $name = $_POST['Name'];
      $email = $_POST['email'];
      $mob = $_POST['mob'];
      $user = $_POST['user'];
      $password = $_POST['password'];

      if (empty($name)) {
          echo "<script>alert('Enter Name !!');</script>";
      } else if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
          echo "<script>alert('Enter Valid Name !!');</script>";
      } else if (empty($email)) {
          echo "<script>alert('Enter Email !!');</script>";
      } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          echo "<script>alert('Enter Valid Email !!');</script>";
      } else if (empty($mob)) {
          echo "<script>alert('Enter Mobile No !!');</script>";
      } else if (!is_numeric($mob)) {
          echo "<script>alert('Enter Valid Mobile No !!');</script>";
      } else if (strlen($mob) != 10) {
          echo "<script>alert('Enter Valid Mobile No !!');</script>";
      } else if (empty($user)) {
          echo "<script>alert('Enter Username !!');</script>";
      } else if (empty($password)) {
          echo "<script>alert('Enter Password !!');</script>";
      } else if (strlen($password) < 8) {
          echo "<script>alert('Password must contain 8 characters !!');</script>";
      } else {
          echo "<script>alert('Registration Successful !');</script>";
      }
  }
  ?>
</body>
</html>

