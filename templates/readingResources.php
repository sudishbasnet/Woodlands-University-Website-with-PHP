<?php require '../model/save_readingResourses.php'; ?>
<div class="text-center">
  <h2>READING RESOURSES</h2>  
</div><hr/>

<?php if (isset($_SESSION['staff_session_id'])) { ?>
  <div class="content-button" style="margin: 15px;">
    <button type="button" class="btn btn-primary fa fa-plus-square" data-toggle="modal" data-target="#addLink"> 
      Add Link
    </button>
  </div>
<?php } ?>
<div class="jumbotron" >
	<ul class="list-unstyled">
		<?php foreach ($resources as $key) {
      echo '<h4>'.$key['resource_name'].'</h4>';
			echo '<a href="https://'.$key['resource_link'].'" target="_blank"><li>'.$key['resource_link'].'</a></li>';
      if (isset($_SESSION['staff_session_id'])) {
        echo '<form action="" method="POST">';
        echo '<input type="hidden" name="delName" value="'.$key['resource_name'].'">';
        echo '<input type="submit" name="delete" value="Delete Link">';
        echo '</form>';
      }
		}
		?>
	</ul>
</div>

<div class="modal fade" id="addLink" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="font-size: 35px;t">&times;</button>
          <h4 class="modal-title">Add File</h4>
        </div>
        <div class="modal-body">
          <form action="" method="POST" enctype="multipart/form-data">
          	<div class="form-group">
                <label>Resource Name</label>
                <input class="form-control" type="text" name="resource_name">
              	<label>Resource Link</label>
              	<input class="form-control" type="text" name="link">
            </div>
          	<input class="btn btn-primary" type="submit" name="saveLink" value="Save Link">
          </form>
        </div>
      </div>
      
    </div>
  </div>