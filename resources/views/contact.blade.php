	@include('headertop')
                 
    @include('contactpopup')

    @include('quotepopup')

    @include('header')

    <section class="contact-full section-top-space">
    
        <div class="center">
        
            <div class="green-line">
            </div>
        
            <div class="left">

                <h2>Send us an email!</h2>
                <p>Donec eget elit vitae tortor convallis mattis. Aliquam erat volutpat. Integer vitae quam ut leo accumsan consequat eu ac sapien. Quisque tincidunt leo enim, in pulvinar felis consectetur ac.</p>
            
                <form method="post" class="form">

                    <input type="text" name="Name" placeholder="Your name..." class="contact-form-element contact-form-client-name" />
                    <input type="text" name="Phone number" placeholder="Your phone number..." class="contact-form-element last" />
                    <input type="text" name="E-mail" placeholder="Your e-mail..." class="contact-form-element contact-form-client-email" />
                    <input type="text" name="Title" placeholder="E-mail title..." class="contact-form-element contact-form-client-message-title last" />

                    <textarea name="Message" rows="5" cols="5" placeholder="Your message..." class="contact-form-element"></textarea>
                    <button class="button button-navy-blue send-contact" type="button">Send a message! <i class="fa fa-paper-plane-o"></i></button>
                    
                    <div class="contact-form-thanks">
                            
                        <div class="contact-form-thanks-content">
                        
                            Your message has been sent successfully. 
                            <span class="contact-form-thanks-close">Close this notice.</span>
                        
                        </div>
                    
                    </div>    
                                                                         
                </form>
            
            </div>
        
            <div class="right">
            
                <div id="google-map-full" data-lat="37.42565" data-lng="-122.13535" data-zoom-level="12">
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
                    <p class="without-margin-bottom">Aliquam erat volutpat.<br /> Integer vitaequam.</p>
                    
                </div>
                
                <div class="contact-detail-single contact-detail-single-last">
                
                    <h2>(+123) 456 789 000</h2> 
                    <p>Available 8:00am - 4:00pm</p> 
                
                </div>
            
            </div>

        </div>
    
    </section>

    @include('footer')