<?php
  if (isset($_POST['saveFile'])){
    $is_error = "";
    if($_POST['fileName'] == ""){
      $is_error .= '<script>alert("Please Enter the name")</script>';
    }
    if($_POST['activity_name'] == ""){
      $is_error .= '<script>alert("Please Enter the name")</script>';
    }
    if($_POST['activity_description'] == ""){
      $is_error .= '<script>alert("Please Enter the name")</script>';
    }
    if(empty($is_error)){
      $cri =[
        'activity_file' =>$_POST['fileName'],
        'activity_name' =>$_POST['activity_name'],
        'activity_description' =>$_POST['activity_description'],
        'module_id' => $_GET['module']

      ];
      $insert =$activities_tb->saveData($cri);
      if ($_FILES['file']['error'] == 0) {
        $fileName = $_POST['fileName']. '.docx';
        move_uploaded_file($_FILES['file']['tmp_name'], '../activities/module '.$_GET['module'].'/' . $fileName);
      }
      header ('location:module&module='.$_GET['module'].'&activities='.$_GET['module'].'');
      
    }else{
      echo $is_error;
    }
  }

  if (isset($_POST['delete'])) {
    $dir = $_POST['location'];
    $file =$_POST['file'];
    unlink($dir.$file.'.docx');
      $delete =$activities_tb->deleteData('activity_file',$_POST['delFile']);
      header ('Location:module&module='.$_GET['module'].'&activities='.$_GET['module']);
  }
?>