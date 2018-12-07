<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type='text/css'>
	body
	{
		font-family: Arial;
		font-size: 14px;
	}
	a {
		color: blue;
		text-decoration: none;
		font-size: 14px;
	}
	a:hover
	{
		text-decoration: underline;
	}
</style>
</head>
<body>
	<div>
	<?php include_once("menu.php"); ?>
	</div>
	<div style='height:20px;'></div>  
	<div>
		<?php $this->load->view($main_content);?>
	</div>
</body>
</html>
