<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <title>Sign Up</title>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="style.css">

</head>

<body class="align">

  <div class="grid align__item">

    <div class="register">

      <svg xmlns="http://www.w3.org/2000/svg" class="site__logo" width="56" height="84" viewBox="77.7 214.9 274.7 412">
        <defs>
          <linearGradient id="a" x1="0%" y1="0%" y2="0%">
            <stop offset="0%" stop-color="#8ceabb" />
            <stop offset="100%" stop-color="#378f7b" />
          </linearGradient>
        </defs>
        <path fill="url(#a)"
          d="M215 214.9c-83.6 123.5-137.3 200.8-137.3 275.9 0 75.2 61.4 136.1 137.3 136.1s137.3-60.9 137.3-136.1c0-75.1-53.7-152.4-137.3-275.9z" />
      </svg>

      <h2>Log In</h2>

      <form name="f1" action="connection.php" onsubmit="return validation()" method="POST">

        <div class="form__field">
          <input type="text" id='username' name="username">
        </div>

        <div class="form__field">
          <input type="password" id="password" name="password"  >
        </div>

        <div class="form__field">
          <input type="submit" value="Login" id="btn"  >
        </div>

      </form>


    </div>

  </div>
  <script>
    function validation() {
      var id = document.f1.username.value;
      var ps = document.f1.passname.value;
      if (id.length == "" && ps.length == "") {
        alert("User Name and Password fields are empty");
        return false;
      }
      else {
        if (id.length == "") {
          alert("User Name is empty");
          return false;
        }
        if (ps.length == "") {
          alert("Password field is empty");
          return false;
        }
      }
    }  
  </script>
</body>

</html>