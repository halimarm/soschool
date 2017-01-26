<!DOCTYPE html>
<html>
<head>
	<title>File Uploads</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
	<?php echo e(csrf_field()); ?>

	<label for="file">Select File</label>
	<input type="file" name="filename" id="file" value="">
	<input type="submit" name="upload" id="upload" value="Upload">
</form>
</body>
</html>