<HTML>
<BODY>
	<FORM ACTION="" METHOD="POST" ENCTYPE="MULTIPART/FORM-DATA">
		<INPUT TYPE="FILE" NAME="AB"><BR>
		<INPUT TYPE="SUBMIT"><BR>
	</FORM>
</BODY>
</HTML>
<?PHP 
IF(ISSET($_FILES['AB']))
{
	ECHO "<PRE>";
	PRINT_R($_FILES);
	ECHO "</PRE>";
	$FILE_name=$_FILES['AB']['name'];
	$FILE_size=$_FILES['AB']['size'];
	$FILE_tmp=$_FILES['AB']['tmp_name'];
	$FILE_type=$_FILES['AB']['type'];

	move_uploaded_file($FILE_tmp,"shubham".$FILE_name);
}
?>