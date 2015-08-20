<html>
<head>
	<meta charset="UTF-8">
	<title>Semi Restful Route Demo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  	<style>
  		body {
  			text-align: center;
  		}
  	</style>
</head>
<body>
  <h3>Product</h3>
  <h4>Name: <?php echo $name ?></h4>
  <h4>Description: <?php echo $description ?></h4>
  <h4>Price: <?php echo $price ?></h4>
  <h5> <a href="/products/edit/<?php echo $id; ?>">Edit</a> | <a href="/products">Back</a></h5>
</html