<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Kalareissuja</title>


<script type="text/javascript">

function show_confirm(act,gotoid)

{

if(act=="edit")

var r=confirm("Haluatko varmasti muokata?");

else

var r=confirm("Haluatko varmasti poistaa?");

if (r==true)

{

window.location="<?php echo base_url();?>index.php/users/"+act+"/"+gotoid;

}

}

</script>

</head>

<body>

<h2> Kalareissuja </h2>

<table width="1100" border="1" cellpadding="5">

<tr>

<th scope="col">Nimi</th>

<th scope="col">Kala</th>

<th scope="col">Paino</th>

<th scope="col">Päivämäärä</th>

<th scope="col">Ottipaikka</th>

<th scope="col">Viehe</th>

<th scope="col">Muuta</th>


<th scope="col" colspan="2">Toiminto</th>

</tr>

<?php foreach ($user_list as $u_key){ ?>

<tr>

<td><?php echo $u_key->nimi; ?></td>

<td><?php echo $u_key->kala; ?></td>

<td><?php echo $u_key->paino; ?></td>

<td><?php echo $u_key->pvm; ?></td>

<td><?php echo $u_key->paikka; ?></td>

<td><?php echo $u_key->viehe; ?></td>

<td><?php echo $u_key->muuta; ?></td>

<td width="40" align="left" ><a href="#" onClick="show_confirm('edit',<?php echo $u_key->id;?>)">Editoi</a></td>

<td width="40" align="left" ><a href="#" onClick="show_confirm('delete',<?php echo $u_key->id;?>)">Poista </a></td>

</tr>

<?php }?>

<tr>

<td colspan="7" align="right"> <a href="<?php echo base_url();?>index.php/users/add_form">Lisää uusi merkintä</a></td>

</tr>

</table>

</body>

</html>