<?php 
	if(isset($_POST['submit'])){
		if(is_uploaded_file($_FILES['ucasFile']['tmp_name'])){
			$openCSV = fopen($_FILES['ucasFile']['tmp_name'], "r");
			fgetcsv($openCSV);
			while(($eachrow = fgetcsv($openCSV)) !== FALSE){
				$datas = [
					'admission_id' => $eachrow[0],
					'first_name' => $eachrow[1],
					'middle_name' => $eachrow[2],
					'surname' => $eachrow[3],
					'email' => $eachrow[4],
					'address' => $eachrow[5],
					'phone_number' => $eachrow[6],
					'course_assign' => $eachrow[7],
					'date_of_birth' => $eachrow[8],
					'gender' => $eachrow[9],
					'father_name' => $eachrow[10],
					'mother_name' => $eachrow[11],
					'parent_contact' => $eachrow[12],
					'father_email' => $eachrow[13],
					'year_assign' => $eachrow[14],
					'reason_for_dormant' =>  $eachrow[15],
					'record_status' =>  $eachrow[16],
					'letter_status' => $eachrow[17]
				];
				$admission_data = $admission_tb->saveData($datas, 'admission_id');
				if($admission_data==true){
					echo '<script>alert("File Uploaded");document.location="admission"</script>';
				}else{
					echo '<script>alert("File Upload Failed");document.location="admission"</script>';
				}
			}
			fclose($openCSV);
		}
	}
?> 