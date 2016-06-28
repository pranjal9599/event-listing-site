<?php include('../../private/init.php'); ?>
<?php 
	$alert = '';
	if(isset($_POST['submit']) && $_POST['submit'] != '') {

		$name = htmlspecialchars($_POST['name']);
		$date = htmlspecialchars($_POST['date']);
		$organiser = htmlspecialchars($_POST['organiser']);
		$description = nl2br(htmlspecialchars($_POST['description']));
		$city = htmlspecialchars($_POST['city']);
		$location = htmlspecialchars($_POST['location']);

		$event = new Event($name, $date, $organiser, $description, $city, $location);
		$event->upload_image();

		if ($event->create()) {
			$alert = 'Event Created Successfully';
		} else {
			$alert = 'Some error occurs';
		}
	}


?>
<?php include_once('../../private/layouts/header-admin.php'); ?>

<script>
	alert('<?php echo $alert; ?>');
</script>

<div class="container">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<h2>Create New Event</h2>
			<div class="col-lg-12">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" id="name" class="form-control" required> 
					</div>
					<div class="form-group">
						<label for="date">Date</label>
						<input type="date" name="date" id="date" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="organiser">Organiser</label>
						<input type="text" name="organiser" id="organiser" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="description">Description</label>
						<textarea name="description" id="description" class="form-control" cols="30" rows="10" required></textarea>
					</div>
					<div class="form-group">
						<label for="city">City</label>
						<input type="text" name="city" id="city" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="location">Location</label>
						<input type="text" name="location" id="location" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="image">Image</label>
						<input type="file" name="image" id="image" required>
					</div>

					<div class="form-group">
						<input type="submit" name="submit" id="submit" class="btn btn-primary btn-lg">
					</div>
				</form>
			</div>

		</div>
	</div>
</div>