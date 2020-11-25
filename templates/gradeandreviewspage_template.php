<div class="text-center">
  <h3>Students Grades</h3>
</div>
<div class="home-panel">
<div class="jumbotron">
  <?php
    if (isset($_POST['graded'])) {
     $cri=[
        'student_id' => $_POST['student'],
        'grade_name'=>$_POST['grade']

     ];
     $update =$grades_tb->updateData($cri,'student_id');
     header('location:module&module='.$_GET['module'].'&grade='.$_GET['module'].'');
    }
    $dir = '../assignment_submission/module '.$_GET['module'].'/';
    $table->setHeading([
    'S.N',
    'Student Id',
    'Assignment file',
    'Grade',
    'Grade Date'
  ]);
  $sn = 1;
  foreach ($gradeAssignment as $userRow) {
    if (isset($_SESSION['staff_session_id'])) {
    if(is_dir($dir)){
        if($dh = opendir($dir)){
          $file =$userRow['submission_filename'];
          $submission_file = '<a href="'.$dir.$file.$userRow['student_id'].'.docx" download>'.$file.'</a>';
          
        }
    }

         $gradeVal = '<form action="" method="POST">
         <input type="hidden" value="'.$userRow['student_id'].'" name="student">
         <select name="grade">';
         if ($userRow['grade_name']==!null){
            $grade = '<option value="'.$userRow['grade_name'].'" selected>'.$userRow['grade_name'].'</option>
              <option value=""></option>  
              <option value="A+">A+</option>
              <option value="A">A</option>
              <option value="B+">B+</option>
              <option value="B">B</option>
              <option value="C+">C+</option>
              <option value="C">C</option>
              <option value="D+">D+</option>
              <option value="D">D</option>
              <option value="F">F</option>';
         }
         else{$grade=
              '<option value=""></option>  
              <option value="A+">A+</option>
              <option value="A">A</option>
              <option value="B+">B+</option>
              <option value="B">B</option>
              <option value="C+">C+</option>
              <option value="C">C</option>
              <option value="D+">D+</option>
              <option value="D">D</option>
              <option value="F">F</option>';
       }
         $endSelect = '</select>';


    if ($_GET['module']==$userRow['module_id']) {
      if (isset($_SESSSION['session_student_id'])) {
       if ($_SESSSION['session_student_id']==$userRow['student_id']) {
        $table->setRow([
        $sn++,
        $userRow['student_id'], 
        $submission_file, 
        $userRow['grade_name'],
        $userRow['grade_date']
      ]);
    }
    }
    else{
        $table->setRow([
        $sn++,
        $userRow['student_id'],
        $submission_file, 
        $gradeVal . $grade. $endSelect,
        $userRow['grade_date']
      ]);
    }
  }
}
  else{

    if ($fetchStd['student_id']==$userRow['student_id']) {
      if(is_dir($dir)){
        if($dh = opendir($dir)){
          $file =$userRow["submission_filename"];
          $submission_file = '<a href="'.$dir.$file.$userRow['student_id'].'.docx" download>'.$file.'</a>';
          
        }
    }

   
    if ($_GET['module']==$userRow['module_id']) {
      if (isset($_SESSSION['session_student_id'])) {
       if ($_SESSSION['session_student_id']==$userRow['student_id']) {
        $table->setRow([
        $sn++,
        $userRow['student_id'], 
        $submission_file, 
        $userRow['grade_name'],
        $userRow['grade_date']
      ]);
    }
    }
    else{
        $table->setRow([
        $sn++,
        $userRow['student_id'],
        $submission_file, 
        $userRow['grade_name'],
        $userRow['grade_date']
      ]);
    }
  }



    }

  }
}
  $table->generateHTML();
?>
<?php
if (isset($_SESSION['staff_session_id'])) {
echo '<input type="submit" name="graded" value="Update Grade">';
}
?>
</form>
</div>
</div>