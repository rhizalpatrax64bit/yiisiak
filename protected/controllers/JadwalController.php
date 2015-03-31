<?php

class JadwalController extends CController
{
        public $breadcrumbs;
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='main';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','GeneratePdf','GenerateExcel','Populate','Uts','Uas'),
				'users'=>array('*'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('*'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView()
	{
		$id=$_REQUEST["id"];
	     
	       if(Yii::app()->request->isAjaxRequest)
	       {
	         $this->renderPartial('ajax_view',array(
			'model'=>$this->loadModel($id),
		));
	         
	       }
	       else
	       {
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	       }
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{	
            $model=new Jadwal;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model,"jadwal-create-form");
            if(Yii::app()->request->isAjaxRequest)
	       {
		    if(isset($_POST['Jadwal']))
		    {
			    $model->attributes=$_POST['Jadwal'];
			    if($model->save())
			    {
			      echo $model->jdwl_id;
			    }
			    else
			    {
			      echo "false";
			    } 
			    return;
		    }
	       }
	       else
	       {
	           if(isset($_POST['Jadwal']))
		    {
			    $model->attributes=$_POST['Jadwal'];
			    if($model->save())
			     $this->redirect(array('view','id'=>$model->jdwl_id));
			
		    }
               
		    $this->render('create',array(
			    'model'=>$model,
		    ));
	       }	
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
    public function actionUpdate()
    {

        $id=isset($_REQUEST["id"])?$_REQUEST["id"]:$_REQUEST["Jadwal"]["jdwl_id"];
        $model=$this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model,"jadwal-update-form");

        if(Yii::app()->request->isAjaxRequest)
        {

            if(isset($_POST['Jadwal']))
            {

                $model->attributes=$_POST['Jadwal'];
                if($model->save())
                {
                    echo $model->id;
                }
                else
                {
                    echo "false";
                }
                return;
            }

            $this->renderPartial('_ajax_update_form',array(
                'model'=>$model,
            ));
            return;

        }


        if(isset($_POST['Jadwal']))
        {
            $model->attributes=$_POST['Jadwal'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->jdwl_id));
        }

        $this->render('update',array(
            'model'=>$model,
        ));
    }

    public function actionUts()
    {

        $id=isset($_REQUEST["id"])?$_REQUEST["id"]:$_REQUEST["Jadwal"]["jdwl_id"];
        $model=$this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model,"uts-update-form");

        if(Yii::app()->request->isAjaxRequest)
        {

            if(isset($_POST['Jadwal']))
            {

                $model->attributes=$_POST['Jadwal'];
                if($model->save())
                {
                    echo $model->id;
                }
                else
                {
                    echo "false";
                }
                return;
            }

            $this->renderPartial('_uts',array(
                'model'=>$model,), false, true );
            return;

        }


        if(isset($_POST['Jadwal']))
        {
            $model->attributes=$_POST['Jadwal'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->jdwl_id));
        }

        $this->render('update',array(
            'model'=>$model,
        ));
    }


    public function actionUas()
    {

        $id=isset($_REQUEST["id"])?$_REQUEST["id"]:$_REQUEST["Jadwal"]["jdwl_id"];
        $model=$this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model,"uas-update-form");

        if(Yii::app()->request->isAjaxRequest)
        {

            if(isset($_POST['Jadwal']))
            {

                $model->attributes=$_POST['Jadwal'];
                if($model->save())
                {
                    echo $model->id;
                }
                else
                {
                    echo "false";
                }
                return;
            }

            $this->renderPartial('_uas',array(
                'model'=>$model,), false, true );
            return;

        }


        if(isset($_POST['Jadwal']))
        {
            $model->attributes=$_POST['Jadwal'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->jdwl_id));
        }

        $this->render('update',array(
            'model'=>$model,
        ));
    }

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete()
	{
	        $id=$_POST["id"];
	   
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset(Yii::app()->request->isAjaxRequest))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
			else
			   echo "true";
		}
		else
		{
		    if(!isset($_GET['ajax']))
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
		    else
			   echo "false"; 	
	        }	
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
            $session=new CHttpSession;
            $session->open();		
            $criteria = new CDbCriteria();            

                $model=new Jadwal('search');
                $model->unsetAttributes();  // clear any default values

                if(isset($_GET['Jadwal']))
		{
                        $model->attributes=$_GET['Jadwal'];
			
			
                   	
                       if (!empty($model->jdwl_id)) $criteria->addCondition("jdwl_id = '".$model->jdwl_id."'");
                     
                    	
                       if (!empty($model->bn_id)) $criteria->addCondition("bn_id = '".$model->bn_id."'");
                     
                    	
                       if (!empty($model->rg_kode)) $criteria->addCondition("rg_kode = '".$model->rg_kode."'");
                     
                    	
                       if (!empty($model->semester)) $criteria->addCondition("semester = '".$model->semester."'");
                     
                    	
                       if (!empty($model->jdwl_hari)) $criteria->addCondition("jdwl_hari = '".$model->jdwl_hari."'");
                     
                    	
                       if (!empty($model->jdwl_masuk)) $criteria->addCondition("jdwl_masuk = '".$model->jdwl_masuk."'");
                     
                    	
                       if (!empty($model->jdwl_keluar)) $criteria->addCondition("jdwl_keluar = '".$model->jdwl_keluar."'");
                     
                    	
                       if (!empty($model->jdwl_kls)) $criteria->addCondition("jdwl_kls = '".$model->jdwl_kls."'");
                     
                    	
                       if (!empty($model->jdwl_uts)) $criteria->addCondition("jdwl_uts = '".$model->jdwl_uts."'");
                     
                    	
                       if (!empty($model->jdwl_uas)) $criteria->addCondition("jdwl_uas = '".$model->jdwl_uas."'");
                     
                    			
		}
                 $session['Jadwal_records']=Jadwal::model()->findAll($criteria);

        Yii::app()->clientScript->registerCoreScript('jquery');
        Yii::app()->clientScript->registerCoreScript('jquery.ui');

        $this->render('index',array(
			'model'=>$model,
		));

	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Jadwal('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Jadwal']))
			$model->attributes=$_GET['Jadwal'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}


    public  function actionPopulate(){
        if(Yii::app()->request->isPostRequest)
        {



            $fk_id = $_POST['Fakultas'];
            $jr_id = $_POST['Jurusan'];
            $pr_kode = $_POST['Program'];
            $kr_kode = $_POST['Tahun'];
            $html ='';

            $Days = Array('Senin','Selasa','Rabu','Kamis',"Jumat",'Sabtu','Minggu');

            for ($i = 0; $i <= 6; $i++) {
                $Jadwals = Jadwal::model()->getJadwal($fk_id,$jr_id,$pr_kode,$i,$kr_kode);

                    $style = (count($Jadwals)<>0 ? "background-color: rgb(128, 236, 137);" : "background-color: rgb(236, 138, 138);");

                    $html .='<pre style="'. $style .'" >'. $Days[$i] .'</pre>';
                    $html .= $this->renderPartial(
                        'grid_view', array(
                        'Jadwals' => $Jadwals
                    ), true
                    );
                    $html .='<hr style="background-color: rgb(32, 149, 180); height: 3px;">';

            }




            echo $html;
        }

    }

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Jadwal::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model,$form_id)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']===$form_id)
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        public function actionGenerateExcel()
	{
            $session=new CHttpSession;
            $session->open();		
            
             if(isset($session['Jadwal_records']))
               {
                $model=$session['Jadwal_records'];
               }
               else
                 $model = Jadwal::model()->findAll();

		
		Yii::app()->request->sendFile(date('YmdHis').'.xls',
			$this->renderPartial('excelReport', array(
				'model'=>$model
			), true)
		);
	}
        public function actionGeneratePdf() 
	{
           $session=new CHttpSession;
           $session->open();
		Yii::import('application.extensions.ajaxgii.bootstrap.*');
		require_once('tcpdf/tcpdf.php');
		require_once('tcpdf/config/lang/eng.php');

             if(isset($session['Jadwal_records']))
               {
                $model=$session['Jadwal_records'];
               }
               else
                 $model = Jadwal::model()->findAll();



		$html = $this->renderPartial('expenseGridtoReport', array(
			'model'=>$model
		), true);
		
		//die($html);
		
		$pdf = new TCPDF();
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor(Yii::app()->name);
		$pdf->SetTitle('Jadwal Report');
		$pdf->SetSubject('Jadwal Report');
		//$pdf->SetKeywords('example, text, report');
		$pdf->SetHeaderData('', 0, "Report", '');
		$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, "Example Report by ".Yii::app()->name, "");
		$pdf->setHeaderFont(Array('helvetica', '', 8));
		$pdf->setFooterFont(Array('helvetica', '', 6));
		$pdf->SetMargins(15, 18, 15);
		$pdf->SetHeaderMargin(5);
		$pdf->SetFooterMargin(10);
		$pdf->SetAutoPageBreak(TRUE, 0);
		$pdf->SetFont('dejavusans', '', 7);
		$pdf->AddPage();
		$pdf->writeHTML($html, true, false, true, false, '');
		$pdf->LastPage();
		$pdf->Output("Jadwal_002.pdf", "I");
	}
}
