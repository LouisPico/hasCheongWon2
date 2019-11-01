<h1>청원이 등록되었습니다!</h1>
<h3><a href="mokrok.php">청원목록</a><br></h3>

<?php
file_put_contents('cheongwons/'.$_POST['title'],$_POST['description']);
//echo "<p>title : ".$_POST['title']. "</p>";
//echo "<p>description : ".$_POST['description']. "</p>";
?>

