<!-- Module Activities -->
<?php require '../model/save_activities.php'; ?>
<div class="text-center">
  <h2>ACTIVITES</h2>
</div>
<hr/>

<div class="home-panel">
  <?php if (isset($_SESSION['staff_session_id'])) { ?>
    <div class="content-button" style="margin: 15px;">
      <button type="button" class="btn btn-primary fa fa-plus-square" data-toggle="modal" data-target="#addFile"> 
        Add File
      </button>
    </div>
  <?php } ?>
  <div class="jumbotron" >
    <ul class="list-unstyled">
    <?php 
      $module =$modules_tb->select('module_id',$_GET['activities']);
      $moduleFetched =$module->fetch();
      $listActivities =$activities_tb->select('module_id',$_GET['activities']);
      
      $dir = '../activities/module '.$moduleFetched['module_id'].'/';
      if(is_dir($dir)){
        if($dh = opendir($dir)){
          foreach ($listActivities as $key) {
            $file =$key['activity_file'];
            echo '<li class="well">
            <ul class="list-unstyled">';
            echo '<h4><li>'.$key['activity_name'].'</li></h4>';
            echo  '<li><a href="'.$dir.$file.'.docx" download>'.$file.'</a></li><br>';
            echo '<li>'.$key['activity_description'].'</li>';
            echo '<form action=" " method ="POST">';
              if (isset($_SESSION['staff_session_id'])) {
              echo '<input type="hidden" name="delFile" value="'.$file.'">';
              echo '<input type="hidden" name="location" value="'.$dir.'">';
              echo '<input type="hidden" name="file" value="'.$file.'">';
              echo '<input type="submit" name="delete" value="Delete">';
              echo '</form>';
              }
            echo '</ul>';
          }
          closedir($dh);
        }else{
          echo '<h3>Folder Empty</h3>';
        }
      }
      else{
        mkdir($dir);
      }
    ?>
    </ul>
  </div>
</div>

<!-- Add Activity By Staff-->
<div class="modal fade" id="addFile" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style="font-size: 35px;t">&times;</button>
        <h4 class="modal-title">Add File</h4>
      </div>
      <div class="modal-body">
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label>Upload File</label>
            <input class="form-control" type="file" name="file" />
          </div>
          <div class="form-group">
            <label>File Name</label>
            <input class="form-control" type="text" name="fileName">
          </div>
          <div class="form-group">
            <label>Activity Name</label>
            <input class="form-control" type="text" name="activity_name">
          </div>
          <div class="form-group">
            <label>Activity Description</label>
            <input class="form-control" type="text" name="activity_description">
          </div>
          <input class="btn btn-primary" type="submit" name="saveFile" value="Save File">
        </form>
      </div>

    </div>
  </div>
</div>



