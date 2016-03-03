<!DOCTYPE html>
<html lang="en">
<head>
	<title>CompPass</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>

<?php include("./nav.php");
include_once("./accessdb.php"); ?>

<div class="container-fluid">

	<h2>View Raw Location Data</h2>

	<!-- Display Data -->


	<form role="form" method="post">
		<input type="submit" name="refreash" class="btn btn-success" value="Refresh">
	</form>

	<br>

	<?php
	$query = "SELECT * FROM Location";
	$result = mysqli_query($link, $query);
	?>

	<div class="container-fluid">
		<div class="table-responsive">
			<table class="table table-striped table-condensed table-bordered">
				<small>
					<tr>
						<td>Id</td>
						<td>Title</td>
						<td>Description</td>
						<td>Latitude</td>
						<td>Longitude</td>
					</tr>
					<?php
					while ($row = mysqli_fetch_assoc($result)) {
						?>
						<tr>
							<td><?php echo $row['Id'] ?></td>
							<td><?php echo $row['Title'] ?></td>
							<td><?php echo $row['Description'] ?></td>
							<td><?php echo $row['Latitude'] ?></td>
							<td><?php echo $row['Longitude'] ?></td>

						</tr>
					<?php } ?>
				</small>
			</table>
		</div>
	</div>
	<!-- End container-->


</div>

</body>
</html>