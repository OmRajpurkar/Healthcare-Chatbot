<?php include('server.php'); ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="images/bot.png">

  <title>HealthCare Chatbot</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="css/register.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


</head>


<body onload="document.form1">
  <article class="card-body mx-auto" style="max-width: 400px;">
    <h4 class="card-title mt-3 text-center">Create Account</h4>
    <p class="text-center">Get started with your free account</p>


    <form name="form1" action="register.php" method="post">
      <!-- Display Validation errors over here -->
      <?php include('errors.php'); ?>
      <div class="form-group input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"> <i class="fa fa-user"></i> </span>
        </div>
        <input class="form-control" placeholder="Full name" type="text" name="name" value="<?php echo $name; ?>">
      </div> <!-- form-group// -->
      <div class="form-group input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
        </div>
        <input class="form-control" placeholder="Email address" type="text" name="email1" value=<?php echo $email; ?>>
      </div> <!-- form-group// -->
      <div class="form-group input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
        </div>
        <select id="selectCountryCode" class="custom-select" style="max-width: 120px;">

        </select>
        <input class="form-control" placeholder="Mobile Number" type="text" name="phone" value=<?php echo $phone; ?>>
      </div> <!-- form-group// -->
      <!-- <div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-building"></i> </span>
			</div>
			 <select class="form-control">
				<option selected=""> Select job type</option>
				<option>Designer</option>
				<option>Manager</option>
				<option>Accaunting</option>
			</select>
		</div> -->
      <div class="form-group input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
        <input class="form-control" placeholder="Create password" type="password" name="pwd1" value=<?php echo $password1 ?>>
      </div> <!-- form-group// -->
      <div class="form-group input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
        <input class="form-control" placeholder="Repeat password" type="password" name="pwd2" value=<?php echo $password1 ?>>
      </div> <!-- form-group// -->
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" onclick="validate();" name="createAccount"> Create Account </button>
      </div> <!-- form-group// -->
      <p class="text-center">Have an account? <a href="login.php">Log In</a> </p>
    </form>
  </article>
  </div>

  </div>
  </article>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="scripts/register.js"></script>
</body>

</html>
