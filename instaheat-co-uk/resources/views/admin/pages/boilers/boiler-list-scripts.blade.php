
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


      });

  </script>
