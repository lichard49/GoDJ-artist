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
 
     <?php if(!isset($_POST["password"])){ ?> 
       <div class="login">
          <form action="/GoDJ-artist/index.php" method="post">
            <input type="text" placeholder="username" name="user"><br>
            <input type="password" placeholder="password" name="password"><br>
            <input type="submit" value="Login">
          </form>
        </div>
     <?php } else {?>

       <div class="login" id="event_form">
          <form action="/GoDJ-artist/graph.html" method="post">
            <input type="text" placeholder="Event ID" id="event_id"><br>
            <input type="submit" id = "create_event" value="Create Event">
          </form>
        </div>
     <?php } ?>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
  <script src='datamazing.js'></script>
</body>

</html>
