<script type="text/javascript">
	$(document).ready(function(){

	// enable material-style inputs in entire body
    // $('body').materializeInputs();

    // initiate plugin ====================================================================================
    // ----------------------------------------------------------------------------------------------------
    // datepicker plugin
    $('.date-picker').datepicker({
    	autoclose: true,
    	todayHighlight: true
    });

    // dataTables plugin
    $.fn.dataTableExt.oApi.fnPagingInfo = function (oSettings)
    {
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
    // ====================================================================================================
    // Tampil Data ========================================================================================
    // ----------------------------------------------------------------------------------------------------
    // datatables serverside processing
    var table = $('#tabel-asset').DataTable({
    	"bAutoWidth": true,
    	"scrollY": '58vh',
    	"scrollX": true,
    	"scrollCollapse": true,
    	"processing": true,
    	"serverSide": true,
    	"select": true,
    	"stateSave": false,
        "ordering": false,
        "fixedColumns":   {
          leftColumns: 2
      },
      "dom": 'C<"clear">lfrtip',
			// panggil file data_assets.php untuk menampilkan data asset dari database
			"ajax": '_GET/get_data_asset.php',

			"columnDefs": [
            // No
            { "targets": 0, "data": null, "orderable": false, "searchable": false, "width": '30px', "className": 'center' },
            // id Asset
            { "targets": 1, "width": '80px', "className": 'center' },
            // No. Asset
            { "targets": 2, "width": '50px', "className": 'center' },
            // Tgl. Pemeriksaan
            { "targets": 3, "width": '100px', "className": 'center' },
            // Kategori
            { "targets": 4, "width": '100px', "className": 'center' },
            // Device Name
            { "targets": 5, "width": '100px', "className": 'center' },
            // Brand
            { "targets": 6, "width": '80px', "className": 'center' },
            // Type
            { "targets": 7, "width": '150px', "className": 'center' },
            // Motherboard
            { "targets": 8, "width": '180px', "className": 'center' },
            // CPU
            { "targets": 9, "width": '200px', "className": 'center' },
            // RAM
            { "targets": 10, "width": '180px', "className": 'center' },
            // GPU
            { "targets": 11, "width": '200px', "className": 'center' },
            // Storage
            { "targets": 12, "width": '100px', "className": 'center' },
            // Optical Drive
            { "targets": 13, "width": '100px', "className": 'center' },
            // PSU
            { "targets": 14, "width": '100px', "className": 'center' },
            // Display Unit
            { "targets": 15, "width": '80px', "className": 'center' },
            // Operating system
            { "targets": 16, "width": '180px', "className": 'center' },
            // Komputer Type
            { "targets": 17, "width": '100px', "className": 'center' },
            // IP Address
            { "targets": 18, "width": '100px', "className": 'center' },
            // Mac Address
            { "targets": 19, "width": '100px', "className": 'center' },
            // Connectivity
            { "targets": 20, "width": '80px', "className": 'center' },
            // Internet Link
            { "targets": 21, "width": '80px', "className": 'center' },
            // Current User
            { "targets": 22, "width": '150px', "className": 'center' },
            // Password
            { "targets": 23, "width": '100px', "className": 'center' },
            // Location
            { "targets": 24, "width": '120px', "className": 'center' },
            // Linkt To
            { "targets": 25, "width": '120px', "className": 'center' },
            // Maintenance Date
            { "targets": 26, "width": '100px', "className": 'center' },
            // Maintenance Next Date
            { "targets": 27, "width": '100px', "className": 'center' },
            {
            	"targets": 28, "data": null, "orderable": false, "searchable": false, "width": '20px', "className": 'center',
            	"render": function(data, type, row) {
            		var btn = "<a title=\"Hapus\" class=\"btn btn-danger btn-sm btnHapus\" href=\"#\"><i class=\"fas fa-trash\"></i></a>";
            		return btn;
            	} 
            } 

            ],
            	// urutkan data berdasarkan id_asset secara Ascending
            	"order": [[ 1, "asc" ]],

                // tampilkan 10 data
                "iDisplayLength": 10,    

                "rowCallback": function (row, data, iDisplayIndex) {
                	var info   = this.fnPagingInfo();
                	var page   = info.iPage;
                	var length = info.iLength;
                	var index  = page * length + (iDisplayIndex + 1);
                	$('td:eq(0)', row).html(index);
                }
            });

	// ====================================================================================================
	// Simpan Data ========================================================================================
    // ----------------------------------------------------------------------------------------------------
    // Tampikan Form Tambah Data
    $('#btnTambah').click(function(reload){
        // reset form
        $('#formTambah')[0].reset();
    });

    // Proses Simpan Data
    $('#btnSimpan').click(function(){
		// Validasi form input
		if ($('#no_asset_add').val()==""){
			$( "#no_asset_add" ).focus();
			swal("Peringatan!", "No. Asset tidak boleh kosong.", "warning");
		}
		else if ($('#id_asset_add').val()==""){
			$( "#id_asset_add" ).focus();
			swal("Peringatan!", "Kode Asset tidak boleh kosong.", "warning");
		}
		else if ($('#tanggal_pemeriksaan_add').val()==""){
			$( "#tanggal_pemeriksaan_add" ).focus();
			swal("Peringatan!", "Tgl. Pemeriksaan tidak boleh kosong.", "warning");
		}
		else if ($('#kategori_add').val()=="-"){
			$( "#kategori_add" ).focus();
			swal("Peringatan!", "Kategori tidak boleh kosong.", "warning");
		}
		else if ($('#nama_device_add').val()==""){
			$( "#nama_device_add" ).focus();
			swal("Peringatan!", "Nama Device tidak boleh kosong.", "warning");
		}
		else if ($('#brand_add').val()==""){
			$( "#brand_add" ).focus();
			swal("Peringatan!", "Brand tidak boleh kosong.", "warning");
		}
		else if ($('#type_add').val()==""){
			$( "#type_add" ).focus();
			swal("Peringatan!", "Type tidak boleh kosong.", "warning");
		}
		else if ($('#motherboard_add').val()==""){
			$( "#motherboard_add" ).focus();
			swal("Peringatan!", "Motherboard tidak boleh kosong.", "warning");
		}
		else if ($('#cpu_add').val()==""){
			$( "#cpu_add" ).focus();
			swal("Peringatan!", "CPU tidak boleh kosong.", "warning");
		}
		else if ($('#ram_add').val()==""){
			$( "#ram_add" ).focus();
			swal("Peringatan!", "RAM tidak boleh kosong.", "warning");
		}
		else if ($('#gpu_add').val()==""){
			$( "#gpu_add" ).focus();
			swal("Peringatan!", "GPU tidak boleh kosong.", "warning");
		}
		else if ($('#storage_add').val()==""){
			$( "#storage_add" ).focus();
			swal("Peringatan!", "Storage tidak boleh kosong.", "warning");
		}
		else if ($('#optical_drive_add').val()==""){
			$( "#optical_drive_add" ).focus();
			swal("Peringatan!", "Optical Drive tidak boleh kosong.", "warning");
		}
		else if ($('#psu_add').val()==""){
			$( "#psu_add" ).focus();
			swal("Peringatan!", "PSU tidak boleh kosong.", "warning");
		}
		else if ($('#display_unit_add').val()==""){
			$( "#display_unit_add" ).focus();
			swal("Peringatan!", "Display Unit tidak boleh kosong.", "warning");
		}
		else if ($('#operating_system_add').val()==""){
			$( "#operating_system_add" ).focus();
			swal("Peringatan!", "Operating System tidak boleh kosong.", "warning");
		}
		else if ($('#komputer_type_add').val()=="-"){
			$( "#komputer_type_add" ).focus();
			swal("Peringatan!", "Kompter Type tidak boleh kosong.", "warning");
		}
		else if ($('#ip_address_add').val()==""){
			$( "#ip_address_add" ).focus();
			swal("Peringatan!", "IP Address tidak boleh kosong.", "warning");
		}
		else if ($('#mac_address_add').val()==""){
			$( "#mac_address_add" ).focus();
			swal("Peringatan!", "MAC Address tidak boleh kosong.", "warning");
		}
		else if ($('#connectivity_add').val()=="-"){
			$( "#connectivity_add" ).focus();
			swal("Peringatan!", "Connectivity tidak boleh kosong.", "warning");
		}
		else if ($('#internet_add').val()=="-"){
			$( "#internet_add" ).focus();
			swal("Peringatan!", "Internet tidak boleh kosong.", "warning");
		}
		else if ($('#user_add').val()=="-"){
			$( "#user_add" ).focus();
			swal("Peringatan!", "Current User tidak boleh kosong.", "warning");
		}
		//else if ($('#password').val()==""){
        //    $( "#password" ).focus();
        //    swal("Peringatan!", "Password tidak boleh kosong.", "warning");
        //}
        else if ($('#location_add').val()=="-"){
        	$( "#location_add" ).focus();
        	swal("Peringatan!", "Location tidak boleh kosong.", "warning");
        }
        else if ($('#link_to_add').val()=="-"){
        	$( "#link_to_add" ).focus();
        	swal("Peringatan!", "Link To tidak boleh kosong.", "warning");
        }
        // else if ($('#maint_date').val()==""){
        //    $( "#maint_date" ).focus();
        //    swal("Peringatan!", "Maintenance Date tidak boleh kosong.", "warning");
        //}
        // jika semua data sudah terisi, jalankan perintah simpan data
        else {
        	var data = $('#formTambah').serialize();
        	$.ajax({
        		type : "POST",
        		url  : "proses/proses_simpan.php",
        		data : data,
				// ketika sukses menyimpan data
				success: function(result){
					if (result==="sukses") {
						// tutup modal tambah data asset
						$('#modalTambah').modal('hide');
                        // tampilkan pesan sukses simpan data
                        swal("Sukses!", "Data Asset berhasil disimpan.", "success");
                        // tampilkan data asset
                        var table = $('#tabel-asset').DataTable(); 
                        table.ajax.reload( null, false );
                    } else {
                    	// tampilkan pesan gagal simpan data
                    	swal("Gagal!", "Data Asset tidak bisa disimpan.", "error");
                    }
                }
            });
        	return false;
        }
    });
	// ====================================================================================================
	// Ubah Data ==========================================================================================
    // ----------------------------------------------------------------------------------------------------
    // Tampilkan Form Ubah Data
    $('#tabel-asset tbody').on('dblclick', 'tr', function () {
    	var data = table.row( this ).data();
    	var id_asset = data[ 1 ];
    	$.ajax({
    		type : "GET",
    		url  : "_GET/get_ubah_asset.php",
    		data : {id_asset:id_asset},
    		dataType : "JSON",
    		success: function(result){
    			// ubah tanggal menjadi d-m-Y Pemeriksaan
    			var tgl                         = result.tanggal_pemeriksaan;
    			var dateAr                      = tgl.split('-');
    			var tanggal_pemeriksaan_result  = dateAr[2] + '-' + dateAr[1] + '-' + dateAr[0];

				// ubah tanggal menjadi d-m-Y Maintenance
				var tgl_maintenance             = result.maint_date;
				var dateAr_maintenance          = tgl_maintenance.split('-');
				var maint_date_result           = dateAr_maintenance[2] + '-' + dateAr_maintenance[1] + '-' + dateAr_maintenance[0];

                // tampilkan modal ubah data asset
                $('#modalUbah').modal('show');
                // tampilkan data asset
                $('#id_asset_edit').val(result.id_asset);
                $('#tanggal_pemeriksaan_edit').val(tanggal_pemeriksaan_result);
                $('#no_asset_edit').val(result.no_asset);
                $('#kategori_edit').val(result.kategori);
                $('#nama_device_edit').val(result.nama_device);
                $('#brand_edit').val(result.brand);
                $('#type_edit').val(result.type);
                $('#motherboard_edit').val(result.motherboard);
                $('#cpu_edit').val(result.cpu);
                $('#ram_edit').val(result.ram);
                $('#gpu_edit').val(result.gpu);
                $('#storage_edit').val(result.storage);
                $('#optical_drive_edit').val(result.optical_drive);
                $('#psu_edit').val(result.psu);
                $('#display_unit_edit').val(result.display_unit);
                $('#operating_system_edit').val(result.operating_system);
                $('#komputer_type_edit').val(result.komputer_type);
                $('#ip_address_edit').val(result.ip_address);
                $('#mac_address_edit').val(result.mac_address);
                $('#connectivity_edit').val(result.connectivity);
                $('#internet_edit').val(result.internet);
                $('#user_edit').val(result.user);
                $('#password_edit').val(result.password);
                $('#location_edit').val(result.location);
                $('#link_to_edit').val(result.link_to);
                $('#maint_date_edit').val(maint_date_result);
            }
        });
    	$('#modalUbah').modal('show');
    } );

	// Proses Ubah Data
	$('#btnUbah').click(function(){
		// Validasi form Ubah
		if ($('#no_asset_edit').val()==""){
			$( "#no_asset_edit" ).focus();
			swal("Peringatan!", "No. Asset tidak boleh kosong.", "warning");
		}
		else if ($('#id_asset_edit').val()==""){
			$( "#id_asset_edit" ).focus();
			swal("Peringatan!", "Kode Asset tidak boleh kosong.", "warning");
		}
		else if ($('#tanggal_pemeriksaan_edit').val()==""){
			$( "#tanggal_pemeriksaan_edit" ).focus();
			swal("Peringatan!", "Tgl. Pemeriksaan tidak boleh kosong.", "warning");
		}
		else if ($('#kategori_edit').val()=="-"){
			$( "#kategori_edit" ).focus();
			swal("Peringatan!", "Kategori tidak boleh kosong.", "warning");
		}
		else if ($('#nama_device_edit').val()==""){
			$( "#nama_device_edit" ).focus();
			swal("Peringatan!", "Nama Device tidak boleh kosong.", "warning");
		}
		else if ($('#brand_edit').val()==""){
			$( "#brand_edit" ).focus();
			swal("Peringatan!", "Brand tidak boleh kosong.", "warning");
		}
		else if ($('#type_edit').val()==""){
			$( "#type_edit" ).focus();
			swal("Peringatan!", "Type tidak boleh kosong.", "warning");
		}
		else if ($('#motherboard_edit').val()==""){
			$( "#motherboard_edit" ).focus();
			swal("Peringatan!", "Motherboard tidak boleh kosong.", "warning");
		}
		else if ($('#cpu_edit').val()==""){
			$( "#cpu_edit" ).focus();
			swal("Peringatan!", "CPU tidak boleh kosong.", "warning");
		}
		else if ($('#ram_edit').val()==""){
			$( "#ram_edit" ).focus();
			swal("Peringatan!", "RAM tidak boleh kosong.", "warning");
		}
		else if ($('#gpu_edit').val()==""){
			$( "#gpu_edit" ).focus();
			swal("Peringatan!", "GPU tidak boleh kosong.", "warning");
		}
		else if ($('#storage_edit').val()==""){
			$( "#storage_edit" ).focus();
			swal("Peringatan!", "Storage tidak boleh kosong.", "warning");
		}
		else if ($('#optical_drive_edit').val()==""){
			$( "#optical_drive_edit" ).focus();
			swal("Peringatan!", "Optical Drive tidak boleh kosong.", "warning");
		}
		else if ($('#psu_edit').val()==""){
			$( "#psu_edit" ).focus();
			swal("Peringatan!", "PSU tidak boleh kosong.", "warning");
		}
		else if ($('#display_unit_edit').val()==""){
			$( "#display_unit_edit" ).focus();
			swal("Peringatan!", "Display Unit tidak boleh kosong.", "warning");
		}
		else if ($('#operating_system_edit').val()==""){
			$( "#operating_system_edit" ).focus();
			swal("Peringatan!", "Operating System tidak boleh kosong.", "warning");
		}
		else if ($('#komputer_type_edit').val()=="-"){
			$( "#komputer_type_edit" ).focus();
			swal("Peringatan!", "Kompter Type tidak boleh kosong.", "warning");
		}
		else if ($('#ip_address_edit').val()==""){
			$( "#ip_address_edit" ).focus();
			swal("Peringatan!", "IP Address tidak boleh kosong.", "warning");
		}
		else if ($('#mac_address_edit').val()==""){
			$( "#mac_address_edit" ).focus();
			swal("Peringatan!", "MAC Address tidak boleh kosong.", "warning");
		}
		else if ($('#connectivity_edit').val()=="-"){
			$( "#connectivity_edit" ).focus();
			swal("Peringatan!", "Connectivity tidak boleh kosong.", "warning");
		}
		else if ($('#internet_edit').val()=="-"){
			$( "#internet_edit" ).focus();
			swal("Peringatan!", "Internet tidak boleh kosong.", "warning");
		}
		else if ($('#user_edit').val()=="-"){
			$( "#user_edit" ).focus();
			swal("Peringatan!", "Current User tidak boleh kosong.", "warning");
		}
		//else if ($('#password').val()==""){
        //    $( "#password" ).focus();
        //    swal("Peringatan!", "Password tidak boleh kosong.", "warning");
        //}
        else if ($('#location_edit').val()=="-"){
        	$( "#location_edit" ).focus();
        	swal("Peringatan!", "Location tidak boleh kosong.", "warning");
        }
        else if ($('#link_to_edit').val()=="-"){
        	$( "#link_to_edit" ).focus();
        	swal("Peringatan!", "Link To tidak boleh kosong.", "warning");
        }
        // else if ($('#maint_date').val()==""){
        //    $( "#maint_date" ).focus();
        //    swal("Peringatan!", "Maintenance Date tidak boleh kosong.", "warning");
        //}
        // jika semua data sudah terisi, jalankan perintah simpan data
        else {
        	var data = $('#formUbah').serialize();
        	$.ajax({
        		type : "POST",
        		url  : "proses/proses_ubah.php",
        		data : data,
				// ketika sukses mengubah data
				success: function(result){ 
					if (result==="sukses") {
                		// tutup modal ubah data asset
                		$('#modalUbah').modal('hide');
						// tampilkan pesan sukses ubah data
						swal("Sukses!", "Data Asset berhasil diubah.", "success");
                        // tampilkan data asset
                        var table = $('#tabel-asset').DataTable(); 
                        table.ajax.reload( null, false );
                    } else {
                        // tampilkan pesan gagal ubah data
                        swal("Gagal!", "Data Asset tidak bisa diubah.", "error");
                    }
                }
            });
        	return false;
        }
    });
	// ===================================================================================================        
	// Proses Hapus Data ==================================================================================
    // ----------------------------------------------------------------------------------------------------
    $('#deleteBtn').on( 'click', '.btnHapus', function (){
      table.row('.selected').remove().draw( false );
  });

    $('#tabel-asset tbody').on( 'click', '.btnHapus', function (){
    	if ( $(this).hasClass('selected') ) {
    		$(this).removeClass('selected');
    	}
    	else {
    		table.$('tr.selected').removeClass('selected');
    		$(this).addClass('selected');
    	}

    	var data = table.row( $(this).parents('tr') ).data();
            // tampilkan notifikasi saat akan menghapus data
            swal({
            	title: "Apakah Anda Yakin?",
            	text: "Anda akan menghapus data Asset dengan ID : "+ data[ 1 ] +"",
            	type: "warning",
            	showCancelButton: true,
            	confirmButtonColor: "#DD6B55",
            	confirmButtonText: "Ya, Hapus!",
            	closeOnConfirm: false
            }, 
            // jika dipilih ya, maka jalankan perintah hapus data
            function () {
            	var id_asset = data[ 1 ];
            	$.ajax({
            		type : "POST",
            		url  : "proses/proses_hapus.php",
            		data : {id_asset:id_asset},
            		success: function(result){
                        // ketika sukses menghapus data
                        if (result==="sukses") {
                                // tampilkan pesan sukses hapus data
                                swal("Sukses!", "Data Asset berhasil dihapus.", "success");
                                // tampilkan data asset
                                var table = $('#tabel-asset').DataTable(); 
                                table.ajax.reload( null, false );
                            } else {
                                // tampilkan pesan gagal hapus hapus data
                                swal("Gagal!", "Data Asset tidak bisa dihapus.", "error");
                            }
                        }
                    });
            });
        });
		// ====================================================================================================
	});
</script>