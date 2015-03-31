<?php

class MatkulController extends CController
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
				'actions'=>array('create','update','GeneratePdf','GenerateExcel'),
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
            $model=new Matkul;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model,"matkul-create-form");
            if(Yii::app()->request->isAjaxRequest)
	       {
		    if(isset($_POST['Matkul']))
		    {
			    $model->attributes=$_POST['Matkul'];
			    if($model->save())
			    {
			      echo $model->mtk_kode;
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
	           if(isset($_POST['Matkul']))
		    {
			    $model->attributes=$_POST['Matkul'];
			    if($model->save())
			     $this->redirect(array('view','id'=>$model->mtk_kode));
			
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
      
	    $id=isset($_REQUEST["id"])?$_REQUEST["id"]:$_REQUEST["Matkul"]["mtk_kode"];
	    $model=$this->loadModel($id);
			    
	    // Uncomment the following line if AJAX validation is needed
	      $this->performAjaxValidation($model,"matkul-update-form");
	    
	  if(Yii::app()->request->isAjaxRequest)
	    {
	    
		if(isset($_POST['Matkul']))
		{
		  
			$model->attributes=$_POST['Matkul'];
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
	    

	    if(isset($_POST['Matkul']))
	    {
		    $model->attributes=$_POST['Matkul'];
		    if($model->save())
			    $this->redirect(array('view','id'=>$model->mtk_kode));
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

                $model=new Matkul('search');
                $model->unsetAttributes();  // clear any default values

                if(isset($_GET['Matkul']))
		{
                        $model->attributes=$_GET['Matkul'];
			
			
                   	
                       if (!empty($model->mtk_kode)) $criteria->addCondition('mtk_kode = "'.$model->mtk_kode.'"');
                     
                    	
                       if (!empty($model->mtk_nama)) $criteria->addCondition('mtk_nama = "'.$model->mtk_nama.'"');
                     
                    	
                       if (!empty($model->mtk_sks)) $criteria->addCondition('mtk_sks = "'.$model->mtk_sks.'"');
                     
                    	
                       if (!empty($model->mtk_kat)) $criteria->addCondition('mtk_kat = "'.$model->mtk_kat.'"');
                     
                    	
                       if (!empty($model->mtk_stat)) $criteria->addCondition('mtk_stat = "'.$model->mtk_stat.'"');
                     
                    	
                       if (!empty($model->jr_id)) $criteria->addCondition('jr_id = "'.$model->jr_id.'"');
                     
                    	
                       if (!empty($model->penanggungjawab)) $criteria->addCondition('penanggungjawab = "'.$model->penanggungjawab.'"');
                     
                    	
                       if (!empty($model->mtk_sesi)) $criteria->addCondition('mtk_sesi = "'.$model->mtk_sesi.'"');
                     
                    	
                       if (!empty($model->mtk_sub)) $criteria->addCondition('mtk_sub = "'.$model->mtk_sub.'"');
                     
                    	
                       if (!empty($model->mtk_semester)) $criteria->addCondition('mtk_semester = "'.$model->mtk_semester.'"');
                     
                    			
		}
                 $session['Matkul_records']=Matkul::model()->findAll($criteria); 
       

                $this->render('index',array(
			'model'=>$model,
		));

	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Matkul('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Matkul']))
			$model->attributes=$_GET['Matkul'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Matkul::model()->findByPk($id);
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
            
             if(isset($session['Matkul_records']))
               {
                $model=$session['Matkul_records'];
               }
               else
                 $model = Matkul::model()->findAll();

		
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

             if(isset($session['Matkul_records']))
               {
                $model=$session['Matkul_records'];
               }
               else
                 $model = Matkul::model()->findAll();



		$html = $this->renderPartial('expenseGridtoReport', array(
			'model'=>$model
		), true);
		
		//die($html);
		
		$pdf = new TCPDF();
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor(Yii::app()->name);
		$pdf->SetTitle('Matkul Report');
		$pdf->SetSubject('Matkul Report');
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
		$pdf->Output("Matkul_002.pdf", "I");
	}
}
