<?php $this->beginContent('//layouts/main'); ?>

     <div class="col-lg-12">
	 
	  <div class="tbhead"> 
  
	 <div class="showback">
      					<h4><i class="fa fa-angle-right"></i><?php echo $this->pagetitle; ?></h4>
							<?php
	 
		$this->widget('booster.widgets.TbButtonGroup', array(
			'buttons'=>$this->menu,
		 
		));
		 
	?>
					 
	 </div>
	 </div>
	 
		<div class="content-panel">
		
		<div class="main">
					<?php echo $content; ?>
		</div><!-- content -->
		</div>
	</div>
	<script type="text/javascript">
		// delegate all clicks on "a" tag (links)
$(document).on("click", "ab", function () {
	return false;
    // get the href attribute
    var newUrl = $(this).attr("href");

    // veryfy if the new url exists or is a hash
    if (!newUrl || newUrl[0] === "#") {
        // set that hash
        location.hash = newUrl;
       return false;
    }
 
	if(newUrl!="javascript:;"){
    
    $(".content-panel").fadeOut(function () {
        // when the animation is complete, set the new location
        location = newUrl;
    });
	}

    // prevent the default browser behavior.
    return false;
});
        
	</script>
	 
</div>
<?php $this->endContent(); ?>
