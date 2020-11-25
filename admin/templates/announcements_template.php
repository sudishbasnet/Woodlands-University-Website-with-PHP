<div class="panel panel-info">
	<div class="panel-heading">
		<a href="announcement_form"><button type="button" class="btn btn-primary"s>Add New Announcement</button></a>
	</div>
</div>
 <h3 class="text-center">All Announcements</h3>
 <?php 
	$table->setHeading(['S.N.', 'Announcement Date', 'Announcement Description', 'Visibility', 'Action']);
	$sn = 1;
	foreach ($announcementAll as $announcementAllRow) {
		$table->setRow([$sn++, 
			$announcementAllRow['announcement_date'], 
			$announcementAllRow['announcement_description'], 
			$announcementAllRow['announcement_visible'],
			'<a href="announcement_form&annId='.$announcementAllRow['announcement_id'].'">Edit</a>'
		]);
	}
	$table->generateHTML();
?>