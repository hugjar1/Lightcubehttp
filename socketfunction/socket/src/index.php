<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

<style>
body {
	font-family: 'Varela Round', sans-serif;
}
.form-control {
	box-shadow: none;		
	font-weight: normal;
	font-size: 13px;
}
.navbar {
	background: #fff;
	padding-left: 16px;
	padding-right: 16px;
	border-bottom: 1px solid #dfe3e8;
	border-radius: 0;
}
.nav-link img {
	border-radius: 50%;
	width: 36px;
	height: 36px;
	margin: -8px 0;
	float: left;
	margin-right: 10px;
}
.navbar .navbar-brand {
	padding-left: 0;
	font-size: 20px;
	padding-right: 50px;
}
.navbar .navbar-brand b {
	color: #9ec0fe;		
}
.navbar .form-inline {
	display: inline-block;
}
.navbar a {
	color: #888;
	font-size: 15px;
}
.search-box {
	position: relative;
}	
.search-box input {
	padding-right: 35px;
	border-color: #9ec0fe;
	border-radius: 4px !important;
	box-shadow: none
}
.search-box .input-group-text {
	min-width: 35px;
	border: none;
	background: transparent;
	position: absolute;
	right: 0;
	z-index: 9;
	padding: 7px;
	height: 100%;
}
.search-box i {
	color: #9ec0fe;
	font-size: 19px;
}
.navbar .sign-up-btn {
	min-width: 110px;
	max-height: 36px;
}
.navbar .dropdown-menu {
	color: #999;
	font-weight: normal;
	border-radius: 1px;
	border-color: #9ec0fe;
	box-shadow: 0 2px 8px rgba(0,0,0,.05);
}
.navbar a, .navbar a:active {
	color: #888;
	padding: 8px 20px;
	background: transparent;
	line-height: normal;
}
.navbar .navbar-form {
	border: none;
}
.navbar .action-form {
	width: 280px;
	padding: 20px;
	left: auto;
	right: 0;
	font-size: 14px;
}
.navbar .action-form a {		
	color: #9ec0fe;
	padding: 0 !important;
	font-size: 14px;
}
.navbar .action-form .hint-text {
    text-align: center;
    margin-bottom: 15px;
    font-size: 13px;
}
.navbar .btn-primary, .navbar .btn-primary:active {
	color: #fff;
	background: #9ec0fe !important;
	border: none;
}	
.navbar .btn-primary:hover, .navbar .btn-primary:focus {		
	color: #fff;
	background: #5E7398 !important;
}
.navbar .social-btn .btn, .navbar .social-btn .btn:hover {
	color: #fff;
	margin: 0;
	padding: 0 !important;
	font-size: 13px;
	border: none;
	transition: all 0.4s;
	text-align: center;
	line-height: 34px;
	width: 47%;
	text-decoration: none;
}

.or-seperator {
	margin-top: 32px;
	text-align: center;
	border-top: 1px solid #e0e0e0;
}
.or-seperator b {
	color: #666;
	padding: 0 8px;
	width: 30px;
	height: 30px;
	font-size: 13px;
	text-align: center;
	line-height: 26px;
	background: #fff;
	display: inline-block;
	border: 1px solid #e0e0e0;
	border-radius: 50%;
	position: relative;
	top: -15px;
	z-index: 1;
}
.navbar .action-buttons .dropdown-toggle::after {
	display: none;
}
.form-check-label input {
	position: relative;
	top: 1px;
}
@media (min-width: 1200px){
	.form-inline .input-group {
		width: 300px;
		margin-left: 30px;
	}
}
@media (max-width: 768px){
	.navbar .dropdown-menu.action-form {
		width: 100%;
		padding: 10px 15px;
		background: transparent;
		border: none;
	}
	.navbar .form-inline {
		display: block;
	}
	.navbar .input-group {
		width: 100%;
	}
}
.large-box {
    height: 300px;
    border: 1px solid #ccc;
    margin-top: 20px;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
}
.large-box button {
    padding: 15px 30px;
	margin: 10px;
    font-size: 18px;
    background-color: #9ec0fe;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
.large-box button:hover  {
    background-color: ##9ec0fe;
	animation: zoom-in-zoom-out 1s ease infinite;
}
@keyframes zoom-in-zoom-out {
  0% {
    transform: scale(1, 1);
  }
  50% {
    transform: scale(1.25, 1.25	);
  }
  100% {
    transform: scale(1, 1);
  }
}
.lamp {
    width: 100px;
    height: 100px;
    background-color: gray;
    border-radius: 50%;
	border: 1px solid black;
    transition: background-color 0.5s ease;
  }
  .lamp-on {
    background-color: #c70e0e;
  }

  .lamp-status-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 20vh;
  }
  .lamp-status {
    background-color: #EBF2FE;
    border: 1px solid #ced4da;
    padding: 20px;
    border-radius: 5px;
  }

</style>




<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a href="#" class="navbar-brand">Brand<b>Name</b></a>  		
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
	</button>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<div class="navbar-nav">
			<a href="#" class="nav-item nav-link">Home</a>
			<a href="#" class="nav-item nav-link">About</a>			
			<div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle">Services</a>
				<div class="dropdown-menu">					
					<a href="#" class="dropdown-item">Web Design</a>
					<a href="#" class="dropdown-item">Web Development</a>
					<a href="#" class="dropdown-item">Graphic Design</a>
					<a href="#" class="dropdown-item">Digital Marketing</a>
                </div>
            </div>
			<a href="#" class="nav-item nav-link active">Pricing</a>
			<a href="#" class="nav-item nav-link">Blog</a>
			<a href="#" class="nav-item nav-link">Contact</a>
		</div>
		<form class="navbar-form form-inline">
			<div class="input-group search-box">								
				<input type="text" id="search" class="form-control" placeholder="Search here...">
				<div class="input-group-append">
					<span class="input-group-text">
						<i class="material-icons">&#xE8B6;</i>
					</span>
				</div>
			</div>
		</form>
		<div class="navbar-nav ml-auto action-buttons">
			<div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle mr-4">Login</a>
                <div class="dropdown-menu action-form">
					<form action="/examples/actions/confirmation.php" method="post">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Username" required="required">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Password" required="required">
						</div>
						<input type="submit" class="btn btn-primary btn-block" value="Login">
					</form>
                </div>
			</div>
			<div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle sign-up-btn">Sign up</a>
                <div class="dropdown-menu action-form">
					<form action="/examples/actions/confirmation.php" method="post">
						<p class="hint-text">Fill in this form to create your account!</p>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Username" required="required">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Password" required="required">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Confirm Password" required="required">
						</div>
						<input type="submit" class="btn btn-primary btn-block" value="Sign up">
					</form>
				</div>
			</div>
        </div>
	</div>
</nav>

<br>

<div class="d-flex justify-content-center">
  <div style="border: 2px solid #9ec0fe; padding: 5px;">
    <img src="ledcubelogo.png" alt="Logo" class="img-fluid" style="max-width: 400px;">
  </div>
</div>




<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4">
            <div class="large-box">
                <button id="3">Tärning</button>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="large-box">
			<button id="1">Tänd</button>
    		<button id="2">Släck</button>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="large-box">
                <button id="4">Ljusshow</button>
            </div>
        </div>
    </div>
</div>

<br>


<div class="container">
	<div class="row justify-content-center">
    	<div class="col-auto">
			<div class="lamp">
			</div>
		</div>
	</div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="lamp-status-container">
        <div class="lamp-status">
          <p>This visualization of the lamp shows whether the LED cube is on or off.</p>
        </div>
      </div>
    </div>
  </div>
</div>





    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        var conn = new WebSocket('ws://192.168.30.136:8080');
        conn.onopen = function(e) {
            console.log("Connection established!");
        };

        // conn.onmessage = function(e) {
        //     if (e.data=="Username") {
        //         $("#user").html('<form><input type="text" id="username" name="username"></form><button id="sendubutton">send username</button>'); 
        //     }
        //     $("#svar").text(e.data);
        // };

        // $(document).on("click","#sendubutton", function(){

        //     conn.send("UUU"+$("#username").val());
        //     console.log("sent username");
            
        // });
    
        $(document).on("click","#1", function(){
        conn.send("tänd");
        console.log("sent tänd");
        });
        $(document).on("click","#2", function(){
        conn.send("släck");
        console.log("sent släck");
        });

    </script>
    <script>
        $(document).on("click", ".action-buttons .dropdown-menu", function(e){
			e.stopPropagation();
		});
    </script>
	<script>
$(document).ready(function(){
	$("#1").click(function(){
		$(".lamp").addClass("lamp-on");
	});

	$("#2").click(function(){
		$(".lamp").removeClass("lamp-on");
	});
	$("#3").click(function(){
		$(".lamp").addClass("lamp-on");
	});
	$("#4").click(function(){
		$(".lamp").addClass("lamp-on");
	});
});
	</script>

</body>
</html>