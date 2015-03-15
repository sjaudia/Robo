<!DOCTYPE html>

<html>

	<head>
		<?php
			include "includes/includes.html";
		?>
		<link rel="stylesheet" type="text/css" href="css/robot.css">

	</head>

	<body>
		
		<?php
			include "includes/header.html";
		?>

			<div id="body">

				<?php
					if ($_GET['dest'] == "RR"){
						include "includes/robot/romulus.html";
					}elseif ($_GET['dest'] == "Sid"){
						include "includes/robot/sid.html";
					}elseif ($_GET['dest'] == "Goose"){
						include "includes/robot/goose.html";
				    }
				?>
				
			</div>
			
		<?php
			include "includes/footer.html";
		?>	
	</body>

</html>