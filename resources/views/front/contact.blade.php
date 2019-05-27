<div id = "contact-page">
<div class="contact-reach-bannner">
    <div class="reach-contact-content">
       <div class="content-wrapper">
            How you can reach <span class="reach-contact-content-sub">Me</span>? 
       </div> 
    </div>
    <div class="contact-form">
        <form id="contactForm" role="contactus" action="{{url('contactussubmission')}}" method="POST">
              {{csrf_field()}}
           <div class="form-input">
            <label for="">Name <span>*</span></label>
            <input type="text" class="inputs" placeholder="Enter Name" name="name">
            <span class="input-bar"></span>
           </div>
           <div class="form-input">
            <label for="">Email <span>*</span></label>
            <input type="email" class="inputs" placeholder="Enter E-mail" name="email" required> 
            <span class="input-bar"></span>
           </div>
          <div class="form-input">
            <label for="">Message <span>*</span></label>  
            <textarea name="message" class="inputs" id="" cols="30" rows="2" placeholder="Enter Message"></textarea>
            <span class="input-bar"></span>
          </div>
           <button type="button" id="Conntactbtn" data-request="ajax-submit" data-target='[role="contactus"]'>Submit</button>
        </form>
    </div>   
</div>
</div>