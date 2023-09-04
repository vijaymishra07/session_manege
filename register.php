<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Register page</title>
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
	<div class="container pt-3">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="card">
				  <h5 class="card-header">Register</h5>
				  <div class="card-body">
				    <form action="insertdb.php" method="post">
					  <div class="mb-3">
					    <label for="Yourname" class="form-label">Name</label>
					    <input type="text" class="form-control" name="y_name" id="Yourname" aria-describedby="emailHelp">
					  </div>
					  <div class="mb-3">
					    <label for="yourmobileno" class="form-label">Mobile No</label>
					    <input type="number" class="form-control" name="y_mobileNo" id="yourmobileno">
					  </div>
					  <div class="form-check">
					  <input class="form-check-input" value="female" type="radio" name="y_radio" id="flexRadioDefault1">
					  <label class="form-check-label" for="flexRadioDefault1">
					    female
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="radio" value="male" name="y_radio" id="flexRadioDefault2" checked>
					  <label class="form-check-label" for="flexRadioDefault2">
					    Male
					  </label>
					</div>
					  <div class="mb-3">
					    <label for="youremail" class="form-label">Email</label>
					    <input type="text" class="form-control" name="y_email" id="youremail">
					  </div>
					  <div class="mb-3">
					    <label for="yourmobileno" class="form-label">Password</label>
					    <input type="number" class="form-control" name="y_password" id="yourmobileno">
					  </div>
					  <div class="mb-3 form-check">
					    <input type="checkbox" class="form-check-input" id="exampleCheck1">
					    <label class="form-check-label" for="exampleCheck1">Check me out</label>
					  </div>
					  <button type="submit" name="submit_insert" class="btn btn-primary">Submit</button>
					</form>
				  </div>
				</div>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>