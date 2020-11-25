<!-- Assignment Info -->
<?php require '../model/save_assignmentInfo.php'; ?>
<div class="text-center">
	<h2>ASSIGNMENT INFO</h2>
</div>

<?php
if (isset($_SESSION['staff_session_id'])) {
echo '<button type="button" class="btn btn-primary fa fa-plus-square" data-toggle="modal" data-target="#addFile"> Add File</button>';
}
?>
<div class="jumbotron" >
	<ul class="list-unstyled">
	
	<?php 
	

	 $dir = '../assignment_info/module '.$_GET['module'].'/';
	if(is_dir($dir)){
		if($dh = opendir($dir)){
			foreach ($assign as $key) {
			// while (($file = readdir($dh)) == true) {
				$file =$key['assignment_file'];
				echo '<li class="well">
					<h3>'.$key['assignment_name'].'<h3><br>
					<a href="'.$dir.$file.'.docx" download>'.$file.'</a></li><br>';
			
				 if (isset($_SESSION['staff_session_id'])) {
					echo '<form action=" " method ="POST">';
					echo '<input type="hidden" name="delFile" value="'.$key['assignment_name'].'">';
					echo '<input type="hidden" name="location" value="'.$dir.'">';
					echo '<input type="hidden" name="file" value="'.$file.'">';
					echo '<input type="submit" name="delete" value="Delete">';
					echo '</form>';


				}
			}
			closedir($dh);
		}
	}

	
	
?>

	


	</ul>
</div>


<div class="modal fade" id="addFile" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
        	<i class="close" data-dismiss="modal" style="font-size: 35px;">&times;</i>
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
	          	<label>Assignment Name</label>
	          	<input class="form-control" type="text" name="assignment_name">
	        </div>
	     
          	<input class="btn btn-primary" type="submit" name="saveFile" value="Save File">
          </form>
        </div>
      </div>
      
    </div>
  </div>