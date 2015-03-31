<?php

class ApiController extends CController
{
 
	public function actionJurusan(){

	   if(Yii::app()->request->isAjaxRequest)
	       {

		    if(isset($_POST['Fakultas']))
		    {

		    	$data = array();
				$FK = Fakultas::model()->findByPk($_POST['Fakultas']);

				foreach ($FK->jurusans as $j) {
			    
			    $data[] = array(
			                       'id'   => $j->jr_id,
			                       'text' => $j->jr_id. ' - ' . $j->jr_jenjang. '  ' . $j->jr_nama  ,
			                       );
			    }
				
				echo CJSON::encode($data) ;

		    }
		}

	}


	public function actionProgram(){

	   if(Yii::app()->request->isAjaxRequest)
	       {

		    	$data = array();
				$FK = Program::model()->findAll();

				foreach ($FK as $j) {
			    
			    $data[] = array(
			                       'id'   => $j->pr_kode,
			                       'text' => $j->pr_kode . ' - ' . $j->pr_nama,
			                       );
			    }
				
				echo CJSON::encode($data) ;
 
		}


	}



	public function actionKurikulum(){

		   if(Yii::app()->request->isAjaxRequest)
		       {

			    	$data = array();
					$FK = Kurikulum::model()->findAll();
					foreach ($FK as $j) {
				    $data[] = array(
				                       'id'   => $j->kr_kode,
				                       'text' => $j->kr_kode .' - ' . $j->kr_nama,
				                       );
				    }
					echo CJSON::encode($data) ;
			   
			}

		}

	public function actionRuangan(){

		   if(Yii::app()->request->isAjaxRequest)
		       {

			    	$data = array();
					$FK = Ruang::model()->findAll();
					foreach ($FK as $j) {
				    $data[] = array(
				                       'id'   => $j->rg_kode,
				                       'text' => $j->rg_kode .' - ' . $j->rg_nama,
				                       );
				    }
					echo CJSON::encode($data) ;
			   
			}

		}


}
