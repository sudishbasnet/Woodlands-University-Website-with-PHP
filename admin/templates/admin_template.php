<!-- Cards-->
<div class="row">
  <!-- Announcement Column-->
  <div class="col-sm-4">
    <div class="panel panel-info">
      <div class="panel-heading">Upcoming Announcements</div>
      <ol class="panel-body" style="margin: 0 1%;">
        <?php foreach ($announcementThree as $annAsRow) { ?>
          <li>
            <span style="color: red;"><?php echo $annAsRow['announcement_date']; ?></span>
            <?php echo $annAsRow['announcement_description']; ?>
          </li>
        <?php } ?>
      </ol>
      <div class="panel-footer">
        <a href="announcements">View More</a>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="panel panel-info">
      <div class="panel-heading">Demonstration Video(Embed Video)</div>
        <div class="panel-body" style="padding: 0;">
          <video width="100%" height="85" controls>
            <source src="../../videos/backgroundvideo.mp4" type="video/mp4">
          </video>
        </div>
        <div class="panel-footer">
          <a href="#">Change Video</a>
        </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-12">
     <div class="panel panel-info">
      <div class="panel-heading">Students Time Table</div>
      <div class="panel-body" style="margin: 0 1%;">
        <?php 
          $table->setHeading(['Day','9-10','10-11', '11-12', '12-1', '1-2', '2-3', '3-4', '4-5']);
          $table->setRow(['MONDAY','C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2']);
          $table->setRow(['TUESDAY','C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2']);
          $table->setRow(['WEDNESDAY','C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2']);
          $table->setRow(['THURSDAY','C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2']);
          $table->setRow(['FRIDAY','C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2', 'C101 Lecture Room C2']);
          $table->generateHTML();
        ?>
      </div>
      <div class="panel-footer">
        <a href="#">View Other Time Tables</a>
      </div>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>

