<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title></title>
</head>
<body>
	<form action="result.php" method="get">
		Name Surname 	:	<input type="text" name="NameSurname"><br />
		E-Mail Adress 	:	<input type="email" name = "EmailAdress"><br />
		Phone Number 	:	<input type="text" name="PhoneNumber"><br />
		Gender			:	<input type="radio" name="Gender" value="Male"> Male <input type="radio" name="Gender" value="Female">Female	<br /> 
		Age				:	<select name="Age">
			<option value =""></option>
			<option value ="25">25</option>
			<option value ="30">30</option>
			<option value ="31">31</option>
			<option value ="32">32</option>
			<option value ="33">33</option>
			<option value ="34">34</option>
			<option value ="35">35</option>
			<option value ="36">36</option>
			<option value ="37">37</option>
			<option value ="38">38</option>
		</select><br />
		<input type="submit" value="Send the Form">

	</form>
</body>
</html>