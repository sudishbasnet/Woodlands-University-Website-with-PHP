<?php require '../model/save_module.php'; ?>

<form action="" method="POST">
	<h1>Add New Module</h1>
	<input type="hidden" name="module_id" value="<?php if(isset($_GET['moduleId'])) echo $fetchModule['module_id']; ?>">
	<div class="form-group">
		<label>Module Code:</label>
		<input class="form-control" type="text" name="module_code" value="<?php if(isset($_GET['moduleId'])) echo $fetchModule['module_code']; ?>" />
	</div>
	<div class="form-group">
		<label>Module Name:</label>
		<input class="form-control" type="text" name="module_name" value="<?php if(isset($_GET['moduleId'])) echo $fetchModule['module_name']; ?>"/>
	</div>
	<div class="form-group">
		<label>Module Description:</label>
		<input class="form-control" type="text" name="module_description" value="<?php if(isset($_GET['moduleId'])) echo $fetchModule['module_description']; ?>"/>
	</div>
	<div class="form-group">
		<label>Module Year:</label>
		<select class="form-control" name="module_year">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
		</select>
		<!-- <input class="form-control" type="text" name="module_year" value="<?php //if(isset($_GET['moduleId'])) echo $fetchModule['module_year']; ?>"/> -->
	</div>
	<div class="form-group">
		<label>Course:</label>
		<select class="form-control" name="course_id">
			<?php foreach ($allCourses as $allCoursesRow) { ?>
				<option value="<?php echo $allCoursesRow['course_id'];?>" <?php if(isset($_GET['moduleId'])){
					if($fetchModule['course_id']==$allCoursesRow['course_id']){
						echo "selected";
					}
				} ?>><?php echo $allCoursesRow['course_name']; ?></option>
			<?php } ?>
		</select>
	</div>
	<input class="btn btn-primary" type="submit" name="submit" value="Submit"/>
</form>