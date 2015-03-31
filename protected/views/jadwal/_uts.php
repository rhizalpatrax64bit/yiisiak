
<div class="form">
<?php


$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
    'id'=>'uts-update-form',
    'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    'method'=>'post',
    'action'=>array("jadwal/update"),
    'type'=>'horizontal',
    'htmlOptions'=>array(
        'onsubmit'=>"return false;",/* Disable normal form submit */
        'onkeypress'=>" if(event.keyCode == 13){ update(); } " /* Do ajax call when user presses enter key */
    ),

)); ?>
<fieldset>
    <div class="control-group">
        <div class="span12">

            <?php echo $form->hiddenField($model,'jdwl_id',array()); ?>
            <?php echo $form->hiddenField($model,'bn_id'); ?>
            <?php echo $form->hiddenField($model,'rg_kode',array('size'=>8,'maxlength'=>8)); ?>
            <?php echo $form->hiddenField($model,'semester',array('size'=>1,'maxlength'=>1)); ?>
            <?php echo $form->hiddenField($model,'jdwl_hari',array('size'=>1,'maxlength'=>1)); ?>
            <?php echo $form->hiddenField($model,'jdwl_masuk',array('size'=>5,'maxlength'=>5)); ?>
            <?php echo $form->hiddenField($model,'jdwl_keluar',array('size'=>5,'maxlength'=>5)); ?>
            <?php echo $form->hiddenField($model,'jdwl_kls',array('size'=>15,'maxlength'=>15)); ?>

            <div class="row">


                <table class="table table-colored-header">
                    <thead>
                    <tr>
                        <th>Tanggal Ujian</th>
                        <th>Jam Masuk</th>
                        <th>Jam Keluar</th>
                        <th>Ruangan</th>

                    </tr>
                    </thead>
                    <tbody>


                    <tr>
                        <td>  <?php
                            $this->widget(
                                'bootstrap.widgets.TbDatePicker',
                                array(
                                    'name' => 'uts_'. $model->jdwl_id ,

                                    'value' =>  date("m-d-Y", strtotime($model->jdwl_uts)),

                                    'htmlOptions' => array('class'=>'col-md-4',
                                                           'width' => '30%',
                                                           'format' => 'yyyy-mm-dd',
                                                           'viewformat' => 'mm/dd/yyyy',
                                    ),
                                )
                            );?>
                        </td>
                        <td>

                            <?php
                            $this->widget(
                                'bootstrap.widgets.TbTimePicker',
                                array(
                                    'name' => 'uts_in'. $model->jdwl_id ,

                                    'options' => array(
                                        'showMeridian' => false,

                                    ),
                                    'htmlOptions' =>  array(
                                        'width' =>'40px',
                                    ),
                                   // 'wrapperHtmlOptions' => array('class' => 'col-md-1','style'=>'width: 40px'),
                                )
                            );

                            ?>
                        </td>
                        <td>
                            <?php
                            $this->widget(
                                'bootstrap.widgets.TbTimePicker',
                                array(
                                    'name' => 'uts_out'. $model->jdwl_id ,

                                    'options' => array(
                                        'showMeridian' => false,

                                    ),
                                    'htmlOptions' =>  array(
                                        'width' =>'40px',
                                    ),
                                   // 'wrapperHtmlOptions' => array('class' => 'col-md-1','style'=>'width: 40px'),
                                )
                            );

                            ?>
                        </td>
                        <td>
                            <?php
                            $models = Ruang::model()->findAll();

                            $list = CHtml::listData(
                                $models,
                                'rg_kode', 'rg_nama'
                            );

                            $this->widget(
                                'bootstrap.widgets.TbSelect2',
                                array(
                                    'name'        => 'Ruangan_uts'.$model->jdwl_id,
                                    'data'        => $list,
                                    'htmlOptions' => array(
                                        'id'      => 'Ruangan_uts'.$model->jdwl_id,

                                    ),
                                    'options'     => array(
                                        'placeholder' => 'Ruangan',
                                        'width'       => '300px',
                                    )
                                )
                            );


                            ?>
                        </td>


                    </tr>

                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="8" align="right"><span style="text-align:right">
                                <?php
                                $this->widget(
                                    'bootstrap.widgets.TbButton',
                                    array(
                                        'label' => 'Simpan',
                                        'htmlOptions' => array(
                                            'onclick' => 'js:$.ajax({
                                                url: "/",
                                                type: "POST",
                                                data: $("#issue-574-checker-form").serialize()
                                                });',
                                            'class' =>'btn btn-primary'
                                        )
                                    )
                                );
                                ?>
                            </span></td>

                    </tr>
                    </tfoot>
                </table>



            </div>



        </div>
    </div>

<?php $this->endWidget(); ?>


    <script type="text/javascript">
        $(document).ready(function() {
            $("#uts_<?=$model->jdwl_id?>").removeClass("hasDatepicker");
            $("#uts_<?=$model->jdwl_id?>").datepicker("destroy");
            $("#uts_<?=$model->jdwl_id?>").datepicker();


            $("#Ruangan_uts<?=$model->jdwl_id?>").select2({
                minimumInputLength: 2,
                tags: [],
                ajax: {
                    url: '<?=Yii::app()->createUrl("api/ruangan")?>',
                    dataType: 'json',
                    type: "POST",
                    quietMillis: 50,
                    data: function (term) {
                        return {
                            term: term
                        };
                    },
                    results: function (data) {
                        return {
                            results: $.map(data, function (item) {
                                return {
                                    text: item.rg_nama,
                                    id: item.rg_kode
                                }
                            })
                        };
                    }
                }
            });



        })


    </script>