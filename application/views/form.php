<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="<?= base_url("src/output.css") ?>">
</head>


<body>
	<?= form_open("UsersController/create", "class='flex flex-col mx-auto w-1/3'"); ?>
	<label for="">Name</label>
	<?= form_error('name', '<div class="error text-red-500">', '</div>'); ?>
	<input type="text" name="name" value="<?php echo set_value('name'); ?>" class=<?php echo (isset($name_valid) && $name_valid === true) ? '"text-green-500"' : '"text-red-500"'; ?>>

	<label for="password" class="">Password</label>
	<?= form_error('password', '<div class="error text-red-500">', '</div>'); ?>
	<input type="text" name="password" value="<?php echo set_value('password'); ?>" class="<?php echo (isset($password_valid) && $password_valid == 'true') ? 'text-green-500' : 'text-red-500'; ?>">
	<input type="submit" class="">
	<?= form_close(); ?>

</body>

</html>
