<html>
<head>
	<meta charset="UTF-8">
	<title>Semi Restful Route Demo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  	<style>
  		.container-form {
  			width: 400px;
  			vertical-align: middle;
  			text-align: center;
  		}
  		.container-table {
  			width: 800px;
  			vertical-align: middle;
  			text-align: center;
  		}
  		button {
  			float: right;
  			margin-top: 5px;
  		}
  		.form-control {
  			margin: 5px;
  		}
  		table {
  			margin: 50px auto;
  		}
  		thead {
  			background-color: gray;
  			color: white;
  			padding: 5px;
  		}
  		td {
  			padding: 5px;
  		}
      .alert {
        text-align: center;
        max-width: 500px;
        margin: 10px auto;
      }
      h3 {
        text-align: center;
      }
  	</style>
</head>
<body>
  <h3>Products</h3>
	<div class="container container-table">
		<table class="table-responsive table-striped">
			<thead>
        <td>ID</td>
				<td>Name</td>
				<td>Description</td>
				<td>Price</td>
				<td>Actions</td>
			</thead>
			<tbody>
	<?php 
  foreach ($id as $key => $value)
    {
      echo "<tr><td>{$id[$key]}</td><td>{$name[$key]}</td><td>{$description[$key]}</td><td>{$price[$key]}</td><td><a href=\"courses/show/$value\">Show</a> | <a href=\"courses/edit/$value\">Edit</a> | <a href=\"courses/destroy/$value\">Remove</a></td></tr>";
    }
	?>
			</tbody>
		</table>
	</div>
</body>
</html>