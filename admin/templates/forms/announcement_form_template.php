<?php require '../model/save_announcement.php'; ?>
<form action="" method="POST">
	<h3>Add New Announcement</h3>
	<input type="hidden" name="announcement_id" value="<?php if(isset($_GET['annId'])) echo $fetchAnnounce['announcement_id']; ?>">
	<div class="form-group">
		<label>Announcement Description</label>
		<input class="form-control" type="text" name="announcement_description" value="<?php if(isset($_GET['annId'])) echo $fetchAnnounce['announcement_description']; ?>" />
	</div>
	<div class="form-group">
		<label>Announcement Dates</label>
		<input class="form-control" type="date" name="announcement_date" value="<?php if(isset($_GET['annId'])) echo $fetchAnnounce['announcement_date']; ?>" />
	</div>
	<div class="form-group">
		<label>Announcement Visibility(Default Visible)</label>
		<select class="form-control" name="announcement_visible">
			<option value="visible">Visible</option>
			<option value="not visible">Not Visible</option>
		</select>
	</div>
	<input class="btn btn-primary" type="submit" name="save" value="Submit" />
</form>