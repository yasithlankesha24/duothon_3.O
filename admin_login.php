<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Page</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <div class="login-card">
      <h2>Admin Log In</h2>
      <h3>Enter your login details</h3>
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
      </form>
    </div>
    <script type="text/javascript" src="main.js"></script>
  </body>
</html>