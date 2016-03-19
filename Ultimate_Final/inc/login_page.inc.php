<!-- Add header to page -->
<?php require_once("./inc/header.php"); ?>
<?php
	if (isset($errors) && !empty($errors))
	{
		echo "<h1>Error!</h1><p class='error'>The following errors occured<br />";
		foreach ($errors as $msg)
		{
			echo " - $msg<br />\n";
		}
		echo '</p><p>Please try again.</p>';
	}

	//Display the form
?>
<!-- Page Heading -->
<section class="section page-heading animate-onscroll">
    <h1>Administration</h1>
</section>
<!-- Page Heading -->
<section class="section full-width-bg gray-bg animate-onscroll">
    <div class="row">

        <h1 class="no-margin-top">Welcome to the <br>Kent Food Bank <span class="orange">&amp;</span><br> Emergency Services</h1>
        <h1 class="no-margin-top">Admin Login</h1>
        <form action="login.php" method="post">

				<div class="col-lg-4 col-sm-12">
					<label>Username:<span class="error">*</span></label>
					<input type="text" name="email" class="form-control" placeholder="username" value="<?php echo htmlentities($username); ?>" required/>

					<label>Password:<span class="error">*</span></label>
					<input type="password" class="form-control" name="pass" placeholder="password" value="" required/>

					<input type="submit" name="submit" value="Submit" />
				</div>
        </form>
     </div>

</section>
<!-- Add footer to page -->
<?php require_once("./inc/footer.php"); ?>
