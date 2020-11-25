<div class="module">
	<div class="container module-content">
		<?php echo $moduleContent; ?>
	</div>
	<div id="sidebar">
		<ul class="list-unstyled">
			<h2><?php echo $moduleTitle; ?></h2><hr>
			<a href="module&module=<?php echo $_GET['module']; ?>&aboutModule=<?php echo $_GET['module']; ?>">
				<h4>About Module</h4>
			</a>
			<hr/>

			<h4>Contents</h4>
			<li>
				<a href="module&module=<?php echo $fetchModules['module_id']; ?>&activities=<?php echo $fetchModules['module_id']; ?>"> Activities</a>
			</li>
			<li>
				<a href="module&module=<?php echo $_GET['module']; ?>&reading=<?php echo $_GET['module']; ?>"> Reading Resources</a>
			</li>

			<hr/>
			<h4>Assignment</h4><hr/>
			<li>
				<a href="module&module=<?php echo $_GET['module']; ?>&info=<?php echo $_GET['module']; ?>"> Info</a>
			</li>
			<li>
				<a href="module&module=<?php echo $_GET['module']; ?>&submission=<?php echo $_GET['module']; ?>"> Work Submission</a>
			</li>
			<li>
				<a href="module&module=<?php echo $_GET['module']; ?>&grade=<?php echo $_GET['module']; ?>"> Grades and Reviews</a>
			</li>
			<hr/>
	    </ul>
	</div>
</div>

