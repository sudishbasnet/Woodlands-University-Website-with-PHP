<h3>View The Letter Templates</h3>
<div class="panel panel-info">
	<div class="panel-heading nav nav-tabs">
		<a data-toggle="tab" href="#conditional"><button type="button" class="btn btn-primary">View Conditional Letter</button></a>
		<a data-toggle="tab" href="#unconditional"><button type="button" class="btn btn-primary">View Unconditional Letter</button></a>
	</div>
</div>
<h3 class="well text-danger">Please Send the Letter to the corresponding students only</h3>
<div class="tab-content">
	<div id="conditional" class="panel panel-info tab-pane fade">
		<div class="panel-heading"><h3>Conditional Letter Template</h3></div>
		<?php 
			$studentAdmission = $admission_tb->select('admission_id', $_GET['admissionId']);
			$fetchStd = $studentAdmission->fetch();
		 ?>
		<div id="conditional_letter" class="panel-body" contenteditable="true">
			<p>Date: <?php echo Date("Y/m/d") ?></p>

			<p><strong>Dear <?php echo $selectFetch['first_name'] . ' ' . $selectFetch['surname'] ?></strong></p>

			<p>September intake for BSc Computing 2019</p>
			<p>
			I am glad to inform you that you have been selected for the mentioned undergraduate degree program offered by Woodland University College. Regardless your selection, you’ve not met some criteria that fall under the guidelines of WUC to be a permanent student of the university. You are expected to visit college for better understanding of the requirements to be fulfilled. Till then you are placed in waiting list. You are in no obligation to reply to the offer letter until and unless you have decided to join the University or have been offered a place from the Universities that you have put in an application for. On the off chance that you do choose to acknowledge our idea through UCAS, this will imply your understanding that upon enrollment you will agree to the standards and guidelines of WUC. </p>

			<p>If you need any arrangement regarding your disability, if you have any, during your time at WUC contact WUC’s Disability Co-Ordinator. </p>
			<p>
			I hope that you will probably acknowledge this offer. After receiving this email, you are expected to visit college within two weeks with your documents to be submitted along with fulfilled criteria.  In the meantime, if you have any queries concerning offer letter you are required to kindly update me in the provided email address.</p>
			<p>
			Yours sincerely</p>
			<p>Dr Simon White</p>
			<p>Course Leader </p>
			<p>Unconditional Letter</p>

		</div>
		<div class="panel-footer">
			
				<input class="btn btn-primary" type="button" onclick="saveEditedCode()" value="Save Edited Template">
			<button style="float: right;" class="btn btn-primary" onclick="printLetter('conditional_letter');">Print</button>
			<script type="text/javascript">
				function printLetter(letterName){
					var letter = document.getElementById(letterName).innerHTML;
					var main = document.body.innerHTML;
					document.body.innerHTML = letter;
					window.print();
					document.body.innerHTML = main;
				}
			</script>
		</div>
	</div> 

	<div id="unconditional" class="panel panel-info tab-pane fade">
		<div class="panel-heading"><h3>Unconditional Letter Template(Click to the panel to edit)</h3></div>
		<div id="unconditional_letter" class="panel-body" contenteditable="true">
			Date: <?php echo Date("Y/m/d") ?><br>

			<p><strong>Dear <?php echo $selectFetch['first_name'] . ' ' . $selectFetch['surname'] ?></strong></p>

			<p>September intake for BSc Computing 2019</p>
			<p>
			I am very glad to inform that your admission for the mentioned undergraduate degree program offered by Woodland University College has been approved. UCAS has been notified about your placement in university. You are in no obligation to reply to the offer letter until and unless you have decided to join the University or have been offered a place from the Universities that you have put in an application for. On the off chance that you do choose to acknowledge our idea through UCAS, this will imply your understanding that upon enrollment you will agree to the standards and guidelines of WUC. </p>
			<p>
			If you need any arrangement regarding your disability, if you have any, during your time at WUC contact WUC’s Disability Co-Ordinator. </p>
			<p>
			I hope that you will probably acknowledge this offer. After receiving this email, you are expected to visit college within two weeks with your documents to be submitted.  In the meantime, if you have any queries concerning offer letter you are required to kindly update me in the provided email address.</p>
			<p>Yours sincerely</p>
			<p>Dr Simon White               
			Course Leader </p>
			<p><strong>
			[NOTE: This is to notify you that this letter is an unconditional offer letter. Congratulations on being approved by the University.]</strong></p>
		</div>
		<div class="panel-footer">
			<script type="text/javascript">
				function saveEditedCode(){
					var saveEdit = document.getElementById('unconditional_letter');
					//save content to local storage
					localStorage.userEdits = saveEdit.innerHTML;
					alert('saved');
				}
			</script>
			<input class="btn btn-primary" type="button" onclick="saveEditedCode()" value="Save Edited Template">
			<button style="float: right;" class="btn btn-primary"  onclick="printLetter('unconditional_letter');">Print</button>

		</div>
	</div> 
</div>