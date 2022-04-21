
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

          //alert(booking_id)

          var customer_name = $("#customer_name").val()
          var customer_contact_number = $("#customer_contact_number").val()
          var year_warranty = $("#year_warranty").val()


          var item_gas = localStorage.getItem('gas');

          var item_combi = localStorage.getItem('combi');
          var item_standard = localStorage.getItem('standard');
          var item_system = localStorage.getItem('system');
          var item_back_boiler = localStorage.getItem('back-boiler');

          var yes_combi_boiler = localStorage.getItem('yes-combi-boiler');
          var no_combi_boiler = localStorage.getItem('no-combi-boiler');

          var moving_over_yes = localStorage.getItem('moving-over-yes');
          var moving_over_no = localStorage.getItem('moving-over-no');

          var come_out_roof = localStorage.getItem('come-out-roof');
          var come_out_wall = localStorage.getItem('come-out-wall');

          var roof_pitched = localStorage.getItem('roof-pitched');
          var roof_flat = localStorage.getItem('roof-flat');

          var under_a_carport_yes = localStorage.getItem('under-a-carport-yes');
          var under_a_carport_no = localStorage.getItem('under-a-carport-no');

          var from_the_window_yes = localStorage.getItem('from-the-window-yes');
          var from_the_window_no = localStorage.getItem('from-the-window-no');

          var you_live_in_flat = localStorage.getItem('you-live-in-flat');
          var you_live_in_bungalow = localStorage.getItem('you-live-in-bungalow');
          var you_live_in_terrace = localStorage.getItem('you-live-in-terrace');
          var you_live_in_semi_detatched = localStorage.getItem('you-live-in-semi-detatched');
          var you_live_in_detatched = localStorage.getItem('you-live-in-detatched');

          var bedroom_one = localStorage.getItem('number-of-bedroom-one');
          var bedroom_two = localStorage.getItem('number-of-bedroom-two');
          var bedroom_three = localStorage.getItem('number-of-bedroom-three');
          var bedroom_four = localStorage.getItem('number-of-bedroom-four');
          var bedroom_five_plus = localStorage.getItem('number-of-bedroom-five-plus');

          var bathroom_one = localStorage.getItem('bathroom-one');
          var bathroom_two = localStorage.getItem('bathroom-two');
          var bathroom_three_plus = localStorage.getItem('bathroom-three-plus');

          if(customer_name && booking_id && customer_contact_number && year_warranty){
            
            $.post('<?= route("boilers.logic.30.booking") ?>',
              {booking_id:booking_id, customer_name: customer_name, customer_contact_number:customer_contact_number,year_warranty:year_warranty, 
              item_gas:item_gas,
              item_combi:item_combi, item_standard:item_standard, item_system:item_system, item_back_boiler:item_back_boiler,
              yes_combi_boiler:yes_combi_boiler, no_combi_boiler:no_combi_boiler, moving_over_yes:moving_over_yes, moving_over_no:moving_over_no, 
              come_out_roof:come_out_roof, come_out_wall:come_out_wall, roof_pitched:roof_pitched, roof_flat:roof_flat,
              under_a_carport_yes:under_a_carport_yes, under_a_carport_no:under_a_carport_no, 
              from_the_window_yes:from_the_window_yes, from_the_window_no:from_the_window_no,
              you_live_in_flat:you_live_in_flat, 
              you_live_in_bungalow:you_live_in_bungalow, you_live_in_terrace:you_live_in_terrace, you_live_in_semi_detatched:you_live_in_semi_detatched, you_live_in_detatched:you_live_in_detatched,
              bedroom_one:bedroom_one, bedroom_two:bedroom_two, bedroom_three:bedroom_three, bedroom_four:bedroom_four, bedroom_five_plus:bedroom_five_plus,
              bathroom_one:bathroom_one, bathroom_two:bathroom_two, bathroom_three_plus:bathroom_three_plus,
              _token:'{{csrf_token()}}'}, function(data){
                

              //data.preventDefault();
              $.ajax({
                success: function(data){
                  if(data.code == 0){
                      $.each(data.error, function(prefix, val){
                          $(form).find('span.'+prefix+'_error').text(val[0]);
                      });
                  }else{
                      toastr.success(data.msg);
                      //window.location.reload();
                      setTimeout(function(){
                        window.location.reload(1);
                      }, 5000);
                  }
                }
              });
              
            },'json');

          }
          else{
            alert("Empty submit not allow !");
          }
             
        });


      });

  </script>

