<?php

echo '<table class="table table-colored-header">
	<thead>
		<tr>
			<th>Kode MK</th>
			<th>Waktu</th>
			<th>Ruang</th>
			<th>Matakuliah</th>
			<th>Kelas</th>
			<th>SKS</th>
			<th>Dosen</th>
			<th>Jml Mahasiswa </th>
			<th> </th>
		</tr>
	</thead>
	<tbody>';



foreach ($Jadwals as $key => $value) {

    echo '<tr>
	 	 	  <td>' . $value['Kode MK'] . '</td>
	 	 	  <td>' . $value['Waktu'] . '</td>
	 	 	  <td>' . $value['Ruangan'] . '</td>
	 	 	  <td>' . $value['Matakuliah'] . '</td>
	 	 	  <td>' . $value['Kelas'] . '</td>
	 	 	  <td>' . $value['SKS'] . '</td>
	 	 	  <td>' . $value['Dosen'] . '</td>

	 	 	  <td style="width:50px;">
		     	' . $value['Total'] . '
		     </td>
             <td align="center">

             <a href="javascript:;" id="lnk'.$value['jdwl_id'].'"  onClick="toggle_visibility(&#39;tbl'
        . $value['jdwl_id'] . '&#39;,&#39;lnk' . $value['jdwl_id'] . '&#39;,'
        . $value['jdwl_id'] . ');"><i class="icon-edit"></i>Ujian</a>
             </td>
     </tr>';

    echo '<tr><td colspan="9" style="padding: 0px; font-size: medium;">
          <table style="display: none;" width="103%" border="0" cellpadding="5" cellspacing="0" id="tbl'
        . $value['jdwl_id'] . '">
          <tr><td width="100%">';



    $this->widget(
        'bootstrap.widgets.TbTabs',
        array(
            'type' => 'tabs',
            'tabs' => array(
                array(
                    'label'   => 'Jadwal UTS',
                    'content' => '<div id="UTS_' . $value['jdwl_id']
                        . '"></div>',
                    'active'  => true
                ),
                array('label'   => 'Jadwal UAS',
                      'content' => '<div id="UAS_' . $value['jdwl_id']
                          . '"></div>'
                ),

            ),
        )
    );

    echo '</td></tr></table></td></tr>';
}

echo '	</tbody>
				<tfoot>
					<tr>
						<td colspan="8" align="right"><span style="text-align:right"><b>Total Mahasiswa</b></span></td>
						<td colspan="2"><b>0</b></td>
					</tr>
				</tfoot>
				</table>';

?>

<script type="text/javascript">
    function toggle_visibility(tbid, lnkid, id) {
        var obj = document.getElementsByTagName("table");
        for (i = 0; i < obj.length; i++) {
            if (obj[i].id && obj[i].id != tbid) {
                document.getElementById(obj[i].id).style.display = "none";
                x = obj[i].id.substring(3);
                document.getElementById("lnk" + x).value = "[+]";
            }
        }
        if (document.all) {
            document.getElementById(tbid).style.display = document.getElementById(tbid).style.display == "block" ? "none" : "block";
        }
        else {
            document.getElementById(tbid).style.display = document.getElementById(tbid).style.display == "table" ? "none" : "table";
        }
        document.getElementById(lnkid).value = document.getElementById(lnkid).value == "[-]" ? "[+]" : "[-]";

        var ctn = '<input type="text"/>';
        this.renderUpdateUjianForm(id);

      //  $("#UAS_" + id).html(ctn);
    }
</script>



<div id="dosen-update-modal-container" >

</div>

<script>
    $('#myButton').on('click', function () {
        var $btn = $(this).button('loading')
        // business logic...
        $btn.button('reset')
    })
</script>

<script type="text/javascript">

    function updateUjian()
    {

        var data=$("#dosen-update-form").serialize();

        jQuery.ajax({
            type: 'POST',
            url: '<?php echo Yii::app()->createAbsoluteUrl("jadwal/update"); ?>',
            data:data,
            success:function(data){
                if(data!="false")
                {
                    $('#dosen-update-modal').modal('hide');
                    renderView(data);
                    $.fn.yiiGridView.update('dosen-grid', {

                    });
                }

            },
            error: function(data) { // if error occured
                alert(JSON.stringify(data));

            },

            dataType:'html'
        });

    }

    function renderUpdateUjianForm(id)
    {

        $('#dosen-view-modal').modal('hide');
        var data="id="+id;
        jQuery.ajax({
            type: 'POST',
            url: '<?php echo Yii::app()->createAbsoluteUrl("jadwal/uts"); ?>',
            data:data,
            success:function(data){

                $("#UTS_" + id).html(data);
                //$('#UTS_' + id).html(data);

            },
            error: function(data) { // if error occured
                alert(JSON.stringify(data));
                alert("Error occured.please try again");
            },

            dataType:'html'
        });


        jQuery.ajax({
            type: 'POST',
            url: '<?php echo Yii::app()->createAbsoluteUrl("jadwal/uas"); ?>',
            data:data,
            success:function(data){

                $("#UAS_" + id).html(data);
                //$('#UTS_' + id).html(data);

            },
            error: function(data) { // if error occured
                alert(JSON.stringify(data));
                alert("Error occured.please try again");
            },

            dataType:'html'
        });


    }


</script>

