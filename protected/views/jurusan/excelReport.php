<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      jr_id		</th>
 		<th width="80px">
		      fk_id		</th>
 		<th width="80px">
		      jr_kode_nim		</th>
 		<th width="80px">
		      jr_nama		</th>
 		<th width="80px">
		      jr_jenjang		</th>
 		<th width="80px">
		      jr_stat		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->jr_id; ?>
		</td>
       		<td>
			<?php echo $row->fk_id; ?>
		</td>
       		<td>
			<?php echo $row->jr_kode_nim; ?>
		</td>
       		<td>
			<?php echo $row->jr_nama; ?>
		</td>
       		<td>
			<?php echo $row->jr_jenjang; ?>
		</td>
       		<td>
			<?php echo $row->jr_stat; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
