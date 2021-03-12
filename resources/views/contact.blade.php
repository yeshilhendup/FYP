
    @extends('layouts.app')
    @section('content')
      
    <div class="flex-container">

      <div class="flex-child mt-4">
        <h5>Contact Us at:</h5><br>
          <i class="fas fa-phone text-info mx-4">&nbsp;+975-2-322407/325588</i><br><br>
                  
          <i class="fas fa-envelope text-info mx-4">&nbsp;dot@moea.gov.bt</i><br><br>
                
          <i class="fas fa-atlas text-info mx-4">&nbsp;https:/www.moea.gov.bt</i><br><br>
                
          <i class="fab fa-facebook text-info font-weight-bold mx-4">&nbsp;Department-of-Trade</i> 
      </div>
      
      <div class="flex-child mt-4">
        <div  id="footer-widgets" ><div class="inner-wrapper"><div class="footer-active-4 footer-widget-area"><aside id="text-2" class="widget widget_text"><h3 class="widget-title">Office Location</h3>		
          <div class="textwidget"><p>
            <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1769.944201991806!2d89.63394734741007!3d27.47273340722037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e1941a00697d83%3A0x882b6118b900cc7d!2sMinistry+of+Economic+Affairs!5e0!3m2!1sen!2sus!4v1513586270019" width="100%" height="280" frameborder="0" allowfullscreen="">
            </iframe></p>
    </div>
</div>
      </div>
      
    </div>

    <style>

      .flex-container 
      {
           display: flex;
      }

      .flex-child 
      {
          flex: 1;
          border: 2px solid yellow;
      }  

      .flex-child:first-child 
      {
          margin-right: 20px;
      } 
    </style>
    @endsection