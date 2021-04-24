<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<title>Document</title>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-xl-4">
			<form action="search/process" method="get">

				<div class="form-group my-2">
					<label>
						Search Users
						<input type="text" name="name" class="form-control" placeholder="name" required>
					</label>
				</div>

				<div class="form-group my-2">
					<input type="checkbox" name="female" value="1"> Female
				</div>
				<div class="form-group my-2">
					<input type="checkbox" name="male" value="1"> Male
				</div>

				<h3>Sports</h3>

				<div class="form-group my-2">
					<input type="checkbox" name="basketball" value="1"> Basketball
				</div>
				<div class="form-group my-2">
					<input type="checkbox" name="volleyball" value="1"> Volleyball
				</div>
				<div class="form-group my-2">
					<input type="checkbox" name="baseball" value="1"> Baseball
				</div>
				<div class="form-group my-2">
					<input type="checkbox" name="soccer" value="1"> Soccer
				</div>
				<div class="form-group my-2">
					<input type="checkbox" name="football" value="1"> Football
				</div>

				<input type="submit" class="btn btn-primary my-2">
			</form>
		</div>


		<div class="col-xl-8">
			<?php $this->load->view("player/player"); ?>
		</div>
	</div>
</div>

</body>
</html>
