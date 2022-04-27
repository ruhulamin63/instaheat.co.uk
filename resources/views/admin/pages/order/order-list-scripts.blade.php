
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

         //=====================================================Today Order=============================================
        $('#today-order-table').DataTable({
            processing:false,
            info:true,
            ajax:"{{ route('get.today.order')}}",
            "pageLength":5,
            "aLengthMenu":[[5,10,25,50,-1],[5,10,25,50,"All"]],
            columns:[
              // {data:'id', name:'id'},
              // {data:'DT_RowIndex', name:'DT_RowIndex'},
              {data:'customer_name', name:'customer_name'},
              {data:'customer_contact_number', name:'customer_contact_number'},
              {data:'year_warranty', name:'year_warranty'},
              {data:'price', name:'price'},
              {data:'fuel_type', name:'fuel_type'},
              {data:'boiler_type', name:'boiler_type'},
              {data:'convert_combi_boiler', name:'convert_combi_boiler', orderable:false, searchable:false},
              {data:'under_a_carport', name:'under_a_carport', orderable:false, searchable:false},
              {data:'thirty_cm_away_window', name:'thirty_cm_away_window', orderable:false, searchable:false},
              {data:'moving_5_meter', name:'moving_5_meter',  orderable:false, searchable:false},
              {data:'fuel_come_out', name:'fuel_come_out',  orderable:false, searchable:false},
              {data:'pitched_or_flat', name:'pitched_or_flat'},
              {data:'house_live_in', name:'house_live_in'},
              {data:'number_of_bedroom', name:'number_of_bedroom'},
              {data:'number_of_bathroom', name:'number_of_bathroom'},
              {data:'status', name:'status', orderable:false, searchable:false},
            ]
        });

        //=======================================================Order Status Change=======================================================
        $(document).on('click','#todayOrderStatusBtn', function(){
          var order_id = $(this).data('id');
            //alert(order_id);

            $.post('<?= route("today.edit.order.status.details") ?>',{order_id:order_id, _token:'{{csrf_token()}}'}, function(data){
                  //alert(data.details.customer_name);
          
                $('.todayChangeStatus').find('input[name="cid"]').val(data.details.id);
                $('.todayChangeStatus').find('select[name="status"]').val(data.details.status);

                $('.todayChangeStatus').modal('show');
            },'json');

        });

        // =============================================Change state for order==============================================
        $('#today-order-status-change-form').on('submit', function(e){
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
                }else if(data.code !){

                }
                else{
                    $('#today-order-table').DataTable().ajax.reload(null, false);
                    $('.todayChangeStatus').modal('hide');
                    $('.todayChangeStatus').find('form')[0].reset();
                    toastr.success(data.msg);
                }
              }
          });
        });


        //=====================================================Get all Order=============================================
        $('#all-order-table').DataTable({
          processing:false,
          info:true,
          ajax:"{{ route('get.all.order.list')}}",
          "pageLength":5,
          "aLengthMenu":[[5,10,25,50,-1],[5,10,25,50,"All"]],
          columns:[
            // {data:'id', name:'id'},
            // {data:'DT_RowIndex', name:'DT_RowIndex'},
            {data:'customer_name', name:'customer_name'},
            {data:'customer_contact_number', name:'customer_contact_number'},
            {data:'year_warranty', name:'year_warranty'},
            {data:'price', name:'price'},
            {data:'fuel_type', name:'fuel_type'},
            {data:'boiler_type', name:'boiler_type'},
            {data:'convert_combi_boiler', name:'convert_combi_boiler', orderable:false, searchable:false},
            {data:'under_a_carport', name:'under_a_carport', orderable:false, searchable:false},
            {data:'thirty_cm_away_window', name:'thirty_cm_away_window', orderable:false, searchable:false},
            {data:'moving_5_meter', name:'moving_5_meter',  orderable:false, searchable:false},
            {data:'fuel_come_out', name:'fuel_come_out',  orderable:false, searchable:false},
            {data:'pitched_or_flat', name:'pitched_or_flat'},
            {data:'house_live_in', name:'house_live_in'},
            {data:'number_of_bedroom', name:'number_of_bedroom'},
            {data:'number_of_bathroom', name:'number_of_bathroom'},
            {data:'status', name:'status', orderable:false, searchable:false},
            {data:'actions', name:'actions', orderable:false, searchable:false},
          ]
        });


        //=========================================Add current users order====================================================
        $(document).on('click','#customerOrderBtn', function(){
          var order_id = $(this).data('id');
          //alert(appointment_id);

          $.post('<?= route("admin.new.customer.add.order") ?>',{order_id:order_id, _token:'{{csrf_token()}}'}, function(data){
                //alert(data.details.full_name);
                //console.log(data.details.full_name);

                $('.addNewCustomerOrder').find('form')[0].reset();
                $('.addNewCustomerOrder').find('span.error-text').text('');

               $('.addNewCustomerOrder').modal('show');
          },'json');
        });

        // =============================================add current users order==============================================
        $('#add-new-order-form').on('submit', function(e){
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
                  $('#all-order-table').DataTable().ajax.reload(null, false);
                  $('.addNewCustomerOrder').modal('hide');
                  $('.addNewCustomerOrder').find('form')[0].reset();
                  toastr.success(data.msg);
              }
            }
          });
        });



        //===========================================================edit get details==================================================
        $(document).on('click','#editOrderBtn', function(){
          var order_id = $(this).data('id');
          //alert(order_id);

          // $('.editAppointment').find('form')[0].reset();
          // $('.editAppointment').find('span.error-text').text('');

          $.post('<?= route("edit.order.details") ?>',{order_id:order_id, _token:'{{csrf_token()}}'}, function(data){
                //alert(data.details.customer_name);
                //console.log(data.details.customer_name);

              $('.editOrder').find('input[name="cid"]').val(data.details.id);
              $('.editOrder').find('input[name="customer_name"]').val(data.details.customer_name);
              $('.editOrder').find('input[name="customer_contact_number"]').val(data.details.customer_contact_number);
              $('.editOrder').find('select[name="year_warranty"]').val(data.details.year_warranty);
              $('.editOrder').find('select[name="price"]').val(data.details.year_warranty);
              
              $('.editOrder').find('select[name="fuel_type"]').val(data.details.fuel_type);
              $('.editOrder').find('select[name="boiler_type"]').val(data.details.boiler_type);

              $('.editOrder').find('select[name="convert_combi_boiler"]').val(data.details.convert_combi_boiler);
              $('.editOrder').find('select[name="under_a_carport"]').val(data.details.under_a_carport);
              $('.editOrder').find('select[name="thirty_cm_away_window"]').val(data.details.thirty_cm_away_window);
              $('.editOrder').find('select[name="moving_5_meter"]').val(data.details.moving_5_meter);
              $('.editOrder').find('select[name="pitched_or_flat"]').val(data.details.pitched_or_flat);
              
              $('.editOrder').find('select[name="fuel_come_out"]').val(data.details.fuel_come_out);
              $('.editOrder').find('select[name="house_live_in"]').val(data.details.house_live_in);
              $('.editOrder').find('select[name="number_of_bedroom"]').val(data.details.number_of_bedroom);
              $('.editOrder').find('select[name="number_of_bathroom"]').val(data.details.number_of_bathroom);

              $('.editOrder').modal('show');
          },'json');
        });

        // =============================================UPDATE COUNTRY DETAILS==============================================
        $('#update-order-form').on('submit', function(e){
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
                    $('#all-order-table').DataTable().ajax.reload(null, false);
                    $('.editOrder').modal('hide');
                    $('.editOrder').find('form')[0].reset();
                    toastr.success(data.msg);
                }
              }
          });
        });

        //=======================================================DELETE COUNTRY RECORD=======================================================
        $(document).on('click','#deleteOrderBtn', function(){
          var order_id = $(this).data('id');

         // alert(order_id)

          var url = '<?= route("delete.order") ?>';

          Swal.fire({
            title:'Are you sure?',
            html:'You want to <b>delete</b> this order',
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
                $.post(url,{order_id:order_id, _token:'{{csrf_token()}}'}, function(data){
                      if(data.code == 1){
                          $('#all-order-table').DataTable().ajax.reload(null, false);
                          toastr.success(data.msg);
                      }else{
                          toastr.error(data.msg);
                      }
                },'json');
              }
          });
        });

        //=======================================================Order Status Change=======================================================
        $(document).on('click','#orderStatusBtn', function(){
          var order_id = $(this).data('id');
            //alert(appointment_id);

            $.post('<?= route("edit.order.status.details") ?>',{order_id:order_id, _token:'{{csrf_token()}}'}, function(data){
                  //alert(data.details.customer_name);

                $('.orderStatusChange').find('input[name="cid"]').val(data.details.id);
                $('.orderStatusChange').find('select[name="status"]').val(data.details.status);

                $('.orderStatusChange').modal('show');
            },'json');

        });

        // =============================================Change state for order==============================================
        $('#order-status-change-form').on('submit', function(e){
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
                    $('#all-order-table').DataTable().ajax.reload(null, false);
                    $('.orderStatusChange').modal('hide');
                    $('.orderStatusChange').find('form')[0].reset();
                    toastr.success(data.msg);
                }
              }
          });
        });


        //=====================================================Get Order by product=============================================
        $('#all-order-by-product-table').DataTable({
          processing:false,
          info:true,
          ajax:"{{ route('get.order.details')}}",
          "pageLength":5,
          "aLengthMenu":[[5,10,25,50,-1],[5,10,25,50,"All"]],
          columns:[
            // {data:'id', name:'id'},
            // {data:'DT_RowIndex', name:'DT_RowIndex'},
            {data:'customer_name', name:'customer_name'},
            {data:'customer_contact_number', name:'customer_contact_number'},
            {data:'year_warranty', name:'year_warranty'},
            {data:'price', name:'price'},
            {data:'brand_name', name:'brand_name'},
            {data:'model_name', name:'model_name'},
            {data:'type', name:'type'},
            {data:'central_heating_output', name:'central_heating_output'},
            {data:'hot_water_flow_rate', name:'hot_water_flow_rate'},
            // {data:'short_desc', name:'short_desc'},
            {data:'status', name:'status'},
            {data:'actions', name:'actions', orderable:false, searchable:false},
          ]
        });


      });

  </script>
