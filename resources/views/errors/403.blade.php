<!DOCTYPE html>
<html>
<head>
	<title>No Access</title>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300">
	<style>
		html, body {
			height: 100%;
		}
		body {
			margin: 0;
			padding: 0;
			width: 100%;
			color: #B0BEC5;
			display: table;
			font-weight: 300%;
			font-family: 'Source Sans Pro';
		}

		.container {
			text-align: center;
			display: table-cell;
			vertical-align: middle;
		}

		.content {
			text-align: center;
			display: inline-block;
		}

		.title {
			font-size: 72px;
			margin-bottom: 40px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="content">
			<div class="title">ERROR</div>
			<p>Maaf, Anda Tidak Memiliki Akses Untuk Fitur Ini</p>
			<p><a href="{{ url('/') }}" class="btn btn-primary">Kembali Ke Halaman Awal</a></p>
		</div>
	</div>
</body>
</html>