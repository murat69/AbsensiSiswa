<!DOCTYPE html>
  <html>
    <head>
      <!--Import matefile:///E:/Tubes/index.php#test3rialize.css-->
       <link type="text/css" rel="stylesheet" href="css/materialize.min.css" >
       <link rel="stylesheet" type="text/css" href="css/style2.css">
       <link href="css/iconmaterialize.css" rel="stylesheet">
       <link rel="shortcut icon" href="img/logo.png" />
      <title>Login</title>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

      <nav>
        <div class="nav-wrapper teal lighten-2">
          <a href="#" class="brand-logo"><img src="img/logo.png" width="60px;">Absensi Siswa</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
          </ul>
        </div><!--end nav-wrapper-->
      </nav>
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h2 style="text-align: center;">Login First</h2>
				<div class="login">
				 <div class="card-panel blue-grey lighten-5 z-depth-5">
				 <img class="gambar" src="img/logo.png">
				 <form action="log.php?op=in" method="POST">
              <div class="input-field col s12">
              <i class="material-icons prefix">perm_identity</i>
              <input id="icon_prefix" type="text" class="validate" name="username">
              <label for="icon_prefix">Username</label>
              </div><!--end inputfield-->
        			<div class="input-field col s12">
              <i class="material-icons prefix">lock</i>
 					    <input id="password" type="password" class="validate" name="psw">
         			<label for="password">Password</label>
        			</div><!--end inputfield-->
        			<button class="btn waves-effect waves-light" type="submit" name="action"><i class="material-icons left">done_all</i>Submit
  					</button><!--end button-->
				</form><!--end form-->
				</div><!--end cardpanel-->
				</div><!--end login-->  
				</div><!--end cols12-->
			</div><!--end rows-->
		</div><!--end container-->
        
      <!--Import jQuery before materialize.js-->
   <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/plugins.min.js"></script>
      <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    </body>
  </html>