<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title></title>
</head>
<body>
	<form action="result2.php" method="post">
		Name Surname 	: <input type="text" name="NameSurname"><br />
		Hobbies			:
		<br /><input type="checkbox" name="Hobbies[]" value="Shopping"> Shopping
		<br /><input type="checkbox" name="Hobbies[]" value="Travelling"> Travelling
		<br /><input type="checkbox" name="Hobbies[]" value="Cinema"> Cinema
		<br /><input type="checkbox" name="Hobbies[]" value="Theater"> Theater
		<br /><input type="checkbox" name="Hobbies[]" value="Foods"> Foods
		<br /><input type="submit" value="Submit!">
	</form>
</body>
</html>