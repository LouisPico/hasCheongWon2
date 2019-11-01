<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8">
		<title></title>
	</head>
	<body>
		<h1>하나고청원</h1>
		
		<ol>
			<?php
			$list = scandir('./data');
			$i=0;
			while($i<count($list)){ //01234 니까
				if($list[$i] !='.' && $list[$i] !='..'){ 

			echo "<li><a href= \"testch.php?id=$list[$i]\">$list[$i]</a></li>\n";
			
		}
		$i+=1;  //얘는 저기 안에 있으면 처음에 저기 못들어가고 영원히 .에 대해서만 논하게 되는거임
			}
			?>
		</ol>
		<h2>
			<?php
			echo $_GET['id'];
			?>
		
		</h2>
		<?php
		echo file_get_contents("data/".$_GET['id']);  //ㅋㅋ id 형식 바뀌여서 오히려 .php를 .으로 붙힐 그게 사라짐 ㅋ 참고로 id는 위에 url에서 받게 되는데 그걸 $list[$i]로 하니까 이미 .php가 붙어있음


		?>
	</body>
</html>
