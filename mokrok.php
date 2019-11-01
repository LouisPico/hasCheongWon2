<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8">
		<title></title>
	</head>
	<body>
		<h1>하나고청원목록</h1>
		
		<ol>
			<?php
			$list = scandir('./cheongwons');
			

			$i=0;
			while($i<count($list)){ 
				if($list[$i] !='.' && $list[$i] !='..'){
					echo "<li><a href= \"read.php?id=$list[$i]\">$list[$i]</a></li>\n";
				}
		$i+=1;  
			}
			?>
		</ol>

		
		<!--echo file_get_contents("data/".$_GET['id']); -->
	</body>
</html>
