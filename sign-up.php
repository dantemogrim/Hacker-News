<!-- Sign up form. -->
<a class="navLink" href="/index.php">Home</a>
<link rel="stylesheet" href="/assets/styles/app.css">

<p>Welcome, stranger! Glad you're joining us.</p>
<p>Fill the forms with your information to get started.</p>

/*
password_hash()

$hash = password_hash($password, PASSWORD_DEFAULT);

if (password_verify($password, $hash)) {
echo "Access granted.";
}

-----

SELECT username, password FROM users
WHERE username = 'Dante'
LIMIT 1;

*/




<form>

	<section>
		<label for="email">E-mail:</label>
		<input type="email">
	</section>

	<br>

	<section>
		<label for="password">Passphrase:</label>
		<input type="password">
	</section>

	<br>

	<button type="">Sign up</button>

</form>