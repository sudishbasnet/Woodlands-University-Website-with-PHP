<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $wissTitle; ?></title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="description" content="WISS">  
  
  <!-- Bootstrap links -->
  <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css"/>
  <script type="text/javascript" src="../../bootstrap/js/jquery.min.js"></script>
  <script type="text/javascript" src="../../bootstrap/js/bootstrap.min.js"></script>

  <!-- CSS link -->
  <link rel="stylesheet" type="text/css" href="../../css/adminstyles.css"/>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <?php require 'navigation.php'; ?>
  <div class="col-sm-2" >
    <ul id="side" class="nav navbar-inverse nav-stacked">
      <img src="../../images/logo.bmp" alt="">
      <li><a class="sidemenu" href="home"><i class=""></i>Dashboard</a></li>
      <li><a class="sidemenu" href="admission"><i class="fa fa-users"></i>Admission</a></li>
      <li><a class="sidemenu" href="students"><i class="fa fa-users"></i>Student Records</a></li>
      <li><a class="sidemenu" href="staff"><i class="fa fa-users"></i>Staff Records</a></li>
      <li><a class="sidemenu" href="courses"><i class="fa fa-folder-open"></i>Course Records</a></li>
      <li><a class="sidemenu" href="modules"><i class="fa fa-folder-open"></i>Module Records</a></li>
      <li><a class="sidemenu" href="announcements"><i class="fa fa-folder-open"></i>Announcements</a></li>  
      <li><a class="sidemenu" href="attendance"><i class="fa fa-folder-open"></i>Attendance</a></li>  
    </ul>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-10">
        <div id="main-content">
          <div class="container-fluid">
            <?php echo $wissContent;?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
