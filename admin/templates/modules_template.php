<div class="panel panel-info">
    <div class="panel-heading">
        <a href="newmodule_form"><button type="button" class="btn btn-primary">Add New Record</button></a>
        <span class="dropdown">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="color:white;">Module Courses<span class="caret"></span></button>
            <ul class="dropdown-menu" style="margin: 0;">
                <?php foreach ($showCourse as $showCourseRow) {?>
                <li><a href="modules&course_id=<?php echo $showCourseRow['course_id']; ?>"><?php echo $showCourseRow['course_name'];?></a></li>
                <?php } ?>
                <li><a href="modules">View All</a></li>
            </ul>
        </span>
    </div>
</div>

<h3 class="text-center">ALL MODULES RECORDS</h3>
<?php
    $table->setHeading(['S.N','Module Code', 'Title','Year' ,'Description','Visibility','Course','Actions']);
    $snum = 1;
    foreach ($allModule as $allModuleRow) {
        if($allModuleRow['module_archive'] == 0){
            $visibleModule = "Live";
            $archiveThis = '<a href="modules&archiveModuleId='.$allModuleRow['module_id'].'"><button class="btn btn-primary">Archive</button></a>';  
        }
        else {
            $visibleModule = "Archived";
            $archiveThis = '<a href="modules&noArchiveModuleId='.$allModuleRow['module_id'].'"><button class="btn btn-danger">Unarchive</button></a>';
        }

        if(isset($_GET['course_id'])){
            if($_GET['course_id'] == $allModuleRow['course_id']){
                $table->setRow([ 
                    $snum++ ,
                    $allModuleRow['module_code'], 
                    $allModuleRow['module_name'], 
                    $allModuleRow['module_year'], 
                    $allModuleRow['module_description'],
                    $visibleModule,
                    $allModuleRow['course_name'],
                    '<a href="">Edit</a>/
                    <a onclick="javascript:if(confirm(\'Are you sure?\')){document.location=\'modules&deleteModule_id='.$allModuleRow['module_id'].'\';}" href="#">Delete</a><br>' . $archiveThis
                ]);
            }
        }else{
            $table->setRow([ 
                $snum++,
                $allModuleRow['module_code'],
                $allModuleRow['module_name'],
                $allModuleRow['module_year'],
                $allModuleRow['module_description'],
                $visibleModule,
                $allModuleRow['course_name'],
                '<a href="newmodule_form&moduleId='.$allModuleRow['module_id'].'">Edit</a>/
                <a onclick="javascript:if(confirm(\'Are you sure?\')){document.location=\'modules&deleteModule_id='.$allModuleRow['module_id'].'\';}" href="#">Delete</a><br>' . $archiveThis
            ]);
        }
    }
    $table->generateHTML();
?>
