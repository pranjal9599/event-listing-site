<?php require_once('../private/init.php'); ?>
<?php  
	if(!isset($_GET['id']) || $_GET['id'] == '') {
		echo "redirected";
	}
	$id = htmlentities($_GET['id']);
	if($event = Event::find_by_id($id)) {
		// Voila event found!
	} else {
		// Add the redirect to all events page
	}
?>
<?php require_once('../private/layouts/header.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-10-col-lg-offset-1 center">
			<h2><?= $event['name']; ?></h2>
			<div class="row">
				<div class="col-lg-6">
					<img src="<?= $event['image']; ?>" alt="" class="img-responsive" style="max-height: 500px;">
				</div>
				<div class="col-lg-6">
					<p><?= $event['description']; ?></p>
				</div>
			</div>
		</div>
	</div>
</div>