<form action="" method="POST">
	<div class="form-group">
		<label>Edit Unconditional Letter</label>
		<textarea name="letter_text" class="form-control" rows="25">
			<?php 
				$letter_file = fopen("../student_records/unconditional_letter.txt", "r");
				echo fread($letter_file, filesize("../student_records/unconditional_letter.txt"));
				fclose($letter_file);
			?>
		</textarea>
	</div>
	<input class="btn btn-primary" type="submit" name="submit" value="Save"/>
</form>