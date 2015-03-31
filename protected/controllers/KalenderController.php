<?php

class KalenderController extends CController
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
            $model=new Kalender;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model,"kalender-create-form");
            if(Yii::app()->request->isAjaxRequest)
	       {
		    if(isset($_POST['Kalender']))
		    {
			    $model->attributes=$_POST['Kalender'];
			    if($model->save())
			    {
			      echo $model->kln_id;
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
	           if(isset($_POST['Kalender']))
		    {
			    $model->attributes=$_POST['Kalender'];
			    if($model->save())
			     $this->redirect(array('view','id'=>$model->kln_id));
			
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
      
	    $id=isset($_REQUEST["id"])?$_REQUEST["id"]:$_REQUEST["Kalender"]["kln_id"];
	    $model=$this->loadModel($id);
			    
	    // Uncomment the following line if AJAX validation is needed
	      $this->performAjaxValidation($model,"kalender-update-form");
	    
	  if(Yii::app()->request->isAjaxRequest)
	    {
	    
		if(isset($_POST['Kalender']))
		{
		  
			$model->attributes=$_POST['Kalender'];
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
	    

	    if(isset($_POST['Kalender']))
	    {
		    $model->attributes=$_POST['Kalender'];
		    if($model->save())
			    $this->redirect(array('view','id'=>$model->kln_id));
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

                $model=new Kalender('search');
                $model->unsetAttributes();  // clear any default values

                if(isset($_GET['Kalender']))
		{
                        $model->attributes=$_GET['Kalender'];
			
			
                   	
                       if (!empty($model->kln_id)) $criteria->addCondition('kln_id = "'.$model->kln_id.'"');
                     
                    	
                       if (!empty($model->kr_kode)) $criteria->addCondition('kr_kode = "'.$model->kr_kode.'"');
                     
                    	
                       if (!empty($model->jr_id)) $criteria->addCondition('jr_id = "'.$model->jr_id.'"');
                     
                    	
                       if (!empty($model->pr_kode)) $criteria->addCondition('pr_kode = "'.$model->pr_kode.'"');
                     
                    	
                       if (!empty($model->kln_krs)) $criteria->addCondition('kln_krs = "'.$model->kln_krs.'"');
                     
                    	
                       if (!empty($model->kln_masuk)) $criteria->addCondition('kln_masuk = "'.$model->kln_masuk.'"');
                     
                    	
                       if (!empty($model->kln_uts)) $criteria->addCondition('kln_uts = "'.$model->kln_uts.'"');
                     
                    	
                       if (!empty($model->kln_uas)) $criteria->addCondition('kln_uas = "'.$model->kln_uas.'"');
                     
                    	
                       if (!empty($model->kln_krs_lama)) $criteria->addCondition('kln_krs_lama = "'.$model->kln_krs_lama.'"');
                     
                    	
                       if (!empty($model->kln_uts_lama)) $criteria->addCondition('kln_uts_lama = "'.$model->kln_uts_lama.'"');
                     
                    	
                       if (!empty($model->kln_uas_lama)) $criteria->addCondition('kln_uas_lama = "'.$model->kln_uas_lama.'"');
                     
                    	
                       if (!empty($model->kln_stat)) $criteria->addCondition('kln_stat = "'.$model->kln_stat.'"');
                     
                    	
                       if (!empty($model->kln_sesi)) $criteria->addCondition('kln_sesi = "'.$model->kln_sesi.'"');
                     
                    			
		}
                 $session['Kalender_records']=Kalender::model()->findAll($criteria); 
       

                $this->render('index',array(
			'model'=>$model,
		));

	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Kalender('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Kalender']))
			$model->attributes=$_GET['Kalender'];

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
		$model=Kalender::model()->findByPk($id);
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
            
             if(isset($session['Kalender_records']))
               {
                $model=$session['Kalender_records'];
               }
               else
                 $model = Kalender::model()->findAll();

		
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

             if(isset($session['Kalender_records']))
               {
                $model=$session['Kalender_records'];
               }
               else
                 $model = Kalender::model()->findAll();



		$html = $this->renderPartial('expenseGridtoReport', array(
			'model'=>$model
		), true);
		
		//die($html);
		
		$pdf = new TCPDF();
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor(Yii::app()->name);
		$pdf->SetTitle('Kalender Report');
		$pdf->SetSubject('Kalender Report');
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
		$pdf->Output("Kalender_002.pdf", "I");
	}
}
