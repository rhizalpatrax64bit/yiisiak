<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

  	<link rel="shortcut icon" href="<?=Yii::app()->baseUrl?>/images/icon.ico" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

	<div class="navbar navbar-inverse navbar-fixed-top">

            <!-- Top Fixed Bar: Navbar Inner -->
            <div class="navbar-inner">

                <!-- Top Fixed Bar: Container -->
                <div class="container">



                    <!-- / Logo / Brand Name -->
                    <a class="brand" href="#"><img src="<?=Yii::app()->baseUrl?>/images/logo.png" height="60" width="60"></a>
                    <a class="brand" href="#" style="margin-top:10px">
                            Universitas Sangga Buana<br>
                            YPKP Bandung
                        </b></a>
                    <!-- / Logo / Brand Name -->


                </div>
                <!-- / Top Fixed Bar: Container -->

            </div>
            <!-- / Top Fixed Bar: Navbar Inner -->

            <!-- Top Fixed Bar: Breadcrumb -->
            <div class="breadcrumb clearfix">

                <!-- Top Fixed Bar: Breadcrumb Container -->
                <div class="container">

               <div class="navbar">

        <!-- Main Navigation: Nav -->
        <ul class="nav">

                            <!-- Main Navigation: Dashboard -->
                <li ><a href="#"><i class="icon-align-justify"></i> Home</a></li>
                <!-- / Main Navigation: Dashboard -->
                <li><a href="#"><i class="icon-edit"></i> Status Perkuliahan</a></li>
                <!-- / Main Navigation: UI Elements -->	
                <li><a href="#"><i class="icon-edit"></i> Dosen</a></li>
                <li><a href="#"><i class="icon-edit"></i>  Mata Kuliah</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-magic">
                        </i> Dropdown1<b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="icon-check"></i>Dropdown1-1</a></li>
                        <li><a href="#"><i class="icon-check"></i>Dropdown1-2</a></li>
                        
                    </ul>
                </li>
                

                    </ul>
        <!-- / Main Navigation: Nav -->

        <!-- Main Navigation: Search -->
        
        <ul class="nav pull-right">
        	 <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-magic">
                        </i> Dropdown1<b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="icon-check"></i>Dropdown1-1</a></li>
                        <li><a href="#"><i class="icon-check"></i>Dropdown1-2</a></li>
                        
                    </ul>
                </li>
        </ul>

        <!-- / Main Navigation: Search -->

    </div>

                </a>
                </div>
                <a href="#">
                <!-- / Top Fixed Bar: Breadcrumb Container -->

            </a>
            </div><a href="#">
            <!-- / Top Fixed Bar: Breadcrumb -->

        </a>

        </div>

<div class="container" id="page" style="margin-top:150px">

	 

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>


	<?php echo $content; ?>



	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Internofa.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
