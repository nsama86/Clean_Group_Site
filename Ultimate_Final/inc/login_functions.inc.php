<?php
// Redirect the user to the admin page when they log in
function redirect_user()
{
	header("Location: login.php");
}

function logged_in()
{
	header("Location: admin.php");
}

/* This function validates the form data (email address and password)
 * If both are present, the database is queried.
 * The function requires a database connection.
 * The function returns an array of information, including:
 * - a true/false variable indicating success.
 * - an array of either errors or the database result.
 */
function check_login($dbc, $email = "", $pass = "")
{
	$errors = array(); // Initialize the error array

	//Validate the email address:
	if (empty($email))
	{
		$errors[] = 'You forgot to enter your email address.';
	}
	else
	{
		$e = mysqli_real_escape_string($dbc, trim($email));
	}

	//Validate the password:
	if (empty($pass))
	{
		$errors[] = 'You forgot to enter your password.';
	}
	else
	{
		$p = mysqli_real_escape_string($dbc, trim($pass));
	}

	if (empty($errors)) // If we don't have any errors
	{
		//Retrieve the user_id and first_name for that email/password combination:
		$query = "SELECT first_name FROM users WHERE email='$e' AND pass=SHA1('$p')";
		$result = @mysqli_query($dbc, $query); // Run the query

		// Check the result
		if (mysqli_num_rows($result) == 1)
		{
			//Fetch the record
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

			// Return true and the record
			return array(true, $row);
		}
		else
		{
			$errors[] = 'The username and password entered do not match those on file.';
		}
	} // End of empty($errors) IF.

	//Return false and the errors:
	return array(false, $errors);
} // End of check_login() function

?>
