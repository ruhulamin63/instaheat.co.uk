
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

         //===========================================================edit get details==================================================
        $(document).on('click','#addBookingBtn', function(){
          var booking_id = $(this).data('id');

          var customer_name = $("#customer_name").val()
          var customer_contact_number = $("#customer_contact_number").val()
          var year_warranty = $("#year_warranty").val()

          if(customer_name && booking_id && customer_contact_number && year_warranty){
           
            $.post('<?= route("boilers.logic.30.booking") ?>',{booking_id:booking_id, customer_name: customer_name, customer_contact_number:customer_contact_number, year_warranty:year_warranty, _token:'{{csrf_token()}}'}, function(data){
                  console.log('post request')    
                //alert(data.details.customer_name);
                    //console.log(data.details.customer_name);

                    $('.booking_from').find('form')[0].reset();
                    $('.booking_from').find('span.error-text').text('');
              },'json');

          }else{
            alert("Empty");
          }

          // alert(booking_id);
          console.log(customer_name);

             
        });

        // =============================================UPDATE COUNTRY DETAILS==============================================
        $('#update-booking-form').on('submit', function(e){
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
                    //$('#all-boiler-table').DataTable().ajax.reload(null, false);
                    // $('.addBooking').modal('hide');
                    // $('.addBooking').find('form')[0].reset();
                    toastr.success(data.msg);
                }
              }
          });
        });

      });

  </script>
