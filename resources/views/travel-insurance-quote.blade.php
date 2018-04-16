	@include('headertop')
                 
    @include('contactpopup')

    @include('quotepopup')

    @include('header')

    <section class="quote-forms section-top-space section-gray">

        <div class="center">

            <div class="quote-form-background" style="background-image: url( 'public/css/webfiles/_img/image.png' );">
            </div>
            
            <div class="quote-form-content">

                <h2>Travel Insurance <span>Quote</span></h2>
                <div class="form">

                    <h4>Level of protection: <span class="slider-value quote-form-element" data-name="Level of protection" data-slider-id="travel-protection-level">$<span></span></span></h4>
                    <div class="slider" data-slider-min="10000" data-slider-max="1000000" data-slider-start="200000" data-slider-step="10000" data-slider-id="travel-protection-level"></div>

                    <h4>Contact details:</h4>
                    <input type="text" class="quote-form-element quote-form-client-name" name="Full name" placeholder="Full Name..." />
                    
                    <span class="custom-dropdown last">
                    
                        <select name="How many persons?" class="custom-dropdown-select quote-form-element">
                        
                            <option value="-">How many persons?</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        
                        </select>
                    
                    </span>
                    
                    <input type="text" name="Phone Number" placeholder="Phone Number..." class="quote-form-element" />
                    <input type="text" name="E-mail Address" placeholder="E-mail Address..." class="quote-form-element quote-form-client-email last" />
                    
                    <h4>Travel:</h4>
                    <input type="text" name="Destination" placeholder="Destination..." class="quote-form-element" />
                    
                    <span class="custom-dropdown last">
                        
                        <select name="How long?" class="custom-dropdown-select quote-form-element">

                            <option value="-">How long?</option>
                            <option value="less than 1 week">less than 1 week</option>
                            <option value="1 week">1 week</option>
                            <option value="2 weeks">2 weeks</option>
                            <option value="3 weeks">3 weeks</option>
                            <option value="4 weeks and more">4 weeks and more</option>

                        </select>

                    </span>

                    <button class="button button-navy-blue send-quote" type="button">Get a quote <i class="fa fa-paper-plane-o"></i></button>
                    
                    <div class="quote-form-thanks">
                    
                        <div class="quote-form-thanks-content">
                        
                            Your insurance quote has been sent successfully. 
                            <span class="quote-form-thanks-close">Close this notice.</span>
                        
                        </div>
                    
                    </div>
                
                </div>

            </div>
            
            <div class="clear">
            </div>

        </div>

    </section>

    <section class="double-content">
    
        <div class="center">
        
            <div class="green-line">
            </div>

            <div class="content-left">

                <h2>Important documents</h2>
                
                <p>Etiam elit elit, commodo at interdum sed. Cras accumsan dignissim neque et pulvinar. In finibus vitae tellus at scelerisque. Etiam facilisis purus nec sem ultricies commodo.</p>
                <p class="without-margin-bottom">Etiam id ante est. Aenean pellentesque quam vel purus tincidunt tristique. Integer arcu nibh, tempus id ultricies ut, vulputate nec nunc.</p>

            </div>
            
            <div class="content-right">

                <ul class="documents without-margin-bottom">
                
                    <li class="document document-pdf">
                    
                        <i class="fa fa-file-pdf-o"></i>
                        <a href="#">General Insurance Conditions</a>
                        <span>Document size: 34kb</span>
                    
                        <div class="clear">
                        </div>
                    
                    </li>
                    
                    <li class="document document-pdf">
                    
                        <i class="fa fa-file-pdf-o"></i>
                        <a href="#">Offer details</a>
                        <span>Document size: 34kb</span>
                    
                        <div class="clear">
                        </div>
                    
                    </li>
                    
                    <li class="document document-excel">
                    
                        <i class="fa fa-file-excel-o"></i>
                        <a href="#">Health Form</a>
                        <span>Document size: 41kb</span>
                    
                        <div class="clear">
                        </div>
                    
                    </li>
                
                </ul>

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
                    <p class="without-margin-bottom">Available 8:00am - 4:00pm</p> 
                
                </div>
            
            </div>

        </div>
    
    </section>

    @include('footer')