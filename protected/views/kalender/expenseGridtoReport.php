<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      kln_id		</th>
 		<th width="80px">
		      kr_kode		</th>
 		<th width="80px">
		      jr_id		</th>
 		<th width="80px">
		      pr_kode		</th>
 		<th width="80px">
		      kln_krs		</th>
 		<th width="80px">
		      kln_masuk		</th>
 		<th width="80px">
		      kln_uts		</th>
 		<th width="80px">
		      kln_uas		</th>
 		<th width="80px">
		      kln_krs_lama		</th>
 		<th width="80px">
		      kln_uts_lama		</th>
 		<th width="80px">
		      kln_uas_lama		</th>
 		<th width="80px">
		      kln_stat		</th>
 		<th width="80px">
		      kln_sesi		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->kln_id; ?>
		</td>
       		<td>
			<?php echo $row->kr_kode; ?>
		</td>
       		<td>
			<?php echo $row->jr_id; ?>
		</td>
       		<td>
			<?php echo $row->pr_kode; ?>
		</td>
       		<td>
			<?php echo $row->kln_krs; ?>
		</td>
       		<td>
			<?php echo $row->kln_masuk; ?>
		</td>
       		<td>
			<?php echo $row->kln_uts; ?>
		</td>
       		<td>
			<?php echo $row->kln_uas; ?>
		</td>
       		<td>
			<?php echo $row->kln_krs_lama; ?>
		</td>
       		<td>
			<?php echo $row->kln_uts_lama; ?>
		</td>
       		<td>
			<?php echo $row->kln_uas_lama; ?>
		</td>
       		<td>
			<?php echo $row->kln_stat; ?>
		</td>
       		<td>
			<?php echo $row->kln_sesi; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
