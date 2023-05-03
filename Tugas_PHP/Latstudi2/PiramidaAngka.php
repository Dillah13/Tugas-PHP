<form>
		<table border="1" width="15%">
			<tr style ="background-color: blue;">
				<th>No</th>
				<th>Nama</th>
				<th>Kelas</th>
			</tr>
<?php 
    for ($no = 1, $i=1, $a=10; $i<=10, $a>0 ; $i++, $a--) { 
 ?>
			<tr style ="background-color: red;">
				<td> <?php echo $no; ?></td>
				<td><?php echo "Nama ke $i"; ?></td>
				<td><?php echo "Kelas $a"; ?></td>
			</tr>
		<?php $no++; } ?>
		</table>
	</form>
