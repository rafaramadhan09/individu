<!DOCTYPE html>
<html>
<head>
    <title>Personal Data Form</title>
</head>
<body>

<h2>Personal Data Form</h2>

<form action="submit.php" method="post">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="gender">Gender:</label><br>
  (Male<input type="radio" name="gender" value="Male">)
  (Female<input type="radio" name="gender" value="Female">)<br>
  <label for="address">Address:</label><br>
  <input type="text" id="address" name="address"><br>
  <label for="place_of_birth">Place of Birth:</label><br>
  <input type="text" id="place_of_birth" name="place_of_birth"><br>
  <label for="date_of_birth">Date of Birth:</label><br>
  <input type="date" id="date_of_birth" name="date_of_birth"><br>
  <label for="education">Education:</label><br>
  <input type="text" id="education" name="education"><br>
  <input type="submit" value="Submit">
</form>

</body>
</html>