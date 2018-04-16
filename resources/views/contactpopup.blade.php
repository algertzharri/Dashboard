<div id="contact-popup">
    
        <div id="contact-popup-background">
        </div>
    
        <div id="contact-popup-content" class="animated speed">

            <div id="contact-popup-close"><i class="fa fa-times"></i></div>

            <div id="google-map" data-lat="37.42565" data-lng="-122.13535" data-zoom-level="12">
            </div>
            
            <div class="padding">

                <i class="fa fa-envelope-o background-icon"></i>
                
                <h3>Contact us</h3>
                <h3 class="right">(+123) 456 789 000</h3>
                
                <h2>Send us an <span>email!</span></h2>
                <form action="contact" method="post" class="form">
					{{ csrf_field() }}
                    <h4>Contact details:</h4>
                    <input type="text" name="fullname" placeholder="Your name..." class="contact-form-element contact-form-client-name" />
                    <input type="text" name="phonenumber" placeholder="Your phone number..." class="contact-form-element last" />
                    <input type="text" name="email" placeholder="Your e-mail..." class="contact-form-element contact-form-client-email" />
                    <input type="text" name="emailtitle" placeholder="E-mail title..." class="contact-form-element contact-form-client-message-title last" />
                    
                    <h4>Message:</h4>
                    <textarea name="mesazhi" rows="5" cols="5" placeholder="Your message..." class="contact-form-element"></textarea>
                    <button class="button button-navy-blue send-contact" type="submit" value="add">Send a message! <i class="fa fa-paper-plane-o"></i></button>      
                             
                    <div class="contact-form-thanks">
                            
                        <div class="contact-form-thanks-content">
                        
                            Your message has been sent successfully. 
                            <span class="contact-form-thanks-close">Close this notice.</span>
                        
                        </div>
                    
                    </div>         
                                                                         
                </form>
            
            </div>
        
        </div>
    
    </div>  