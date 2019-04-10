<h3>Edit DATA CUTI</h3>
<?php echo form_open('cuti/edit'); ?>
<?php echo form_hidden('id', $cuti[0]->Id);?>
<table class="table table-bordered">
	<tr>
		<td>Nama</td>
		<td><?php echo form_input('nama',$cuti[0]->Nama,
			"placeholder='Nama' class='form-control'"); ?></td>
	</tr>
	<tr>
		<td>Nim</td>
		<td><?php echo form_input('nim',$cuti[0]->Nim,
			"placeholder='nim' class='form-control'"); ?></td>
	</tr>
	<tr>

		<td>Fakultas</td>
		<td><?php echo form_input('fakultas',$cuti[0]->Fakultas,
			"placeholder='Fakultas'class='form-control'"); ?></td>
	</tr>
	<tr>

		<td>Progdi/Jenjang</td>
		<td><?php echo form_input('progdi',$cuti[0]->Progdi,
			"placeholder='Progdi/Jenjang' class='form-control'"); ?></td>
	</tr>
	<tr>
		
		<td colspan="2">
		<?php echo form_submit('submit','simpan',"class='btn btn-danger btn-sm'")?>
		<?php echo anchor('cuti','Kembali',array('class'=>'btn btn-danger btn-sm'));?>
		</td>
	</tr>
</table>
</form>