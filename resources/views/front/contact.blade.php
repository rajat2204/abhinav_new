<div id = "contact-page">
<div class="contact-reach-bannner">
    <div class="reach-contact-content">
       <div class="content-wrapper">
            How you can reach <span class="reach-contact-content-sub">Me</span>? 
       </div> 
    </div>


    <div class="contact-form">
        <div class="message"></div>
        <form id="contactForm" role="contactus" action="{{url('contactussubmission')}}" method="POST">
              {{csrf_field()}}
           <div class="form-input">
            <label for="">Name <span>*</span></label>
            <input type="text" class="inputs name1" placeholder="Enter Name" name="name">
            <span class="input-bar"></span>
           </div>
           <div class="form-input">
            <label for="">Email <span>*</span></label>
            <input type="email" class="inputs email1" placeholder="Enter E-mail" name="email" required> 
            <span class="input-bar"></span>
           </div>
          <div class="form-input">
            <label for="">Message <span>*</span></label>  
            <textarea name="message" class="inputs message1" id="" cols="30" rows="2" placeholder="Enter Message"></textarea>
            <span class="input-bar"></span>
          </div>
           <button type="button" id="Conntactbtn" data-request="ajax-submit" data-target='[role="contactus"]'>Submit</button>
        </form>
    </div>   
</div>
</div>

{{-- @section('requirejs')
<script>
   const btn = document.querySelector("#Conntactbtn").addEventListener("click", (e) => {
    var x =  document.querySelector(".name1").value ;
        y =  document.querySelector(".email1").value;
        z =  document.querySelector(".message1").value; 
     if (x && y && z  != "") {
          messageSubmit('light-green', 'your request is succesfully submitted');
     } 
     e.preventDefault(); 
   })

   const messageSubmit = (color, message) => {
              
      var  log = document.querySelector(".message2");
       
   }
</script>
    
@endsection --}}