<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      ds_nidn		</th>
 		<th width="80px">
		      ds_user		</th>
 		<th width="80px">
		      ds_pass		</th>
 		<th width="80px">
		      ds_pass_kode		</th>
 		<th width="80px">
		      ds_nm		</th>
 		<th width="80px">
		      ds_tipe		</th>
 		<th width="80px">
		      ds_kat		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->ds_nidn; ?>
		</td>
       		<td>
			<?php echo $row->ds_user; ?>
		</td>
       		<td>
			<?php echo $row->ds_pass; ?>
		</td>
       		<td>
			<?php echo $row->ds_pass_kode; ?>
		</td>
       		<td>
			<?php echo $row->ds_nm; ?>
		</td>
       		<td>
			<?php echo $row->ds_tipe; ?>
		</td>
       		<td>
			<?php echo $row->ds_kat; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
