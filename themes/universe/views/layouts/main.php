 
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <title>SINPREN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
         <LINK REL="SHORTCUT ICON" HREF="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/download.png">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/chosen.css" rel='stylesheet' tyle="text/css">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/theme/avocado.css" rel="stylesheet" type="text/css" id="theme-style">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/prism.css" rel="stylesheet/less" type="text/css">
        <link href='<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/fullcalendar.css' rel='stylesheet' tyle="text/css">
       <!--  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,600,300' rel='stylesheet' type='text/css'>  -->
        <style type="text/css">
            body { padding-top: 102px; }
        </style>
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/bootstrap-responsive.css" rel="stylesheet">

        <!-- JavaScript/jQuery, Pre-DOM -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/jquery-ui-1.10.0/jquery-1.9.0.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/jquery-ui-1.10.0/ui/jquery.ui.core.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/jquery-ui-1.10.0/ui/jquery.ui.widget.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/jquery-ui-1.10.0/ui/jquery.ui.datepicker.js"></script>
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/jquery-ui-1.10.0/themes/base/jquery.ui.all.css">
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/charts/excanvas.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/charts/jquery.flot.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/jquery.jpanelmenu.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/jquery.cookie.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/avocado-custom-predom.js"></script>
        <script>
            $(function() {
                $( "#a" ).datepicker();
            });
        </script>

    </head>

    <body>

        <!-- Top Fixed Bar -->
        <div class="navbar navbar-inverse navbar-fixed-top">

            <!-- Top Fixed Bar: Navbar Inner -->
            <div class="navbar-inner">

                <!-- Top Fixed Bar: Container -->
                <div class="container">



                    <!-- / Logo / Brand Name -->
                    <a class="brand" href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/download.png" width="60" height="60"></a><a class="brand" href="#"><B><font style="font-size:24px; color:#CCC;">SINPREN</font><br>
                            Universitas Sangga Buana<br>
                            YPKP Bandung
                        </B></a>
                    <!-- / Logo / Brand Name -->


                </div>
                <!-- / Top Fixed Bar: Container -->

            </div>
            <!-- / Top Fixed Bar: Navbar Inner -->

            <!-- Top Fixed Bar: Breadcrumb -->
            <div class="breadcrumb clearfix">

                <!-- Top Fixed Bar: Breadcrumb Container -->
                <div class="container">

                    <!-- Top Fixed Bar: Breadcrumb Location -->
                    <ul class="pull-left">
                        <li><a href="#"><i class="icon-key"></i>LOGIN
                    </ul>
                    <!-- / Top Fixed Bar: Breadcrumb Location -->

                </div>
                <!-- / Top Fixed Bar: Breadcrumb Container -->

            </div>
            <!-- / Top Fixed Bar: Breadcrumb -->

        </div>
        <!-- / Top Fixed Bar -->


        <div class="container">  
            
            <?= $content ?>
        
        </div> 

        <!-- Footer -->
        <footer class="footer">

            <!-- Footer Container -->
            <div class="container">

                <!-- Footer Container: Content -->
                <p>Copyright<a href="ftp.unej.ac.id">Fakultas Teknologi Pertanian</a> <?=date('Y')?>. All rights resserved.</p>

                <p><a href="usbypkp.ac.id">UNIVERSITAS SANGGA BUANA YPKP</a></p>


                <!-- / Footer Container: Content -->

            </div>
            <!-- / Footer Container -->

        </footer>
        <!-- / Footer -->

    </body>

    <!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src='<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/jquery.hotkeys.js'></script>
    <script src='<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/calendar/fullcalendar.min.js'></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/jquery-ui-1.10.2.custom.min.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/jquery.pajinate.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/jquery.prism.min.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/charts/jquery.flot.time.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/charts/jquery.flot.pie.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/charts/jquery.flot.resize.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/bootstrap/bootstrap-wysiwyg.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/bootstrap/bootstrap-typeahead.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/jquery.easing.min.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/jquery.chosen.min.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/avocado-custom.js"></script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-43253177-1', 'lycheedesigns.com');
        ga('send', 'pageview');

    </script>   

</html>