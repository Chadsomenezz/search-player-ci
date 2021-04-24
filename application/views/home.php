<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

<h1>List of all customer and number of leads</h1>
<table>
	<tr>
		<th>Customer Name</th>
		<th>Number of Leads</th>
	</tr>
	<?php foreach ($result as $value): ?>
	<tr>
		<td><?= $value->name; ?></td>
		<td><?= $value->lead; ?></td>
	</tr><?php endforeach; ?>
</table>

<div id="chartContainer" style="height: 370px; width: 100%;"></div>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<script>

var chart = new CanvasJS.Chart(`chartContainer`, {
	animationEnabled: true,
	title: {
		text: `Customers and number of leads`
	},
	data: [{
		type: `pie`,
		startAngle: 240,
		yValueFormatString: `##0.00\"%\"`,
		indexLabel: `{label} {y}`,
		dataPoints: [

			<?php foreach ($result as $value): ?>
				{y: <?= $value->lead ?>, label: "<?= $value->name; ?>"},
			<?php endforeach; ?>
		]
	}]
});
chart.render();

</script>

</body>
</html>




