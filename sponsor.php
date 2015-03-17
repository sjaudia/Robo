<!DOCTYPE html>

<html>

	<head>
		<?php
			include "includes/includes.html";
		?>
		<link rel="stylesheet" type="text/css" href="css/sponsors.css">

	</head>

	<body>
		
		<?php
			include "includes/header.html";
		?>

			<div class="container-fluid">

				<?php
					if ($_GET['dest'] == "curr"){
						include "includes/sponsor/sponsors.html";
					}elseif ($_GET['dest'] == "become"){
						include "includes/sponsor/become.html";
					}
				?>
				
			</div>
			
		<?php
			include "includes/footer.html";
		?>	
	</body>

</html>