	@include('headertop')
                 
    @include('contactpopup')

    @include('quotepopup')

    @include('header')

    <section class="box-with-image-right section-top-space">
    
        <div class="center">

            <div class="content">

                <h2>Accident and Health Claims</h2>
                
                <p>Sed molestie, eros et tempor eleifend, tortor justo ultricies odio, ut viverra est sem eget augue. Ut volutpat lectus vel arcu euismod scelerisque. Aliquam sollicitudin aliquet nisl ut faucibus.</p>
                <p>Etiam id ante est. Aenean pellentesque quam vel purus tincidunt tristique. Integer arcu nibh, tempus id ultricies ut, vulputate nec nunc. Etiam elit elit, commodo at interdum sed. Cras accumsan dignissim neque et pulvinar.</p>
                
                <ul class="documents">
                
                    <li class="document document-pdf">
                    
                        <i class="fa fa-file-pdf-o"></i>
                        <a href="#">Accident</a>
                        <span>Document size: 34kb</span>
                    
                        <div class="clear">
                        </div>
                    
                    </li>
                    
                    <li class="document document-pdf">
                    
                        <i class="fa fa-file-pdf-o"></i>
                        <a href="#">Emergency Care</a>
                        <span>Document size: 39kb</span>
                    
                        <div class="clear">
                        </div>
                    
                    </li>
                    
                    <li class="document document-word">
                    
                        <i class="fa fa-file-word-o"></i>
                        <a href="#">Continuation of Disability</a>
                        <span>Document size: 32kb</span>
                    
                        <div class="clear">
                        </div>
                    
                    </li>
                    
                    <li class="document document-excel">
                    
                        <i class="fa fa-file-excel-o"></i>
                        <a href="#">Critical Care</a>
                        <span>Document size: 42kb</span>
                    
                        <div class="clear">
                        </div>
                    
                    </li>
                
                </ul>

            </div>
            
            <div class="image" style="background-image: url( 'public/css/webfiles/_img/image.png' );">
            
                <div class="image-caption">
                
                    <p><strong>Martha Jones</strong></p>
                    <p>Specialist on Relations with Customers</p>
                
                </div>
            
            </div>
            
            <div class="clear">
            </div>
        
        </div>
    
    </section>
    
    <section class="contact contact-gray section-gray">
    
        <div class="center">
        
            <i class="fa fa-envelope-o background-icon"></i>
            <div class="contact-details">

                <div class="contact-detail-single">
                
                    <h3><i class="fa fa-map-marker"></i> Company informations</h3>
                    <p><strong>Insurance Agency</strong><br /> John Doe</p>
                    <p class="without-margin-bottom">5002 Example Street<br /> Los Angeles, CA 90034</p>
                     
                </div>

                <div class="contact-detail-single">
                
                    <h3><i class="fa fa-envelope-o"></i> Contact details</h3>
                    <p>E-mail address: <br /><a href="#">contact@insuranceagency.com</a></p>     
                    <p class="without-margin-bottom"><button class="button button-navy-blue" data-action="show-contact-popup">Contact us! <i class="fa fa-paper-plane-o"></i></button></p>
                
                </div>
                
                <div class="contact-detail-single contact-detail-single-last">
                
                    <h2>(+123) 456 789 000</h2> 
                    <p>Available 8:00am - 4:00pm</p> 
                
                </div>
            
            </div>

        </div>
    
    </section>

    @include('footer')