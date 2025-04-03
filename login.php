<?php
include('includes/cabecalho.php');
?>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form method="POST" action="sistema/config/process.php">
        <input type="text" id="login" class="fadeIn second" name="login" placeholder="login" required>
        <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" required>
        <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Password -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0w6dOMmE7uWGLsJJz6FLqd8gcPrZ7p0yM0p3w0u7pD5w7p5T" crossorigin="anonymous"></script>

</body>

</html>
