<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      mtk_kode		</th>
 		<th width="80px">
		      mtk_nama		</th>
 		<th width="80px">
		      mtk_sks		</th>
 		<th width="80px">
		      mtk_kat		</th>
 		<th width="80px">
		      mtk_stat		</th>
 		<th width="80px">
		      jr_id		</th>
 		<th width="80px">
		      penanggungjawab		</th>
 		<th width="80px">
		      mtk_sesi		</th>
 		<th width="80px">
		      mtk_sub		</th>
 		<th width="80px">
		      mtk_semester		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->mtk_kode; ?>
		</td>
       		<td>
			<?php echo $row->mtk_nama; ?>
		</td>
       		<td>
			<?php echo $row->mtk_sks; ?>
		</td>
       		<td>
			<?php echo $row->mtk_kat; ?>
		</td>
       		<td>
			<?php echo $row->mtk_stat; ?>
		</td>
       		<td>
			<?php echo $row->jr_id; ?>
		</td>
       		<td>
			<?php echo $row->penanggungjawab; ?>
		</td>
       		<td>
			<?php echo $row->mtk_sesi; ?>
		</td>
       		<td>
			<?php echo $row->mtk_sub; ?>
		</td>
       		<td>
			<?php echo $row->mtk_semester; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
