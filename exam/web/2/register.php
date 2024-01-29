<html>
    <head><title>ADD BOOKS</title></head>
    <body>
        <form action='bookadded.php' method='post'>
            <center>
            <table width=600px border=1px>
                <tr rowspan=2>
                    <td colspan=2><center><h1>ADD BOOK</h1></center></td>
</tr>
<tr>
    <td>BOOK ID</td>
    <td><input type='text' name='bookid'></td>
</tr>
<tr>
    <td>BOOK NAME</td>
    <td><input type='text' name='bookname'></td>
</tr>
<tr>
    <td>AUTHOR</td>
    <td><input type='text' name='author'></td>
</tr>
<tr>
    <td>PAGES</td>
    <td><input type='text' name='pages'></td>
</tr>
<tr><td colspan=2><center><input type='submit' value='ADD BOOK'></center></td></tr>
</table>
<br>
<a href='search.php'>Search Books</a>
</center>
</form>
</body>
</html>