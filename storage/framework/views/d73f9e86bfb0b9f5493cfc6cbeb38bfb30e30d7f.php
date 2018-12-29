<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
		<div class="x_title"> Users </div>
		<div class="x_content">
			<div class="_form"></div>
			<div class="_tbl">
				<?php echo $__env->make('walidata.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>
		</div>
	</div>
</div>