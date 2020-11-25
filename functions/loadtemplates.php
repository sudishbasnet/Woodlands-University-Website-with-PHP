<?php 
	function loadTemplates($fileName, $tempVariable)
	{
		extract($tempVariable);

		ob_start();
		require $fileName;
		$newContent = ob_get_clean();
		return $newContent;
	}
?>