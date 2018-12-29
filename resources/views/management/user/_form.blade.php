@php
$id_skpd = '';
$nama_skpd = '';
$btn = 'save';
if(!is_null($model)){
	$id_skpd = $model->id_skpd;
	$nama_skpd = $model->nama_skpd;
	$btn = 'update';
}

@endphp
<form id="form">
	{{csrf_field()}}
	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email 
			<span class="required">*</span>
		</label>
		<div class="col-md-3 col-sm-3 col-xs-12">
			<input type="text" id="first-name" name="email" required="required" class="form-control col-md-7 col-xs-12" value="{{$nama_skpd}}">
		</div>
  	</div>
  	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama  
			<span class="required">*</span>
		</label>
		<div class="col-md-3 col-sm-3 col-xs-12">
			<input type="text" id="first-name" name="name" required="required" class="form-control col-md-7 col-xs-12" value="{{$nama_skpd}}">
		</div>
  	</div>
  	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Password 
			<span class="required">*</span>
		</label>
		<div class="col-md-3 col-sm-3 col-xs-12">
			<input type="password" id="first-name" name="password" required="required" class="form-control col-md-7 col-xs-12" value="{{$nama_skpd}}">
		</div>
  	</div>
  	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama SKPD 
			<span class="required">*</span>
		</label>
		<div class="col-md-3 col-sm-3 col-xs-12">
			<select name="id_skpd" class="form-control col-md-7 col-xs-12">
				
			</select>
		</div>
  	</div>
  	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Level 
			<span class="required">*</span>
		</label>
		<div class="col-md-3 col-sm-3 col-xs-12">
			<select name="level" class="form-control col-md-7 col-xs-12">
				<option value="admin">Admin</option>
				<option value="walidata">Walidata</option>
			</select>
		</div>
  	</div>
  	
  	<button type="button" id="save" data-action="{{$btn}}" class="btn btn-success"><i class="fa fa-save"></i> Simpan </button>
</form>
<script type="text/javascript">
	function formatData (data) {
		var img;
		if (!data.id) { return data.text; }
		var result = '<div style="">'+data.text+'</div>';
		return $(result);
	}
	$('select[name=id_skpd]').select2({
		ajax : {
          url : "{{url('skpd/'.Crypt::encryptString('get_skpd'))}}",
          type : 'POST',
          dataType : 'json',
          delay : 250,
          data : function(params) {
            return {
              param : params.term
            };
          },
          processResults : function(data) {
            var result = [];
            $.each(data,function(index,item) {
              result.push({
                id : item.id,
                text : item.nama_skpd,
              });
            });
            return{ results : result };
          },
          cache : true,
        },
        templateResult : formatData,
        templateSelection: formatData,
    });
	$('#save').click(function() {
		if ($(this).data('action') == 'save') {
			var url = "{{url('management/user/'.Crypt::encryptString('save'))}}";
		}
		else{
			var url = "{{url('management/user/'.Crypt::encryptString('update'))}}";
		}
		$.ajax({
			url : url,
			type : 'POST',
			data : $('#form').serialize(),
			datatype : 'JSON',
			success : function(data) {
				var a = JSON.parse(data);
				if (a.respon.execute) {
					alert(a.respon.message);
					$('._tbl').show();
					$('._form').html('');
					table.api().ajax.reload();
				}
				else{
					alert(a.respon.message);
				}
			},
			error : function(o,t,tr) {
				alert(o.status);
			}
		})
	})
</script>