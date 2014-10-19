<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Go DJ</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/prefixfree.min.js"></script>

</head>

<body>

  <div class="body"></div>
    <div class="grad"></div>
    <div class="header">
      <div>Go<span>DJ</span></div>
    </div>
    <br>
    <?php
      if(!isset($_POST['user']))
      {
        ?>
        <div class="login">
          <form action="/GoDJ?login=true" method="post">
            <input type="text" placeholder="username" name="user"><br>
            <input type="password" placeholder="password" name="password"><br>
            <input type="submit" value="Login">
          </form>
        </div>
        <?
      }
    ?>
    

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

</body>

</html>