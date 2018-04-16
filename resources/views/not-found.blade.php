	@include('headertop')
                 
    @include('contactpopup')

    @include('quotepopup')

    @include('header')

    <section class="box-with-image-right section-top-space">
    
        <div class="center">

            <div class="green-line">
            </div>

            <div class="content">

                <h2>Ooops! Nothing found here..</h2>
                
                <p>Sed molestie, eros et tempor eleifend, tortor justo ultricies odio, ut viverra est sem eget augue. Ut volutpat lectus vel arcu euismod.</p>
                <ul>
                
                    <li><a href="/asl/">Home</a></li>
                    
                    <li>
                    
                        <a href="blog">Blog</a>
                        
                    
                    </li>
                    
                    <li><a href="agents">Agents</a></li>
                    
                    <li>
                    
                        <a href="#">Insurances promo</a>
                        <ul>
                        
                            <li><a href="life-insurance">Life insurance</a></li>
                            <li><a href="car-insurance">Car insurance</a></li>
                            <li><a href="house-insuance">House insurance</a></li>
                            <li><a href="travel-insurance">Travel insurance</a></li>
                        
                        </ul>
                    
                    </li>
                    
                    <li><a href="claims">Claims</a></li>
                    <li><a href="contact">Contact</a></li>
                
                </ul>
                
                <p>Etiam id ante est. Aenean pellentesque quam vel purus tincidunt tristique. Integer arcu nibh, tempus id ultricies ut, vulputate nec nunc.</p>
                <form method="get" action="/index.html" class="form">
                
                    <input type="text" placeholder="Type..." />
                    <button class="button button-navy-blue send-phone-call-quote">Search!</button>
                
                </form>

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