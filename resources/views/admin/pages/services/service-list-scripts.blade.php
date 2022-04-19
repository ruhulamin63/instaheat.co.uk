
  <script src="{{ asset('jquery/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('datatable/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('datatable/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('sweetalert2/sweetalert2.min.js') }}"></script>
  <script src="{{ asset('toastr/toastr.min.js') }}"></script>




  <!-- appointment table data search -->

  <script>
       toastr.options.preventDuplicates = true;

      $.ajaxSetup({
          headers:{
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $(function(){

        //=====================================================Get all Service=============================================
        $('#all-service-table').DataTable({
          processing:false,
          info:true,
          ajax:"{{ route('get.all.service.list')}}",
          "pageLength":5,
          "aLengthMenu":[[5,10,25,50,-1],[5,10,25,50,"All"]],
          columns:[
            // {data:'id', name:'id'},
            // {data:'DT_RowIndex', name:'DT_RowIndex'},
            // {data:'image', name:'image'},
            {data:'service_name', name:'service_name'},
            {data:'description', name:'description'},
            {data:'activeStatus', name:'activeStatus', orderable:false, searchable:false},
            {data:'actions', name:'actions', orderable:false, searchable:false},
          ]
        });

        //=========================================Add current users service====================================================
        $(document).on('click','#addServiceBtn', function(){
            var service_id = $(this).data('id');
            //alert(service_id);

            $.post('<?= route("admin.new.service.add") ?>',{service_id:service_id, _token:'{{csrf_token()}}'}, function(data){
                //alert(data.details.service_name);

                $('.addNewService').find('form')[0].reset();
                $('.addNewService').find('span.error-text').text('');

               $('.addNewService').modal('show');
            },'json');
        });

        // =============================================add current service==============================================
        $('#add-new-service-form').on('submit', function(e){
          e.preventDefault();
          var form = this;
          $.ajax({
            url:$(form).attr('action'),
            method:$(form).attr('method'),
            data:new FormData(form),
            processData:false,
            dataType:'json',
            contentType:false,
            beforeSend: function(){
                  $(form).find('span.error-text').text('');
            },
            success: function(data){
              if(data.code == 0){
                  $.each(data.error, function(prefix, val){
                      $(form).find('span.'+prefix+'_error').text(val[0]);
                  });
              }else{
                  $('#all-service-table').DataTable().ajax.reload(null, false);
                  $('.addNewService').modal('hide');
                  $('.addNewService').find('form')[0].reset();
                  toastr.success(data.msg);
              }
            }
          });
        });

        //===========================================================edit get service details==================================================
        $(document).on('click','#editServiceBtn', function(){
          var service_id = $(this).data('id');
          //alert(service_id);

          $.post('<?= route("edit.service.details") ?>',{service_id:service_id, _token:'{{csrf_token()}}'}, function(data){
                //alert(data.details.servcie_name);

              $('.editService').find('input[name="cid"]').val(data.details.id);
              $('.editService').find('input[name="service_name"]').val(data.details.service_name);
              $('.editService').find('textarea[name="description"]').val(data.details.description);
             
              $('.editService').find('input[name="image"]').val(data.details.image);
              
              $('.editService').modal('show');
          },'json');
        });

        // =============================================UPDATE COUNTRY DETAILS==============================================
        $('#update-service-form').on('submit', function(e){
          e.preventDefault();
          var form = this;
          $.ajax({
              url:$(form).attr('action'),
              method:$(form).attr('method'),
              data:new FormData(form),
              processData:false,
              dataType:'json',
              contentType:false,
              beforeSend: function(){
                    $(form).find('span.error-text').text('');
              },
              success: function(data){
                if(data.code == 0){
                    $.each(data.error, function(prefix, val){
                        $(form).find('span.'+prefix+'_error').text(val[0]);
                    });
                }else{
                    $('#all-service-table').DataTable().ajax.reload(null, false);
                    $('.editService').modal('hide');
                    $('.editService').find('form')[0].reset();
                    toastr.success(data.msg);
                }
              }
          });
        });

        //=======================================================DELETE COUNTRY RECORD=======================================================
        $(document).on('click','#deleteServcieBtn', function(){
          var service_id = $(this).data('id');

         // alert(service_id)

          var url = '<?= route("delete.service") ?>';

          Swal.fire({
            title:'Are you sure?',
            html:'You want to <b>delete</b> this service',
            showCancelButton:true,
            showCloseButton:true,
            cancelButtonText:'Cancel',
            confirmButtonText:'Yes, Delete',
            cancelButtonColor:'#d33',
            confirmButtonColor:'#556ee6',
            width:300,
            allowOutsideClick:false
          }).then(function(result){
            if(result.value){
                $.post(url,{service_id:service_id, _token:'{{csrf_token()}}'}, function(data){
                      if(data.code == 1){
                          $('#all-service-table').DataTable().ajax.reload(null, false);
                          toastr.success(data.msg);
                      }else{
                          toastr.error(data.msg);
                      }
                },'json');
              }
          });
        });


      });

  </script>
