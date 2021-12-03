<?php
// (A) LOGIN CHECKS
require "2-check.php";
 
// (B) LOGIN PAGE HTML
if (isset($failed)) { 
echo '<div id="bad-login">Invalid user or password.</div>';
}

echo '

<meta charset="utf-8" />
<title>Sign in</title>
<meta name="description" content="MRE CHAT" />
<link rel="icon" type="image/png" href="https://static.thenounproject.com/png/18798-200.png">
<link rel="stylesheet" href="style.css" />
<form id="login-form" method="post" target="_self">
  <label for="user">User</label>
  <input type="text" name="user" required/>
  <label for="password">Password</label>
  <input type="password" name="password" required/>
  <input type="submit" id="submitmsg" value="Sign In"/>
</form>';