<html>
<head>
	<meta charset="UTF-8">
	<title>Edit <?php echo $name; ?></title>
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
  		button {
  			float: right;
  			margin-top: 5px;
  		}
  		.form-control {
  			margin: 5px;
  		}
      .alert {
        text-align: center;
        max-width: 500px;
        margin: 10px auto;
      }
  	</style>
</head>
<body>
    <?php 

        if ($this->session->userdata('error'))
        {
          ?><div class="alert alert-danger">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Error!</strong>
          <?php echo $this->session->userdata('error');
          $this->session->unset_userdata('error');
        }
     ?>
  </div>
	<div class="container container-form">
		<h1>Add your product below!</h1>
		<form class="form-group" action="/products/update/<?php echo $id; ?>" method="post" role="form">
			<input class="form-control" type="hidden" action="action" value='update'>
			Product Name<input class="form-control" type='text' value='<?php echo $name; ?>' name='name' required>
			Description<textarea class="form-control" type='text' name='description'><?php echo $description; ?></textarea>
      Price ($)<input class="form-control" type='text' value='<?php echo $price; ?>' name='price' required>
			<button type="submit" class="btn-primary">Update</button>
		</form>
    <h5><a href="/products">Go Back</a></h5>
	</div>
</body>
</html>