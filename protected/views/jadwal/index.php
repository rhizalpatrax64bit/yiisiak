<?php
$fk_id;
$jr_id;
$pr_kode;
$day;
$smt;
Yii::app()->clientScript->registerScript(
    'search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('jadwal-grid', {
        data: $(this).serialize()
    });
    return false;
});
"
);


?>

<h1>Jadwal Kuliah</h1>
<hr/>


<script type="text/javascript">
    $(document).ready(function () {

        $("#Fakultas").on("change", function (e) {
            $("#Jurusan").select2("enable", true);
            $("#Tahun").select2("enable", false);
            $("#Jurusan").select2('data', null);
            $("#Program").select2('data', null);
            $("#Tahun").select2('data', null);

        }); // eof Fakultas on change

        $("#Jurusan").select2({
            minimumInputLength: 0,
            ajax: {
                url: '<?=Yii::app()->createUrl("api/jurusan")?>',
                type: 'POST',
                dataType: 'json',
                data: function (term) {
                    return {
                        Fakultas: $("#Fakultas").val(),
                    };
                },
                results: function (data) {
                    return {results: data};
                }
            }
        }).select2("enable", false);


        $("#Jurusan").on("change", function (e) {
            $("#Program").select2("enable", true);
            $("#Program").select2('data', null);
            $("#Tahun").select2('data', null);
        }); // eof Jurusan on change
        $("#Program").select2({
            minimumInputLength: 0,
            ajax: {
                url: '<?=Yii::app()->createUrl("api/program")?>',
                type: 'POST',
                dataType: 'json',
                data: function (term) {
                    return {
                        action: 'Program',
                        Jurusan_id: $('#Jurusan').val(),
                        query: term
                    };
                },
                results: function (data) {
                    return {results: data};
                }
            }
        }).select2("enable", false);
        ;


        $("#Program").on("change", function (e) {
            $("#Tahun").select2("enable", true);
            $("#Tahun").select2('data', null);
        });
        $("#Tahun").select2({
            minimumInputLength: 0,
            ajax: {
                url: '<?=Yii::app()->createUrl("api/kurikulum")?>',
                type: 'POST',
                dataType: 'json',
                data: function (term) {
                    return {
                        action: 'Kurikulum',

                    };
                },
                results: function (data) {
                    return {results: data};
                }
            }
        }).select2("enable", false);
        ;

    });
</script>


<table class="table table-hover table-nomargin table-colored-header">
    <tbody>
    <tr>
        <td class="cc">Fakultas</td>
        <td colspan="2" class="cb">
            <?php

            $models = Fakultas::model()->findAll();

            $list = CHtml::listData(
                $models,
                'fk_id', 'fk_nama'
            );

            $this->widget(
                'bootstrap.widgets.TbSelect2',
                array(
                    'name'        => 'Jadwal[Fakultas]',
                    'data'        => $list,
                    'htmlOptions' => array(
                        'id'      => 'Fakultas',
                        'onclick' => 'js:$.ajax({
	url: "api/jurusan",
	type: "POST",
	data: $("#Fakultas").serialize(),
	success: function (response) {

        $("#Jurusan").select2("enable",true);
  
                    }
	});'
                    ),
                    'options'     => array(
                        'placeholder' => 'Fakultas',
                        'width'       => '300px',
                    )
                )
            );

            ?>


        </td>
    </tr>
    <tr>
        <td class="cc">Jurusan</td>
        <td colspan="2" class="cb">
            <input name="Jurusan" id="Jurusan" type="text" placeholder="Jurusan"
                   class="input-block-level" autocomplete="off"
                   style="width:300px;">&nbsp;&nbsp;
        </td>
    </tr>
    <tr>
        <td class="cc">Program</td>
        <td colspan="2" class="cb">
            <input name="Program" id="Program" type="text" placeholder="Program"
                   class="input-block-level" autocomplete="off"
                   style="width:300px;">&nbsp;&nbsp;
        </td>
    </tr>
    <tr>
        <td class="cc">Tahun Akademik</td>
        <td colspan="2" class="cb">
            <input name="Tahun" id="Tahun" type="text" placeholder="Tahun"
                   class="input-block-level" autocomplete="off"
                   style="width:300px;">
        </td>
    </tr>

    <tr>
        <td class="cc">Pilihan</td>
        <td colspan="2" class="cb">

            <?php

            $this->beginWidget(
                'zii.widgets.CPortlet', array(
                'htmlOptions' => array(
                    'class' => ''
                )
            )
            );
            $this->widget(
                'bootstrap.widgets.TbButton',
                array(
                    'label'       => 'Tampilkan',
                    'htmlOptions' => array(
                        'style'   => 'margin-right: 8px;',

                        'onclick' => 'populateSchedule()'

                    )

                )
            );


            $this->widget(
                'bootstrap.widgets.TbButton',
                array(
                    'label'       => 'Tambah Jadwal',
                    'htmlOptions' => array(
                        'onclick' => 'renderCreateForm()'

                    )

                )
            );


            $this->endWidget();




            ?>


        </td>
    </tr>
    </tbody>
</table>



<?php

/*$Days = array('0' => 'Senin','1' => 'Selasa','2' => 'Rabu','3' => 'Kamis','4' => 'Jumat','5' => 'Sabtu','6' => 'Minggu');

foreach ($Days as $key => $value) {
    echo "<h3>$value</h3>";
   $this->renderPartial("grid_view",array( 'day'=>$key,'model'=> $model));
}
 */

$this->renderPartial("_ajax_update");
$this->renderPartial("_ajax_create_form", array("model" => $model));
$this->renderPartial("_ajax_view");

?>


<div id="Jadwals" class="Jadwals"></div>


<script type="text/javascript">

    function populateSchedule() {

        $(".Jadwals").html('<pre>Harap Tunggu...</pre>');

        jQuery.post("<?php echo Yii::app()->createAbsoluteUrl("jadwal/populate"); ?>",
            {
                Fakultas: $('#Fakultas').val(), Jurusan: $('#Jurusan').val(),
                Program: $('#Program').val(), Tahun: $('#Tahun').val()
            })
            .done(function (data) {
                $(".Jadwals").html(data);
            });


    }


    function delete_record(id) {

        if (!confirm("Are you sure you want delete this?"))
            return;

        //  $('#ajaxtest-view-modal').modal('hide');

        var data = "id=" + id;


        jQuery.ajax({
            type: 'POST',
            url: '<?php echo Yii::app()->createAbsoluteUrl("jadwal/delete"); ?>',
            data: data,
            success: function (data) {
                if (data == "true") {
                    $('#jadwal-view-modal').modal('hide');
                    $.fn.yiiGridView.update('jadwal-grid', {});

                }
                else
                    alert("deletion failed");
            },
            error: function (data) { // if error occured
                alert(JSON.stringify(data));
                alert("Error occured.please try again");
                //  alert(data);
            },

            dataType: 'html'
        });

    }

</script>

<style type="text/css" media="print">
    body {
        visibility: hidden;
    }

    .printableArea {
        visibility: visible;
    }
</style>
<script type="text/javascript">
    function printDiv() {

        window.print();

    }
</script>
 

