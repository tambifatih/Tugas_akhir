<script type="text/javascript">
	$(function())
		$("#nama").autocomplete({
			source: function(requese, response) {
				$.ajax({
					url: "<? echo site_url('check_in/get_nama');?>",
					data: request,
					datatype: "JSON",
					success: function(data) {
						if(data.response == 'true') {
							response(data.message);
						}
						$("#nama_perusahaan").val(data.nama_perusahaan);
						$("#alamat").val(data.alamat);
						$("#no_telp").val(data.no_telp);
					}
				})
			}
		})
</script>