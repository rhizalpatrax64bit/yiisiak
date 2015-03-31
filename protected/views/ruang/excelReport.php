<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      rg_kode		</th>
 		<th width="80px">
		      rg_nama		</th>
 		<th width="80px">
		      kapasitas		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->rg_kode; ?>
		</td>
       		<td>
			<?php echo $row->rg_nama; ?>
		</td>
       		<td>
			<?php echo $row->kapasitas; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
