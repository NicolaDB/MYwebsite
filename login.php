<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="login.css">
    <title>PHP index page</title>
  </head>
  <body>
    <div class="wrapper">

      <nav><!--it should reamin always the same, we have attached a css file only for styling the navbar-->
        <ul>
          <li><a class="nav_elements" href="index.php"><img src="files/homelogo.png" alt="" width="50px" height="48px"></a></li>
          <li><a class="nav_elements" href="discover.php">About us</a></li>
          <li><a class="nav_elements" href="blog.php">Find Blogs</a></li>
          <li><a class="nav_elements" href="signup.php">Sign up</a></li>
          <li><a class="nav_elements" href="login.php">Login</a></li>
        </ul>
      </nav>

      <div class="form">
        <h1>sign up form</h1>
        <br>
        <form class="signup" action="signup.inc.php" method="post">
          <input type="text" name="" value="" placeholder="name">
          <input type="text" name="" value="" placeholder="surname">
          <input type="text" name="" value="" placeholder="email">
          <label for="age">Your Age</label>
          <select class="select" name="age">
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
          </select>
          <button class="submit" type="submit" name="submit" value="submit">Submit</button>
        </form>
      </div>

    </div>
  </body>
</html>
