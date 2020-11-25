<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Woodlands Integrated Software System -->
	<title><?php echo $wissTitle; ?></title>
	<meta charset="utf-8"/>
	<meta name="content" description="width=device-width, initial-scale=1.0"/>

	<!-- Bootstrap links -->
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css"/>
	<script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>

	<!-- CSS link -->
	<link rel="stylesheet" type="text/css" href="../css/userstyle.css"/>

	<!-- Font Awesome -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> -->
</head>
<body>
	<?php if(isset($_SESSION['student_session_id']) || isset($_SESSION['staff_session_id'])){ ?>
	<?php require '../templates/header.php'; ?>
	<?php } ?>
	<main class="container col-sm-12" 
	<?php if(!(isset($_SESSION['student_session_id']) || isset($_SESSION['staff_session_id']))){echo 'style="background: #000B14;"';} ?>>
		<?php echo $wissContent; ?>
	</main>
	<?php if(isset($_SESSION['student_session_id']) || isset($_SESSION['staff_session_id'])){ ?>
	<?php require '../templates/footer.php'; ?>
	<?php } ?>
</body>
</html>