<?php
/**
 * @author Ali <techsupport@brafton.com>
 * @package Terminati
 */
require_once 'functions.php';
?>
<html>
	<?php require_once 'header.php' ?>
	<body>
		<div class="row" style="margin: 0 0 3em 0;">
	    	<div class="col-md-10 col-md-offset-1">
				<h1>Terminati</h1>
				<div class="description">
					<p> Scan was successful. No missing articles found so nothing was deleted. Find a zip file containg all provided articles below.</p>
					<a class="btn btn-primary" href="<?php echo get_archives_path(); ?>" download>Download</a>
				</div>
			</div>
		</div>
	</body>
</html>