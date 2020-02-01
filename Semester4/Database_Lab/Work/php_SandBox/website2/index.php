<?php include "server_info.php"; ?>
<!DOCTYPE html>
<head>
	<title>System Info</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<!-- this is for Server Array -->

	<div class="container">
		<h1>Server & File Info</h1>
		<?php if($server): ?>
			<ul class="list-group">
				<?php foreach ($server as $key => $value): ?>
					<li class="list-group-item">
						<strong> <?php echo $key; ?>: </strong>
						<?php echo $value; ?>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</div>

	<!-- this is for client Array -->

	<div class="container">
		<h1>Client Info</h1>
		<?php if($client): ?>
			<ul class="list-group">
				<?php foreach ($client as $key => $value) ?>
					<li class="list-group-item">
						<strong> <?php echo $key; ?>: </strong>
						<?php echo $value; ?>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</div>
</body>
</html>