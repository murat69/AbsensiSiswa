<?php

$is = $_GET['no'];

include "config/koneksi.php";

//query menampilkan data
$tampilsiswa = "SELECT * FROM siswa WHERE no = '$is'";
$hasilsiswa=mysqli_query($konek,$tampilsiswa);
$pilihanpinjam = mysqli_fetch_array($hasilsiswa);


?>
<!DOCTYPE html>
  <html>
    <head>
    <title>Edit Siswa</title>
      <!--Import matefile:///E:/Tubes/index.php#test3rialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css" >
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link href="css/iconmaterialize.css" rel="stylesheet">
      <link rel="shortcut icon" href="img/logo.png" />
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
    <nav class="nav-extended teal lighten-2">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo"><img class="logo" src="img/km.png"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons"></i></a>
      <ul id="nav-mobile" class="right">
        <li><a href="siswa.php" class="btn teal lighten-3 z-depth-5">Kembali</a></li>
        <li><a href="log.php?op=out" class="btn teal lighten-3 z-depth-5">Logout</button></a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="log.php?op=out"><button class="btn">Logout</button></a></li>
      </ul>

      <ul class="tabs tabs-transparent">
        <li class="tab"><a class="active" href="#test1">Edit Siswa</a></li>
      </ul><!--end tabs-->
    
    </div>
  </nav>
  <div class="card-panel teal lighten-5 z-depth-5">
  <div id="test2" class="col s12">
  <div class="container">
    <div class="row">
      <div class="col s12">
      <form method="POST" action="prosesupdate.php" enctype="multipart/form-data">
        <input type="hidden" name="no" value="<?php echo $pilihanpinjam['no']; ?>">
        <div class="input-field col s12">
        <i class="material-icons prefix">perm_identity</i>
        <input id="icon_prefix" type="text" class="validate valid" name="nama" value="<?php echo $pilihanpinjam['nama']; ?>">
        <label class="active"vfor="icon_prefix">Nama Siswa</label>
        </div> <!--input-field-->
        <div class="input-field col s12">
        <i class="material-icons prefix">input</i>
        <input id="icon_prefix" type="text" class="validate valid" name="kelas" value="<?php echo $pilihanpinjam['kelas']; ?>">
        <label class="active" for="icon_prefix">Kelas</label>
        </div><!--input-field-->
        <div class="input-field col s12">
        <i class="material-icons prefix">label</i>
        <input id="icon_prefix" type="text" class="validate valid" name="nis" value="<?php echo $pilihanpinjam['nis']; ?>">
        <label class="active" for="icon_prefix">NIS</label>
        </div><!--input-field-->
        <i class="material-icons prefix">today</i>
        <input type="date" class="datepicker" value="<?php echo $pilihanpinjam['tanggal']; ?>" name="tanggal">
        Keterangan:
    <p>
      <input type="radio" id="test3" name="status" value="alpha" <?php if ($pilihanpinjam['status']=="Alpha"){
      echo "checked";
      } ?>>
      <label for="test3">Alpha</label>
    </p>
    <p>
      <input class="with-gap" type="radio" id="test4" name="status" value="izin" <?php if ($pilihanpinjam['status']=="Izin"){
      echo "checked";
      } ?>>
      <label for="test4">Izin</label>
    </p>
    <p>
        <input class="with-gap" type="radio" id="test5" name="status" value="sakit" <?php if ($pilihanpinjam['status']=="Sakit"){
        echo "checked";
        } ?>>
        <label for="test5">Sakit</label>
    </p>
      <button class="btn waves-effect waves-light" type="submit" name="action"><i class="material-icons left">send</i>Submit
      </button><!--end submit-->
      <button type="reset" class="btn waves-effect waves-light" name="">Reset
      </button><!--end reset-->   

      </form>
      </div><!--end col12-->                      
      </div><!--end row-->
  </div><!--end container-->
  </div><!--end test 2-->
  </div><!--end card panel-->

      <!--Import jQuery before materialize.js-->
     <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
     <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
     <script type="text/javascript" src="js/materialize.min.js"></script>
     <script type="text/javascript" src="js/plugins.min.js"></script>
     <script type="text/javascript">
         $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
      </script>
    </body>
  </html>