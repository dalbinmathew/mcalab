<html>
<head><title>REGISTRATION FORM</title></head>
<body bgcolor="lightblue">
<center>
<marquee direction="right" onmouseover="this.stop()" onmouseout="this.start()"><h1 style="color:red">WELCOME TO FRESHERS WORLD!!!</h1></marquee>
<form action="review.php" method="POST">
<table border=1px padding=40px width=600px>

<tr rowspan=2>
<td colspan=2><center><h1>Registration Form</h1></center></td></tr>

<tr>
<td width=250px>Name</td>
<td><input type="text" name="name"></input></td>
</tr>

<tr>
  <td width=250px>Age</td>
  <td>
    <select name="age">
      <option>SELECT</option>
      <?php
        for ($i = 18; $i <= 40; $i++) {
          echo "<option>".$i."</option>";
        }
      ?>
    </select>
  </td>
</tr>

<tr>
<td width=250px>Password</td>
<td><input type="password" name="pswd1"></input></td>
</tr>

<tr>
<td width=250px>Re-enter Password</td>
<td><input type="password" name="pswd2"></input></td>
</tr>

<tr>
<td width=250px>Select your security question</td>
<td>
<input type="radio" name="securityquestion" value="pet">What is your pet name?</input><br>
<input type="radio" name="securityquestion" value="bestfriend">Who is your best friend?</input><br>
<input type="radio" name="securityquestion" value="color">What is your favourite color?</input><br>
<input type="radio" name="securityquestion" value="teacher">Who is your favourite teacher?</input><br>
</td>
</tr>

<tr>
<td width=250px>Answer of security question</td>
<td><input type="text" name="security"></input></td>
</tr>

<tr>
<td width=250px>Email id</td>
<td><input type="text" name="email"></input></td>
</tr>

<tr>
<td width=250px>Languages known</td>
<td>
<input type="checkbox" name="language[]" value="Malayalam">Malayalam</input>
<input type="checkbox" name="language[]" value="English">English</input>
<input type="checkbox" name="language[]" value="Hindi">Hindi</input>
</td>
</tr>

<tr>
<td width=250px>Phone number</td>
<td>
 <table border=1px>
 <tr>
 <th>Home</th>
 <th>Office</th>
 </tr>
 <tr>
 <td><input type="text" name="homenumber"></input></td>
 <td><input type="text" name="officenumber"></input></td>
 </tr>
 </table>
</td>
</tr>

<tr>
<td width=250px>Upload CV</td>
<td><input type="file" id="CV" name="CV"> </td>
</tr>

<tr>
<td width=250px><center><input name="reset" type="reset" value="Clear"></center></input></td>
<td width=250px><center><input name="submit" type="submit" value="Submit"></center></input></td>

</center>
</body>
</html>
