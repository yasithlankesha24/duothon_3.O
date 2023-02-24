
<!DOCTYPE html>
<html lang="en">
  <?php
  include("header_temp.html");
  ?>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login 1</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="header_style.css" />
  </head>
  <body>
    <div class="login-card">
      <h2>Log In</h2>
      <h3>Enter your credentials</h3>
      <form class="login-form">
        <div class="username">
          <input
            spellcheck="false"
            class="control"
            type="text"
            placeholder="Username"
            onkeyup="handleChange(event)"
            onkeydown="handleStartTyping()"
          />
          <div id="spinner" class="spinner"></div>
        </div>
        <div id="alert" class="alert">Username already exists</div>
        <input
          spellcheck="false"
          class="control"
          id="password"
          type="password"
          placeholder="Password"
        />
        <button class="control" type="button">Log In</button>
        <p id=new>Not registered yet?</p>
        <a href="signup.html">
        <button class="signin" type="button">Create a Account</button>
        </a>
      </form>
    </div>
    <script type="text/javascript" src="main.js"></script>
  </body>
  <?php
  include("footfile.html");
  ?>
</html>