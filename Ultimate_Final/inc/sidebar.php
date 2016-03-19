
<!-- Sidebar Start -->
<div class="col-lg-3 col-md-3 col-sm-4 sidebar animate-onscroll">
    <!-- Calendar Button linking to calendar and events page -->
	<div class="banner-wrapper">
		<a class="banner <?php echo (kentFoodBankOpen() ? 'banner-open' : 'banner-closed'); ?>" href="foodbank.php">
			<i class="icons icon-clock"></i>
			<h4>Kent Food Bank</h4>
			<p><?php echo (kentFoodBankOpen() ? 'Currently Open!' : 'Currently Closed'); ?></p>
		</a>
	</div>

	<div class="banner-wrapper">
		<a class="banner <?php echo (birchCreekOpen() ? 'banner-open' : 'banner-closed'); ?>" href="birchcreek.php">
			<i class="icons icon-clock"></i>
			<h4>Birch Creek Annex</h4>
			<p><?php echo (birchCreekOpen() ? 'Currently Open!' : 'Currently Closed'); ?></p>
		</a>
	</div>

    <div class="banner-wrapper">
        <a class="banner" href="event-calendar.php">
            <i class="icons icon-calendar"></i>
            <h4>Calendar</h4>
            <p>What's happening this month</p>
        </a>
    </div>
    <!--/Calendar Button -->

    <!-- Volunteer Button linking to volunteer application -->
    <div class="banner-wrapper">
        <a class="banner" href="apply.php">
            <i class="icons icon-users"></i>
            <h4>Volunteer</h4>
            <p>Help us by donating your time</p>
        </a>
    </div>
    <!-- /Volunteer Button -->

    <!-- Donate Button linking to donate in person  -->
    <div class="banner-wrapper">
        <a class="banner" href="inperson.php">
            <i class="icons icon-heart-empty"></i>
            <h4>Donate</h4>
            <p>Find out how to help</p>
        </a>
    </div>
    <!-- /Donate button -->

    <!-- PayPal Button linking to direct paypal donation -->
    <div class="banner-wrapper">
         <a class="banner donate-banner" href="https://www.paypal.com/us/webapps/mpp/search-cause?charityId=120598&s=3" target="_blank">
            <i class="icons icon-paypal"></i>
            <h4>Donate via PayPal</h4>
            <p>Donate directly to us via PayPal</p>
        </a>
    </div>
    <!-- /PayPal Button -->

     <!-- MiniButtons for Facebook and Contact Us -->
    <div class="social-media">
        <span class="small-caption">Get connected:</span>
        <ul class="social-icons">
            <!-- Links to FaceBook Page -->
            <li class="facebook"><a href="http://facebook.com/kentfoodbank/" target="_blank" class="tooltip-ontop" title="Facebook"><i class="icons icon-facebook"></i></a></li>
            <!-- Links to contact form -->
            <li class="email"><a href="contact.php" class="tooltip-ontop" title="Email"><i class="icons icon-mail"></i></a></li>
        </ul>
    </div>
    <!-- /MiniButtons -->
</div>
<!-- /Sidebar End -->

<?php
// Function to check if Kent Food Bank is open
// Returns true or false
function kentFoodBankOpen()
{
	date_default_timezone_set('America/Los_Angeles');
	$day = date("w");
	$hour = date("G");

	if( ($day == 2 || $day == 3 || $day == 5) &&  // Tue / Wed / Fri
			($hour >= 10 && $hour <= 13) ) //Between 10 and 1
	{
		return true;
	}
	else
	{
		return false;
	}
}

//Check if birch creek is open - returns true or false
function birchCreekOpen()
{
	date_default_timezone_set('America/Los_Angeles');
	$day = date("w");
	$hour = date("G");
	if( ($day == 1) &&  // Monday
			($hour >= 10 && $hour <= 13) ) //Between 10 and 1
	{
		return true;
	}
	else
	{
		return false;
	}
}
?>
