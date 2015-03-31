<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      kr_kode		</th>
 		<th width="80px">
		      kr_nama		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->kr_kode; ?>
		</td>
       		<td>
			<?php echo $row->kr_nama; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
