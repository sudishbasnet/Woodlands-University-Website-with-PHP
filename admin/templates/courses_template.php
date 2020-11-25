<div class="panel panel-info">
    <div class="panel-heading">
		<!-- <span class="dropdown">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="color:white;">Course <span class="caret"></span></button>
			<ul class="dropdown-menu" style="margin: 0;">
				<li><a href="">Course 1</a></li>
				<li><a href="">Course 2</a></li>
			</ul>
		</span> -->
        <a href="newcourse_form"><button type="button" class="btn btn-primary">Add New Course</button></a>
    </div>
</div>
<h3 class="text-center">ALL COURSE RECORDS</h3>

<?php
    $table->setHeading(['S.N', 'Course Name', 'Description', 'Visiblity' ,'Actions']);
    $snum = 1;
    foreach ($allCourses as $allCoursesRow) {
        if($allCoursesRow['course_archive'] == 0){
            $visibleCourse = "Live";
            $archiveThis = '<a href="courses&archiveCoursesId='.$allCoursesRow['course_id'].'"><button class="btn btn-primary">Archive</button></a>';  
        }
        else {
            $visibleCourse = "Archived";
            $archiveThis = '<a href="courses&noArchiveCoursesId='.$allCoursesRow['course_id'].'"><button class="btn btn-danger">Unarchive</button></a>';
        }

        if($allCoursesRow['course_archive'] == 0) $visibleCourse = "Live";
        else $visibleCourse = "Archived";
        $table->setRow([ 
            $snum++, 
            $allCoursesRow['course_name'],
            $allCoursesRow['course_description'], 
            $visibleCourse,
            '<a href="newcourse_form&courseId='.$allCoursesRow['course_id'].'">Edit</a> / 
            <a onclick="javascript:if(confirm(\'Are you sure?\')){document.location=\'courses&deleteCourse_id='.$allCoursesRow['course_id'].'\';}" href="#">Delete</a><br>' . $archiveThis
        ]);
    }
    $table->generateHTML();
?>
