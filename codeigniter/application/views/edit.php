<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Editointisivu</title>

</head>

<body>

<form method="post" action="<?php echo base_url();?>index.php/users/update">
<?php
extract($user);
?>
<table width="400" border="0" cellpadding="5">

<tr>

<th width="213" align="right" scope="row">Anna nimesi</th>

<td width="161"><input type="text" name="nimi" size="20" value="<?php echo $nimi; ?>" /></td>

</tr>
     
<tr>

<th align="right" scope="row">Syötä kalasi</th>

<td><input type="text" name="kala" size="20" value="<?php echo $kala; ?>" /></td>

</tr>
    
<th align="right" scope="row">Syötä paino</th>

<td><input type="text" name="paino" size="20" value="<?php echo $paino; ?>" /></td>

</tr>    
    
<tr>

<th width="213" align="right" scope="row">Syötä päivämäärä</th>

<td width="161"><input type="text" name="pvm" size="20" value="<?php echo $pvm; ?>" /></td>

</tr>       

<tr>

<th align="right" scope="row">Syötä ottipaikka</th>

<td><input type="text" name="paikka" size="20" value="<?php echo $paikka; ?>" /></td>

</tr>

<tr>

<th align="right" scope="row">Kerro viehe</th>

<td><textarea name="viehe" rows="5" cols="20"><?php echo $viehe; ?></textarea></td>

</tr>

<tr>

<th align="right" scope="row">Muuta</th>

<td><textarea name="muuta" rows="5" cols="20"><?php echo $muuta; ?></textarea></td>

</tr>

<tr>

<th align="right" scope="row">&nbsp;</th>

<td>
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="submit" name="submit" value="Päivitä" /></td>

</tr>

</table>

</form>

</body>

</html>
