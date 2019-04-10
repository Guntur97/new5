<h3>DATA CUTI</h3>
<?php echo anchor('cuti/add','ENTRY',
	array('class'=>'btn btn-danger btn-sm')); ?>
<table class="table table-bordered">
	<tr>
		<td>No</td>
		<td>Nama</td>
		<td>Nim</td>
		<td>Fakultas</td>
		<td>Progdi</td>
		<td colspan="2">ACTION</td>
	</tr>
<?php
$no=1;
foreach ($cutis as $cuti){
	echo "<tr>
	<td width='10'>$no</td>
	<td>$cuti->Nama</td>
	<td>$cuti->Nim</td>
	<td>$cuti->Fakultas</td>
	<td>$cuti->Progdi</td>
	<td width='20'>";
	echo anchor('cuti/edit/'.$cuti->Id,'Edit',
		array('class'=>'btn btn-danger btn-sm'));
	echo "</td>
	<td width='20'>";
	echo anchor('cuti/delete/'.$cuti->Id,'Delete',
		array('class'=>'btn btn-danger btn-sm'));
	echo "</td>
	</tr>";
	$no++;
}
?>
</table>
	