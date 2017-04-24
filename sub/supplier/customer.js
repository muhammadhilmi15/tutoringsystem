$(document).ready( function () 
    {
      $('#table_cust').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": false,
        "responsive": true,
        "autoWidth": false,
        "pageLength": 10,
        "ajax": {
          "url": "data.php",
          "type": "POST"
        },
        "columns": [
        { "data": "urutan" },
        { "data": "nama_pemilik" },
        { "data": "alamat" },
        { "data": "no_telp_supplier" },
        { "data": "tanggal_gabung" },
        { "data": "button" },
        ]
      });


    });
    $(document).on("click","#btnadd",function(){
        $("#modalcust").modal("show");
        $("#txtname").focus();
        $("#txtname").val("");
        $("#txtcountry").val("");
        $("#txtphone").val("");
        $("#crudmethod").val("N");
        $("#txtid").val("0");
    });
    $(document).on( "click",".btnhapus", function() {
      var id_cust = $(this).attr("id_supplier");
      var name = $(this).attr("nama_pemilik");
      swal({   
        title: "Delete Cust?",   
        text: "Delete Cust : "+name+" ?",   
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",   
        confirmButtonText: "Delete",   
        closeOnConfirm: true }, 
        function(){   
          var value = {
            id_cust: id_cust
          };
          $.ajax(
          {
            url : "delete.php",
            type: "POST",
            data : value,
            success: function(data, textStatus, jqXHR)
            {
              var data = jQuery.parseJSON(data);
              if(data.result ==1){
                $.notify('Successfull delete customer');
                $.notf
                var table = $('#table_cust').DataTable(); 
                table.ajax.reload( null, false );
              }else{
                swal("Error","Can't delete customer data, error : "+data.error,"error");
              }

            },
            error: function(jqXHR, textStatus, errorThrown)
            {
             swal("Error!", textStatus, "error");
            }
          });
        });
    });

    $(document).on("click","#btnsave",function(){
      var id_cust = $("#txtid").val();
      var name = $("#txtname").val();
      var gender = $("#cbogender").val();
      var country = $("#txtcountry").val();
      var phone = $("#txtphone").val();
      var crud=$("#crudmethod").val();
      if(name == '' || name == null ){
        swal("Warning","Please fill customer name","warning");
        $("#txtname").focus();
        return;
      }
      var value = {
        id_cust: id_cust,
        name: name,
        gender:gender,
        country:country,
        phone:phone,
        crud:crud
      };
      $.ajax(
      {
        url : "save.php",
        type: "POST",
        data : value,
        success: function(data, textStatus, jqXHR)
        {
          var data = jQuery.parseJSON(data);
          if(data.crud == 'N'){
            if(data.result == 1){
              $.notify('Successfull save data');
              
              var table = $('#table_cust').DataTable(); 
              table.ajax.reload( null, false );
              $("#txtname").focus();
              $("#txtname").val("");
              $("#txtcountry").val("");
              $("#txtphone").val("");
              $("#crudmethod").val("N");
              $("#txtid").val("0");
              $("#txtnama").focus();
            }else{
              swal("Error","Can't save customer data, error : "+data.error,"error");
            }
          }else if(data.crud == 'E'){
            if(data.result == 1){
              $.notify('Successfull update data');
              var table = $('#table_cust').DataTable(); 
              table.ajax.reload( null, false );
              $("#txtname").focus();
            }else{
             swal("Error","Can't update customer data, error : "+data.error,"error");
            }
          }else{
            swal("Error","invalid order","error");
          }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
           swal("Error!", textStatus, "error");
        }
      });
    });
    $(document).on("click","#btnedit",function(){
      
      var id_supplier=$(this).attr("id_supplier");
      var value = {
        id_supplier: id_supplier
      };
      $.ajax(
      {
        url : "get_cust.php",
        type: 'POST',
        data : value,
        success: function(data, textStatus, jqXHR)
        {
          var data = jQuery.parseJSON(data);
          $('#crudmethod').value("E");
          $('#txtid').value(data.id_supplier);
          $('#txtname').value(data.nama_pemilik);
          $('#cbogender').value(data.alamat);
          $('#txtcountry').value(data.no_telp_supplier);
          $('#txtphone').value(data.tanggal_gabung);
          // $('#detailTrip').on('show.bs.modal'
          $("#modalcust").modal('show');
          
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
          swal("Error!", textStatus, "error");
        }
      });
    });
    $.notifyDefaults({
      type: 'success',
      delay: 500
    });m