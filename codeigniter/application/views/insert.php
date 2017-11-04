<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Kalatietokanta</title>

</head>

<body>

<form method="post" action="<?php echo base_url();?>index.php/users/insert_new_user">

<table width="400" border="0" cellpadding="5">

<tr>

<th width="213" align="right" scope="row">Anna nimesi</th>

<td width="161"><input type="text" name="nimi" size="20" /></td>

</tr>
    

<tr>

<th align="right" scope="row">Syötä kalasi</th>

<td><input type="text" name="kala" size="20" /></td>

</tr>
    
<tr>

<th width="213" align="right" scope="row">Syötä paino</th>

<td width="161"><input type="text" name="paino" size="20" /></td>

</tr>    


<tr>

<th width="213" align="right" scope="row">Syötä päivämäärä</th>

<td width="161"><input type="text" name="pvm" size="20" /></td>

</tr>    


<tr>

<th align="right" scope="row">Syötä ottipaikka</th>

<td><input type="text" name="paikka" size="20" /></td>

</tr>

<tr>

<th align="right" scope="row">Kerro vieheesi</th>

<td><textarea name="viehe" rows="5" cols="20"></textarea></td>

</tr>

<tr>

<th align="right" scope="row">Muuta</th>

<td><textarea name="muuta" rows="5" cols="20"></textarea></td>

</tr>

<tr>

<th align="right" scope="row">&nbsp;</th>

<td><input type="submit" name="submit" value="Lähetä" /></td>

</tr>

</table>

</form>

</body>

</html>
