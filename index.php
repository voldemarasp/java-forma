<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript"></script>
	<title></title>
	<script src="script.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-8">
				<table class="table">
					<thead>
						<tr>
							<th>Nr.</th>
							<th>1</th>
							<th>2</th>
							<th>3</th>
							<th>4</th>
							<th>5</th>
							<th>6</th>
						</tr>
					</thead>
					<tbody id="lentele">

					</tbody>
				</table>
			</div>
			<div class="col-4">
				<span>Pirmas laukelis</span>
				<input class="form-control" id="vienas" type="text">
				<span>Antras laukelis</span>
				<input class="form-control" id="du" type="text">
				<span>Trecias laukelis</span>
				<input class="form-control" id="trys" type="text">
				<span>Ketvirtas laukelis</span>
				<input class="form-control" id="keturi" type="text">
				<span>Penktas laukelis</span>
				<input class="form-control" id="penki" type="text">
				<button onclick="prideti()" class="btn-success">KELTI</button>
			</div>
		</div>
	</div>
</body>
</html>