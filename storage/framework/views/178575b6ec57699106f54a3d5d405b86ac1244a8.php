 </div>


        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    
    <script type="text/javascript">
        function blowing(msg) {
            alert(msg);
        }
        $('#manuser').click(function() {
            $('.right_col').load("<?php echo e(url('management/user/'.Crypt::encryptString('index'))); ?>",function(o,t,tr) {
                if (tr.status != 200) {
                    blowing(tr.statusText);
                }
                else{
                    window.history.pushState('','',"<?php echo e(url('management/user/'.Crypt::encryptString('index'))); ?>");
                }
            });

        });
        $('#walidata').click(function() {
            $('.right_col').load("<?php echo e(url('walidata/'.Crypt::encryptString('index'))); ?>",function(o,t,tr) {
                if (tr.status != 200) {
                    blowing(tr.statusText);
                }
            })
        });
        $('#skpd').click(function() {
            $('.right_col').load("<?php echo e(url('master-data/skpd/'.Crypt::encryptString('index'))); ?>",function (o,t,tr) {
                if (tr.status != 200) {
                    blowing(tr.statusText);
                }
            })
        })
    </script>
    <!-- Bootstrap -->
    <script src="<?php echo e(asset('asset/vendors/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo e(asset('asset/vendors/fastclick/lib/fastclick.js')); ?>"></script>
    <!-- NProgress -->
    <script src="<?php echo e(asset('asset/vendors/nprogress/nprogress.js')); ?>"></script>
    <!-- Chart.js')}} -->
    <script src="<?php echo e(asset('asset/vendors/Chart.js')); ?>/dist/Chart.min.js')}}"></script>
    <!-- gauge.js')}} -->
    <script src="<?php echo e(asset('asset/vendors/gauge.js')); ?>/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo e(asset('asset/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')); ?>"></script>
    <!-- iCheck -->
    <script src="<?php echo e(asset('asset/vendors/iCheck/icheck.min.js')); ?>"></script>
    <!-- Skycons -->
    <script src="<?php echo e(asset('asset/vendors/skycons/skycons.js')); ?>"></script>
    <!-- Flot -->
    <script src="<?php echo e(asset('asset/vendors/Flot/jquery.flot.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/vendors/Flot/jquery.flot.pie.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/vendors/Flot/jquery.flot.time.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/vendors/Flot/jquery.flot.stack.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/vendors/Flot/jquery.flot.resize.js')); ?>"></script>
    <!-- Flot plugins -->
    <script src="<?php echo e(asset('asset/vendors/flot.orderbars/js/jquery.flot.orderBars.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/vendors/flot-spline/js/jquery.flot.spline.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/vendors/flot.curvedlines/curvedLines.js')); ?>"></script>
    <!-- DateJS -->
    <script src="<?php echo e(asset('asset/vendors/DateJS/build/date.js')); ?>"></script>
    <!-- JQVMap -->
    <script src="<?php echo e(asset('asset/vendors/jqvmap/dist/jquery.vmap.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/vendors/jqvmap/dist/maps/jquery.vmap.world.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')); ?>"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo e(asset('asset/vendors/moment/min/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/vendors/bootstrap-daterangepicker/daterangepicker.js')); ?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo e(asset('asset/build/js/custom.min.js')); ?>"></script>
	
  </body>
</html>