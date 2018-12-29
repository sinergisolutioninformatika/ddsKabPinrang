<button type="button" id="add" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah User Baru </button>
<table class="table" id="tbl">
	<thead class="thead-dark">
		<th scope="col">Email</th>
		<th scope="col">Nama</th>
		<th scope="col">SKPD</th>
		<th scope="col">Action</th>
	</thead>
</table>

<script type="text/javascript">
	$('#add').click(function() {
		$('._form').load("<?php echo e(url('management/user/'.Crypt::encryptString('_form'))); ?>",function(o,t,tr) {
			if (tr.status != 200) {
				alert(o.statusText)
			}
			else{
				$('._form').show();
				$('._tbl').hide();
			}
		})
	})
	var table;
	$.ajaxSetup({
		headers: { 'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>' }
  	});
    $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings){
        return {
            "iStart": oSettings._iDisplayStart,
            "iEnd": oSettings.fnDisplayEnd(),
            "iLength": oSettings._iDisplayLength,
            "iTotal": oSettings.fnRecordsTotal(),
            "iFilteredTotal": oSettings.fnRecordsDisplay(),
            "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
            "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
        };
    };
    table = $('#tbl').dataTable({
      initComplete : function() {
        var api = this.api();
        $('#tbl_filter input').off('.DT').on('input.DT',function() {
          api.search(this.value).draw();
        })
      },
      oLanguage : {
        sProcessing : "Loadiing..."
      },
      processing : true,
      serverSide : true,
      ajax : {
        url : "<?php echo e(url('management/user/'.Crypt::encryptString('get_ajax'))); ?>",type : 'POST'},
        columns : [
    		{'data' : 'email'},
    		{'data' : 'nama'},     	
    		{'data' : 'nama_skpd'},     	
    		{
    			'data' : 'url',
    			'orderable' : false,
    			'mRender' : function(data) {
    				return '<button type="button" class="btn btn-warning" onclick=ubah("'+data.edit+'")><i class="fa fa-edit"></i><div class="ripple-container"></div></button><button type="button" onclick=del("'+data.delete+'") class="btn btn-danger"><i class="fa fa-trash-o"></i><div class="ripple-container"></div></button>';
    			}
    		},     	
          
        ],
        order : [[1,'asc']],
        rowCallback : function(row,data,iDisplayIndex) {
          var info = this.fnPagingInfo();
          var page = info.iPage;
          var length = info.iLength;
          $('td:eq(0)',row).html();
        }
    });
</script>