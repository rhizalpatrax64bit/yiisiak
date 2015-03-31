

<?php
Yii::app()->clientscript;
$guest = Yii::app()->user->isGuest;

if($guest && $this->action->id != "login")
{
	$this->redirect(array("/site/login"));
}

?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>
			<?php echo CHtml::encode($this->pageTitle); ?>
		</title>
		<meta name="language" content="en" />
		<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!-- Le styles -->
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />
		<!-- Le fav and touch icons -->
	</head>

	<body>

		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar">
						</span>
						<span class="icon-bar">
						</span>
						<span class="icon-bar">
						</span>
					</a>
					<a class="brand" href="#">
						<?php echo Yii::app()->name ?>
					</a>


					<?php
					if(!$guest)
					{

						$this->widget('zii.widgets.CMenu', array(
								'htmlOptions'        => array('class'=>'nav'),
								'items'              => array(

									array('label'=>'Home','url'  =>array('/site/index')),
									array('label'=>'Provider','url'  =>array('/Provider')),
									array('label'=>'Produk','url'  =>array('/Produk')),
									array('label'=>'Transaksi','url'  =>array('/Transaksi')),
									array('label'  =>'Login','url'    =>array('/site/login'),'visible'=>Yii::app()->user->isGuest),
									array('label'=>Yii::t('app','User Management'),'url'  =>array('/rights')),
									array(
										'label'      => '<i class="icon-user"></i><span class="username">'.Yii::app()->user->name.'</span> <i class="icon-angle-down"></i>',
										'url'        => '#',
										'linkOptions'=> array(
											'class'      => 'dropdown-toggle',
											'data-toggle'=> 'dropdown',
										),
										'itemOptions' => array('class'=>'dropdown user'),
										'items'       => array(
											array(
												'label'=> '<i class="icon-user"></i> My Profile',
												'url'  => array('/user/profile')
											),
											
											array(
												'label'=> '',
												array(
													'class'=> 'divider',
												)
											),
											array(
												'label'=> '<i class="icon-key"></i> Log Out',
												'url'   => array('site/logout'),
											),
										)
									),
								),
								'encodeLabel'       => false,
								'htmlOptions'        => array(
									'class'=>'nav pull-right',
								),
								'submenuHtmlOptions' => array(
									'class'=> 'dropdown-menu',
								)
							));



					}
					?>

				</div><!--/.nav-collapse -->
			</div>
		</div>
		</div>

		<?php
		//echo ' < div class = "cont"><div class = "container" > ';

		if(!$guest)
		{
			echo '<div class="cont"><div class="container">';
			$box = $this->beginWidget(
				'bootstrap.widgets.TbBox',
				array(
					'title'        => ucfirst(Yii::app()->controller->id),
					'headerIcon'   => 'icon-list',
					'htmlOptions'   => array('class'=> 'bootstrap-widget-table'),
					'headerButtons' => array(
						array(
							'class'=> 'bootstrap.widgets.TbButtonGroup',
							'type' => 'success',
							// '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'

						),
						array(
							'class'  => 'bootstrap.widgets.TbButtonGroup',
							'buttons'=> $this->menu,
						),
					)
				)
			);

			echo '</div></div>';

		}

		?>


		<div class="cont">
			<div class="container">
				<?php echo $content ?>
			</div>
		</div>

		<?php
		if(!$guest)
		{
			$this->endWidget();
		} ?>

		<div class="footer">
			<div class="container">
				<div class="row">
					<div id="footer-copyright" class="col-md-6">
						About us | Contact us | Terms & Conditions
					</div> <!-- /span6 -->
					<div id="footer-terms" class="col-md-5">
						© <?php echo CHtml::encode($this->pageTitle); ?>
						<a href="#" target="_blank">
							Rizal Gunawan
						</a>.
					</div> <!-- /.span6 -->
				</div> <!-- /row -->
			</div> <!-- /container -->
		</div>
	</body>
</html>



