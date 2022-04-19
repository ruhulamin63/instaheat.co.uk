
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

        //=====================================================Get all Boiler=============================================
        $('#all-boiler-table').DataTable({
          processing:false,
          info:true,
          ajax:"{{ route('get.all.boiler.list')}}",
          "pageLength":5,
          "aLengthMenu":[[5,10,25,50,-1],[5,10,25,50,"All"]],
          columns:[
            // {data:'id', name:'id'},
            // {data:'DT_RowIndex', name:'DT_RowIndex'},
            // {data:'image', name:'image'},
            {data:'brand_name', name:'brand_name'},
            {data:'model_name', name:'model_name'},
            {data:'type', name:'type'},
            {data:'central_heating_output', name:'central_heating_output'},
            {data:'hot_water_flow_rate', name:'hot_water_flow_rate'},
            {data:'short_desc', name:'short_desc'},
            {data:'price_for_5_year', name:'price_for_5_year'},
            {data:'price_for_10_year', name:'price_for_10_year'},
            {data:'actions', name:'actions', orderable:false, searchable:false},
          ]
        });

        //=========================================Add current users order====================================================
        $(document).on('click','#boilerBtn', function(){
            var boiler_id = $(this).data('id');
            //alert(boiler_id);

            $.post('<?= route("admin.new.boiler.add") ?>',{boiler_id:boiler_id, _token:'{{csrf_token()}}'}, function(data){
                //alert(data.details.brand_name);

                $('.addNewBoiler').find('form')[0].reset();
                $('.addNewBoiler').find('span.error-text').text('');

               $('.addNewBoiler').modal('show');
            },'json');
        });

        // =============================================add current boiler==============================================
        $('#add-new-boiler-form').on('submit', function(e){
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
                  $('#all-boiler-table').DataTable().ajax.reload(null, false);
                  $('.addNewBoiler').modal('hide');
                  $('.addNewBoiler').find('form')[0].reset();
                  toastr.success(data.msg);
              }
            }
          });
        });

         //===========================================================edit get details==================================================
         $(document).on('click','#editBoilerBtn', function(){
          var boiler_id = $(this).data('id');
          //alert(order_id);

          // $('.editAppointment').find('form')[0].reset();
          // $('.editAppointment').find('span.error-text').text('');

          $.post('<?= route("edit.boiler.details") ?>',{boiler_id:boiler_id, _token:'{{csrf_token()}}'}, function(data){
                //alert(data.details.customer_name);
                //console.log(data.details.customer_name);

              $('.editBoiler').find('input[name="cid"]').val(data.details.id);
              $('.editBoiler').find('input[name="brand_name"]').val(data.details.brand_name);
              $('.editBoiler').find('input[name="model_name"]').val(data.details.model_name);
              $('.editBoiler').find('input[name="type"]').val(data.details.type);
              $('.editBoiler').find('input[name="central_heating_output"]').val(data.details.central_heating_output);
              $('.editBoiler').find('input[name="hot_water_flow_rate"]').val(data.details.hot_water_flow_rate);
              $('.editBoiler').find('textarea[name="short_desc"]').val(data.details.short_desc);
              $('.editBoiler').find('input[name="price_for_5_year"]').val(data.details.price_for_5_year);
              $('.editBoiler').find('input[name="price_for_10_year"]').val(data.details.price_for_10_year);

              $('.editBoiler').find('input[name="image"]').val(data.details.image);
              
              $('.editBoiler').modal('show');
          },'json');
        });

        // =============================================UPDATE COUNTRY DETAILS==============================================
        $('#update-boiler-form').on('submit', function(e){
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
                    $('#all-boiler-table').DataTable().ajax.reload(null, false);
                    $('.editBoiler').modal('hide');
                    $('.editBoiler').find('form')[0].reset();
                    toastr.success(data.msg);
                }
              }
          });
        });

        //=======================================================DELETE COUNTRY RECORD=======================================================
        $(document).on('click','#deleteBoilerBtn', function(){
          var boiler_id = $(this).data('id');

         // alert(order_id)

          var url = '<?= route("delete.boiler") ?>';

          Swal.fire({
            title:'Are you sure?',
            html:'You want to <b>delete</b> this boiler',
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
                $.post(url,{boiler_id:boiler_id, _token:'{{csrf_token()}}'}, function(data){
                      if(data.code == 1){
                          $('#all-boiler-table').DataTable().ajax.reload(null, false);
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
