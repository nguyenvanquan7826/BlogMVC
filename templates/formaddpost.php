<!DOCTYPE html>
<html>
<head>
	<title>Add Post</title>
</head>
<body>

<h2>Add Post</h2>

<form action="?action=doAdd" method="POST">
	Title of post <br>
	<input type="text" name="title" size="70"/> <br>
	Content of post <br>
	<textarea name="content" cols="54" rows="10"></textarea> <br>

	Url Thumbnail <br>
	<input type="text" name="url_thumbnail" size="70"> <br>

	Tag <br>
	<input type="text" name="tag" size="70"> <br>
	<input type="submit" name="ok" value="Add">

</form>


</body>
</html>