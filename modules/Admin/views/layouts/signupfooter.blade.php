<script src="{{ URL::asset('assets/js/jquery.min.js')}}" type="text/javascript"></script>

        <script src="{{ URL::asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
      
        <script src="{{ URL::asset('assets/js/jquery.validate.min.js')}}" type="text/javascript"></script>
     
        <script src="{{ URL::asset('assets/js/bootstrap-datepicker.min.js')}}"></script>

      

         <script src="{{ URL::asset('assets/js/components-bootstrap-multiselect.min.js')}}"></script>
        <script src="{{ URL::asset('assets/js/app.min.js')}}"></script>
        

        <script src="{{ URL::asset('assets/js/formValidate.js')}}"></script>


        <script src="{{ URL::asset('assets/js/select2.full.min.js')}}"></script>
        <script src="{{ URL::asset('assets/js/components-select2.min.js')}}"></script>
        

         
        

      <script type="text/javascript">
         $(document).ready(function($) {

            $('.select2-selection').removeClass();
            $('.select2-search__field').css('width','auto');  
            $('.form-group').css('')
            $(".form-control").focus(function(){
            $(this).parent().removeClass("round");
            $(this).parent().addClass("bluebg");
            }).blur(function(){
               $(this).parent().removeClass("bluebg");
               $(this).parent().addClass("round");
            })
            $('.carousel').carousel();

            $('input[type="text"],input[type="password"]').click('on',function(){
               
               var field_name=  $(this).attr('field_name');
                

               var label =  $('label:contains("'+field_name+'")').length;
             
   
               if(label==0){
                  $(this).before('<label>'+field_name+'</label>');
               }
            }); 
         });   
         $("#dateofbday").datepicker({
                 
                      autoclose: true,
                    //  startDate: '-5y',
                      endDate: '+0d' // there's no convenient "right now" notation yet
         }).on('changeDate', function(){

          //$(this).blur();
          // $("#dateofbday").datepicker('hide');
        }); 
           var email_req = "Email is required";
           var password_req = "Password is required";
      </script>
      <script src="{{ URL::asset('assets/js/common.js')}}"></script>
         
   </body>
</html>