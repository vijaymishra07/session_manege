<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Login Form</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="mywork.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Contact</a>
        </li>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="login.html" class="btn btn-outline-danger" tabindex="-1" role="button" aria-disabled="true">Login</a>
        &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
      </ul>
    </div>
  </div>
</nav>
  	<div class="container pt-5">
  		<div class="row">
  			<div class="col-sm-4"></div>
  			<div class="col-sm-4">
  				<div class="card">
				  <h5 class="card-header">Featured</h5>
				  <div class="card-body">
				   <form action="loginfile.php" method="post">
					  <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Email address</label>
					    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
					  </div>
					  <div class="mb-3">
					    <label for="Password" class="form-label">Password</label>
					    <input type="password" class="form-control" name="password" id="Password">
					  </div>
					  <div class="mb-3 form-check">
					    <input type="checkbox" class="form-check-input" id="exampleCheck1">
					    <label class="form-check-label" for="exampleCheck1">Check me out</label>
					  </div>
					  <button type="submit" name="submitInsert" onclick="checkEmail();" class="btn btn-primary">Submit</button>
					  <a href="register.html" tabindex="-1" role="button" aria-disabled="true">Click Rugister</a>
					</form>
				  </div>
				</div>
  			</div>
  			<div class="col-sm-4"></div>
  		</div>
  	</div>

  	<script type="text/javascript">
  		function checkEmail() {
  	var pasword =document.getElementById('Password').value;
    var email = document.getElementById('exampleInputEmail1');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    
    if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    }else if (pasword ==""){
    	alert('Password is Requred !!!');
    }
 
}
  	</script>
</body>
</html>