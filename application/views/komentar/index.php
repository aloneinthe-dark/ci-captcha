<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Komentar</title>
</head>
<body>
	<div style="margin-left: 500px; margin-top: 150px;">

		<form action="<?= site_url('komentar/simpanKomentar') ?>" method="POST">
			
			<label>Nama</label>
			<br>
			<input type="text" name="nama">
			<br><br>
			<label>Komentar</label>
			<br>
			<textarea name="komentar" cols="30" rows="10"></textarea>
			<br><br>

			<?= $image ?>
			<br>
			<label>Captcha</label>
			<br>
			<input type="text" name="captcha">

			<br><br>
			<button type="submit">Submit</button>

		</form>
	</div>
</body>
</html>