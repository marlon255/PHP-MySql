<meta charset="UTF-8">
<?php
	$select = "SELECT * FROM tipo_equipamento";
	$sele_equip = mysqli_query($conexao, $select) or die(mysqli_errno());
	$exib_equip = mysqli_fetch_assoc($sele_equip);
?>