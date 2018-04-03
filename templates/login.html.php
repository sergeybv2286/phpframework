<?php
 if(isset($error)):
 	echo '<div class="errors">' . $error . '</div>';
 endif;
?>

<form method="post" action>
	<label for="email">Your email address</label>
	<input type="text" id="email" name="email">

	<label for="password">Your password</label>
	<input type="text" id="password" name="password">

	<input type="submit" name="login" value="Log in">
</form>

<p>Still dont have an account? <a href="/author/register">Click here to register</a></p>