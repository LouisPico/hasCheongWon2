<!-- maker -->
<doctype html>
	<html>
	<body>
		<form action="form.php" method="post"> <!-- 옶으면 get가 디폴트임 그래서 $_GET로 받고 그래 form에서도 바꾸면 post로 받고 어쩌구! 그건 정해진 방식인거임 규칙-->
		<p><input type="text" name="title" placeholder="조사와 어미를 뺀 제목"></p>
		<p><textarea name="description"></textarea></p>
		<!--사용자에게 텍스트 받을 수 있는 input text는 관례 아니고 아예 그거 유노 바꾸면 안되는거 규칙!-->
		<p><input type="submit"></p>
	</form>
	</body>
	</html>