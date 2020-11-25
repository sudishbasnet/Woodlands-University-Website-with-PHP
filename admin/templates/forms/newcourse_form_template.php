<?php require '../model/save_course.php'; ?>
<a href="courses"><i class="fas fa-arrow-alt-circle-left"></i></a>
<form action="" method="POST">
	<h1>Add New Course</h1>
	<input type="hidden" name="course_id" value="<?php if(isset($_GET['courseId'])) echo $fetchCourse['course_id']; ?>"/>
	<div class="form-group">
		<label>Course Name:</label>
		<input class="form-control" type="text" name="course_name" value="<?php if(isset($_GET['courseId'])) echo $fetchCourse['course_name']; ?>" />
	</div>
	<div class="form-group">
		<label>Course Description:</label>
		<input class="form-control" type="text" name="course_description" value="<?php if(isset($_GET['courseId'])) echo $fetchCourse['course_description']; ?>" />
	</div>
	<input class="btn btn-primary" type="submit" name="save" value="Submit"/>
</form>