<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      jdwl_id		</th>
 		<th width="80px">
		      bn_id		</th>
 		<th width="80px">
		      rg_kode		</th>
 		<th width="80px">
		      semester		</th>
 		<th width="80px">
		      jdwl_hari		</th>
 		<th width="80px">
		      jdwl_masuk		</th>
 		<th width="80px">
		      jdwl_keluar		</th>
 		<th width="80px">
		      jdwl_kls		</th>
 		<th width="80px">
		      jdwl_uts		</th>
 		<th width="80px">
		      jdwl_uas		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->jdwl_id; ?>
		</td>
       		<td>
			<?php echo $row->bn_id; ?>
		</td>
       		<td>
			<?php echo $row->rg_kode; ?>
		</td>
       		<td>
			<?php echo $row->semester; ?>
		</td>
       		<td>
			<?php echo $row->jdwl_hari; ?>
		</td>
       		<td>
			<?php echo $row->jdwl_masuk; ?>
		</td>
       		<td>
			<?php echo $row->jdwl_keluar; ?>
		</td>
       		<td>
			<?php echo $row->jdwl_kls; ?>
		</td>
       		<td>
			<?php echo $row->jdwl_uts; ?>
		</td>
       		<td>
			<?php echo $row->jdwl_uas; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
