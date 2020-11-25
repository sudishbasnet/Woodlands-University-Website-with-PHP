<!-- Header Section -->
<header class="header jumbotron">
  <div class="header-item">
    <div>
      <img id="logo" src="../images/logobig.jpg" alt="">
    </div>
    <div>
      <h1 class="text-dark" style="margin-top: -12px;">
        Welcome To <strong title="Woodlands Integrated System Software">WISS</strong>
      </h1>
    </div>
    <div>
      <h3><address><i>Address: University Drive,<br> Northampton, NN1 5PH</i></address></h3>
    </div>
  </div>
</header>
<div class="main-navigation">
    <div class="container">
     <div class="row">
        <nav class="navbar navbar-expand-lg menu">
          <ul class="nav navbar-nav justify-content-center">
            <li class="navbar-item active"><a href="<?php if(isset($_SESSION['student_session_id'])) echo 'student'; else echo 'staff'?>">Home</a></li>
            <li class="navbar-item"><a href="profile">My Profile</a></li>
             <?php if (isset($_SESSION['staff_session_id'])) { ?>
                  <li class="navbar-item"><a href="enrolledStudents">All Student Lists</a></li>
                  <li class="navbar-item"><a href="attendance">Check Attendance</a></li>
              <?php } ?>
            <li class="navbar-item"><a href="../pages/logout.php">Logout</a></li>          
          </ul>
        </nav>
     </div> 
    </div>
  </div>