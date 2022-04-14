
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    
    <script>

        // $(document).ready(function(){
        //     $('.radio-custom-button-gas').click(function(){
        //       //  console.log($(this).val());
        //         localStorage.setItem('step-1',$(this).val());
        //         //localStorage.setItem('step-2',$(this).val());

        //         // const set_val = [
        //         //     'red','green','blue'
        //         // ];
        //         // localStorage.setItem('get_array', JSON.stringify(set_val));
        //         // const array_list = JSON.parse(localStorage.getItem('get_array'));

        //         // console.log(array_list);


        //         var stp = localStorage.getItem('step-1');

        //         if(stp == 'Gas'){
        //             //here will code
        //             $('#div2').removeClass('step-one')
        //             $('#div1').addClass('step-one')
        //             console.log("paici");
        //         }
        //     });

        //     $('.reset-button').click(function(){
        //       localStorage.clear();
        //     });
        // });



                //==========================================================

                let arr=[]

                // we are making an todo list function

                // document.getElementById("Which-type-of-fuel-does-your-boiler-use").onclick=(e)=>{


                //     let item=document.getElementById("Gas").value
                //     arr.push(item)
                //     //break

                //     localStorage.setItem("test",JSON.stringify(arr))

                //     // 

                //     // console.log(getitem)

                //     e.preventDefault()
                // }


        //==================gas=================
        $(document).ready(function(){
            $('#Gas').click(function(){
                $('#Which-type-of-boiler').removeClass('step-one')
                $('#Which-type-of-fuel-does-your-boiler-use').addClass('step-one')

                let item=document.getElementById("Gas").value
                arr.push(item)
                    //break

                //localStorage.setItem("test",JSON.stringify(arr))
            });
        });

         //==================ten=================
        $(document).ready(function(){
            $('#Electricity').click(function(){
                $('#givecall').removeClass('step-ten')
                $('#Which-type-of-fuel-does-your-boiler-use').addClass('step-one')
            });

            $('.reset-cta').click(function(){
              localStorage.clear();
            });
        });

         //==================ten=================
        $(document).ready(function(){
            $('#LPG').click(function(){
                $('#givecall').removeClass('step-ten')
                $('#Which-type-of-fuel-does-your-boiler-use').addClass('step-one')
            });

            $('.reset-cta').click(function(){
              localStorage.clear();
            });
        });

        //==================ten=================
        $(document).ready(function(){
            $('#Oil').click(function(){
                $('#givecall').removeClass('step-ten')
                $('#Which-type-of-fuel-does-your-boiler-use').addClass('step-one')
            });

            $('.reset-cta').click(function(){
              localStorage.clear();
            });
        });



        //==================combi=================
        $(document).ready(function(){
            $('#Combi').click(function(){
                $('#Do-you-want-your-boiler-moving-over-5-metres').removeClass('step-three')
                $('#Which-type-of-boiler').addClass('step-one')

                let item=document.getElementById("Combi").value
                arr.push(item)
            });
        });

        //==================standard=================
        $(document).ready(function(){
            $('#Standard').click(function(){
                $('#Would-you-like-to-convert-to-a-combi-boiler').removeClass('step-four')
                $('#Which-type-of-boiler').addClass('step-one')

                let item=document.getElementById("Standard").value
                arr.push(item)
            });
            // console.log('test');
        });

        //==================system=================
        $(document).ready(function(){
            $('#System').click(function(){
                $('#Would-you-like-to-convert-to-a-combi-boiler').removeClass('step-four')
                $('#Which-type-of-boiler').addClass('step-one')

                let item=document.getElementById("System").value
                arr.push(item)
            });
        });

          //==================back-boiler=================
          $(document).ready(function(){
            $('#Back-boiler').click(function(){
                $('#Would-you-like-to-convert-to-a-combi-boiler').removeClass('step-four')
                $('#Which-type-of-boiler').addClass('step-one')

                let item=document.getElementById("Back-boiler").value
                arr.push(item)
            });
        });

        //==============combi-boiler yes/no=========
        $(document).ready(function(){
            $('#Yes-combi-boiler').click(function(){
                $('#Do-you-want-your-boiler-moving-over-5-metres').removeClass('step-three')
                $('#Would-you-like-to-convert-to-a-combi-boiler').addClass('step-four')
            
                //console.log('test');

                let item=document.getElementById("Yes-combi-boiler").value
                arr.push(item)
            });
        });
         
        $(document).ready(function(){
            $('#No-combi-boiler').click(function(){
                $('#Do-you-want-your-boiler-moving-over-5-metres').removeClass('step-three')
                $('#Would-you-like-to-convert-to-a-combi-boiler').addClass('step-four')

                //console.log('test');

                let item=document.getElementById("No-combi-boiler").value
                arr.push(item)
            });
        });


        //==================moving over 5 meter=================
        $(document).ready(function(){
            $('#moving-over-yes').click(function(){
                $('#Where-does-your-flue-come-out').removeClass('step-five')
                $('#Do-you-want-your-boiler-moving-over-5-metres').addClass('step-three')

                let item=document.getElementById("moving-over-yes").value
                arr.push(item)

                //localStorage.setItem("test",JSON.stringify(arr))
            });
        });

        //==================moving over 5 meter=================
        $(document).ready(function(){
            $('#moving-over-no').click(function(){
                $('#Where-does-your-flue-come-out').removeClass('step-five')
                $('#Do-you-want-your-boiler-moving-over-5-metres').addClass('step-three')

                let item=document.getElementById("moving-over-no").value
                arr.push(item)
            });
        });

        //==================roof=================
        $(document).ready(function(){
            $('#come-out-roof').click(function(){
                $('#Is-the-roof-pitched-or-flat').removeClass('step-six')
                $('#Where-does-your-flue-come-out').addClass('step-five')

                let item=document.getElementById("come-out-roof").value
                arr.push(item)
            });
        });
        //==================flue come out wall=================
        $(document).ready(function(){
            $('#come-out-wall').click(function(){
                $('#Is-the-flue-under-a-carport').removeClass('step-eleven')
                $('#Where-does-your-flue-come-out').addClass('step-five')

                let item=document.getElementById("come-out-wall").value
                arr.push(item)
            });
        });

        //==================roof pictched=================
        $(document).ready(function(){
            $('#roof-pitched').click(function(){
                $('#Which-type-of-house-do-you-live-in').removeClass('step-seven')
                $('#Is-the-roof-pitched-or-flat').addClass('step-six')

                let item=document.getElementById("roof-pitched").value
                arr.push(item)
            });
        });
        //==================roof-flat=================
        $(document).ready(function(){
            $('#roof-flat').click(function(){
                $('#Which-type-of-house-do-you-live-in').removeClass('step-seven')
                $('#Is-the-roof-pitched-or-flat').addClass('step-six')

                let item=document.getElementById("roof-flat").value
                arr.push(item)
            });
        });

      

        //==================Is-the-flue-under-a-carport=================
        $(document).ready(function(){
            $('#under-a-carport-yes').click(function(){
                $('#Is-the-flue-thirty-away-from-the-window').removeClass('step-twelve')
                $('#Is-the-flue-under-a-carport').addClass('step-eleven')

                let item=document.getElementById("under-a-carport-yes").value
                arr.push(item)
            });
        });

        //==================Is-the-flue-under-a-carport=================
        $(document).ready(function(){
            $('#under-a-carport-no').click(function(){
                $('#Is-the-flue-thirty-away-from-the-window').removeClass('step-twelve')
                $('#Is-the-flue-under-a-carport').addClass('step-eleven')

                let item=document.getElementById("under-a-carport-no").value
                arr.push(item)
            });
        });



        //==================house live in=================
        $(document).ready(function(){
            $('#you-live-in-Flat').click(function(){
                $('#How-many-bedrooms').removeClass('step-eight')
                $('#Which-type-of-house-do-you-live-in').addClass('step-seven')

                let item=document.getElementById("you-live-in-Flat").value
                arr.push(item)
            });
        });

        //==================house live in=================
         $(document).ready(function(){
            $('#you-live-in-Bungalow').click(function(){
                $('#How-many-bedrooms').removeClass('step-eight')
                $('#Which-type-of-house-do-you-live-in').addClass('step-seven')

                let item=document.getElementById("you-live-in-Bungalow").value
                arr.push(item)
            });
        });

        //==================house live in=================
         $(document).ready(function(){
            $('#you-live-in-Terrace').click(function(){
                $('#How-many-bedrooms').removeClass('step-eight')
                $('#Which-type-of-house-do-you-live-in').addClass('step-seven')

                let item=document.getElementById("you-live-in-Terrace").value
                arr.push(item)
            });
        });

        //==================house live in=================
         $(document).ready(function(){
            $('#you-live-in-Semi-detatched').click(function(){
                $('#How-many-bedrooms').removeClass('step-eight')
                $('#Which-type-of-house-do-you-live-in').addClass('step-seven')

                let item=document.getElementById("you-live-in-Semi-detatched").value
                arr.push(item)
            });
        });

        //==================house live in=================
         $(document).ready(function(){
            $('#you-live-in-Detatched').click(function(){
                $('#How-many-bedrooms').removeClass('step-eight')
                $('#Which-type-of-house-do-you-live-in').addClass('step-seven')

                let item=document.getElementById("you-live-in-Detatched").value
                arr.push(item)
            });
            //console.log('test')
        });



        //==================Is-the-flue-thirty-away-from-the-window=================
         $(document).ready(function(){
            $('#from-the-window-Yes').click(function(){
                $('#Which-type-of-house-do-you-live-in').removeClass('step-seven')
                $('#Is-the-flue-thirty-away-from-the-window').addClass('step-twelve')

                let item=document.getElementById("from-the-window-Yes").value
                arr.push(item)
            });
            //console.log('test')
        });
        //==================house live in=================
         $(document).ready(function(){
            $('#from-the-window-No').click(function(){
                $('#Which-type-of-house-do-you-live-in').removeClass('step-seven')
                $('#Is-the-flue-thirty-away-from-the-window').addClass('step-twelve')

                let item=document.getElementById("from-the-window-No").value
                arr.push(item)
            });
            //console.log('test')
        });




        // //==================How many bedrooms=================
        $(document).ready(function(){
            $('#bedroom-one').click(function(){
                $('#How-many-bathrooms').removeClass('step-nine')
                $('#How-many-bedrooms').addClass('step-eight')

                let item=document.getElementById("bedroom-one").value
                arr.push(item)
            });
        });

        $(document).ready(function(){
            $('#bedroom-two').click(function(){
                $('#How-many-bathrooms').removeClass('step-nine')
                $('#How-many-bedrooms').addClass('step-eight')

                let item=document.getElementById("bedroom-two").value
                arr.push(item)
            });
        });

        $(document).ready(function(){
            $('#bedroom-three').click(function(){
                $('#How-many-bathrooms').removeClass('step-nine')
                $('#How-many-bedrooms').addClass('step-eight')

                let item=document.getElementById("bedroom-three").value
                arr.push(item)
            });
        });

        $(document).ready(function(){
            $('#bedroom-four').click(function(){
                $('#How-many-bathrooms').removeClass('step-nine')
                $('#How-many-bedrooms').addClass('step-eight')

                let item=document.getElementById("bedroom-four").value
                arr.push(item)
            });
        });

        $(document).ready(function(){
            $('#bedroom-five-plus').click(function(){
                $('#How-many-bathrooms').removeClass('step-nine')
                $('#How-many-bedrooms').addClass('step-eight')

                let item=document.getElementById("bedroom-five-plus").value
                arr.push(item)
            });
        });


        // //==================How many badthroom=================
        $(document).ready(function(){
            $('#bathroom-one').click(function(){
                $('#boiler-list').removeClass('final-step')
                $('#How-many-bathrooms').addClass('step-nine')

                let item=document.getElementById("bathroom-one").value
                arr.push(item)

                localStorage.setItem("test",JSON.stringify(arr))
            });

            $('.reset-cta').click(function(){
              localStorage.clear();
            });
        });

        $(document).ready(function(){
            $('#bathroom-two').click(function(){
                $('#boiler-list').removeClass('final-step')
                $('#How-many-bathrooms').addClass('step-nine')

                let item=document.getElementById("bathroom-two").value
                arr.push(item)

                localStorage.setItem("test",JSON.stringify(arr))
            });

            $('.reset-cta').click(function(){
              localStorage.clear();
            });
        });


        // //==============boiler list======================
        $(document).ready(function(){
            $('#bathroom-three-plus').click(function(){
                $('#boiler-list').removeClass('final-step')
                $('#How-many-bathrooms').addClass('step-nine')

                let item=document.getElementById("bathroom-three-plus").value
                arr.push(item)

                localStorage.setItem("test",JSON.stringify(arr))
            });

            $('.reset-cta').click(function(){
              localStorage.clear();
            });
        });

    </script>

    <script>
        localStorage.setItem('get_array_list', JSON.stringify('test'));
        const array_list = JSON.parse(localStorage.getItem('get_array_list'));

        console.log(array_list);
    </script>

    <script src="{{ asset('jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('datatable/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('toastr/toastr.min.js') }}"></script>