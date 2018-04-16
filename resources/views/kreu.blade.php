	@include('headertop')
                 
    @include('contactpopup')

    @include('quotepopup')
	
	@include('header')

    <div class="heading">
    
        <div class="heading-slides">
        
            <div class="heading-slide-single" data-slide-id="1" style="background-image: url( 'public/css/webfiles/_img/image.png' );">
            
                <div class="flying-1">
                
                    <span>Insurance agency</span>
                
                </div>
                
                <div class="flying-2">
                
                    <h3>Life insurances<br /> for your family</h3>
                    <p>Curabitur iaculis ante a nibh vulputate sollicitudin.</p>
                    
                    <button class="button button-white" data-action="show-quote-popup" data-quote-key="life-insurance">Get a quote <i class="fa fa-paper-plane-o"></i></button>
                
                </div>
                
                <div class="heading-content">
                    
                    <h2>Insurances do matter</h2>
                    <h3>Lorem ipsum dolor sit<br /> amet, consectetur.</h3>
                    
                    <button class="button button-navy-blue" data-action="show-quote-popup" data-quote-key="life-insurance">Get a quote <i class="fa fa-paper-plane-o"></i></button>
        
                </div>
            
            </div>
            
            <div class="heading-slide-single" data-slide-id="2" style="background-image: url( 'public/css/webfiles/_img/image.png' );">
            
                <div class="flying-1">
                
                    <span>Insurance agency</span>
                
                </div>
                
                <div class="flying-2">
                
                    <h3>Life insurances<br /> for your family</h3>
                    <p>Curabitur iaculis ante a nibh vulputate sollicitudin.</p>
                    
                    <button class="button button-white" data-action="show-quote-popup" data-quote-key="life-insurance">Get a quote <i class="fa fa-paper-plane-o"></i></button>
                
                </div>
                
                <div class="heading-content">
                    
                    <h2>Insurances do matter</h2>
                    <h3>Lorem ipsum dolor sit<br /> amet, consectetur.</h3>
                    
                    <button class="button button-navy-blue" data-action="show-quote-popup" data-quote-key="life-insurance">Get a quote <i class="fa fa-paper-plane-o"></i></button>
        
                </div>
            
            </div>
        
        </div>

    </div>
    
    <section class="call-to-action background">
    
        <div class="center">

            <div class="left">
            
                <h2>Take care of your family</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris hendrerit fringilla ligula, nec congue leo pharetra in. Quisque commodo vehicula justo, tincidunt vehicula elit consequat vel.</p>
                
                <div class="form">
            
                    <div class="call-to-action-thanks">
                    
                        <div class="call-to-action-thanks-content">
                        
                            Thank you, we'll call you soon.
                            <span class="call-to-action-thanks-close">Close this notice.</span>
                        
                        </div>
                    
                    </div>
            
                    <input type="text" name="Phone number" placeholder="Your phone number..." class="phone-number" />
                    <button class="button button-navy-blue send-phone-call-quote">Get a phone call <i class="fa fa-phone"></i></button>
                
                </div>
                    
            </div>
        
            <div class="right">
            
                <div class="circles">

                    <div class="circle-1 circle-pulse">
                    </div>
                    
                    <div class="circle-2 circle-pulse">
                    </div>
                    
                    <div class="circle-3 circle-pulse">
                    </div>
                    
                    <div class="circle-4 circle-pulse">
                    </div>
                    
                    <a href="tel:+123456789000">
                    
                        <div class="circle-center">
                        
                            <div class="circle-center-tip">Call us: <strong>(+123) 456 789 000</strong></div>
                            <i class="fa fa-phone"></i>
                        
                        </div>
                    
                    </a>
                
                </div>
            
            </div>
            
            <div class="clear">
            </div>

        </div>
    
    </section>
    
    <section class="insurances-slider section-gray">
    
        <div class="center">
        
            <div class="green-line">
            </div>
            
            <div class="images">
            
                <div class="image" style="background-image: url( 'public/css/webfiles/_img/image.png' );" data-insurance-key="house">
                </div>
                
                <div class="image" style="background-image: url( 'public/css/webfiles/_img/image.png' );" data-insurance-key="travel">
                </div>
                
                <div class="image" style="background-image: url( 'public/css/webfiles/_img/image.png' );" data-insurance-key="life">
                </div>

                <div class="image" style="background-image: url( 'public/css/webfiles/_img/image.png' );" data-insurance-key="car">
                </div>
            
            </div>
        
            <div class="content">

                <div class="descriptions">

                    <div class="description" data-insurance-key="house">
                    
                        <h3>Get an insurance quote!</h3>
                        <h2>House insurance</h2>
                        
                        <p>Suspendisse potenti. Nullam pharetra sed felis non sodales. Nam eleifend, arcu sed imperdiet euismod, augue eros consequat tortor, ut convallis eros. Aenean a ipsum vel eros elementum efficitur.</p>
                        <button class="button button-navy-blue" data-action="show-quote-popup" data-quote-key="house-insurance">Get a quote <i class="fa fa-paper-plane-o"></i></button>
                    
                    </div>
                    
                    <div class="description" data-insurance-key="travel">
                    
                        <h3>Get an insurance quote!</h3>
                        <h2>Travel insurance</h2>
                        
                        <p>Etiam id ante est. Aenean pellentesque quam vel purus tincidunt tristique. Integer arcu nibh, tempus id ultricies ut, vulputate nec nunc. Etiam elit elit, commodo at interdum sed.</p>
                        <button class="button button-navy-blue" data-action="show-quote-popup" data-quote-key="travel-insurance">Get a quote <i class="fa fa-paper-plane-o"></i></button>
                    
                    </div>
                    
                    <div class="description" data-insurance-key="life">
                    
                        <h3>Get an insurance quote!</h3>
                        <h2>Life insurance</h2>
                        
                        <p>Quisque pharetra lorem quis libero ornare fringilla. Maecenas nisl justo, suscipit vel tortor at, varius auctor erat. Maecenas efficitur felis nec arcu volutpat lacinia.</p>
                        <button class="button button-navy-blue" data-action="show-quote-popup" data-quote-key="life-insurance">Get a quote <i class="fa fa-paper-plane-o"></i></button>
                    
                    </div>

                    <div class="description" data-insurance-key="car">
                    
                        <h3>Get an insurance quote!</h3>
                        <h2>Car insurance</h2>
                        
                        <p>Proin et posuere dolor, a finibus tellus. Phasellus suscipit gravida magna. Nam posuere nisi eu ex sodales, sit amet dictum turpis maximus. Maecenas sodales vehicula tellus, at imperdiet risus.</p>
                        <button class="button button-navy-blue" data-action="show-quote-popup" data-quote-key="car-insurance">Get a quote <i class="fa fa-paper-plane-o"></i></button>
                    
                    </div>

                </div>
                
                <ul class="tabs">
                
                    <li class="active" data-insurance-key="house">
                    
                        <i class="fa fa-home"></i>
                        <span>House insurance</span>
                    
                    </li>
                    
                    <li data-insurance-key="travel">
                    
                        <i class="fa fa-bus"></i>
                        <span>Travel insurance</span>
                    
                    </li>
                    
                    <li data-insurance-key="life">
                    
                        <i class="fa fa-umbrella"></i>
                        <span>Life insurance</span>
                    
                    </li>
                    
                    <li data-insurance-key="car">
                    
                        <i class="fa fa-car"></i>
                        <span>Car insurance</span>
                    
                    </li>

                </ul>
            
            </div>
            
            <div class="clear">
            </div>
        
        </div>
    
    </section>

    <section class="about-us">
    
        <div class="center">
        
            <div class="green-line">
            </div>
        
            <div class="left">
            
                <h3>About us</h3>
                <h2>Meet our insurance agency.</h2>
                
                <p>Curabitur iaculis ante a nibh vulputate sollicitudin. Integer ut tincidunt ligula. Praesent pretium, tellus at elementum ultrices.</p>

                <div class="timeline">
                
                    <div class="timeline-element">
                    
                        <span class="date">March, 2009</span>
                        <p>The establishment of our agency, with two professional insurance agents, in small office in Boston.</p>
                    
                    </div>
                    
                    <div class="timeline-element">
                    
                        <span class="date">December, 2011</span>
                        <p>Three new insurance agents in our team, 2.500 customers!</p>
                    
                    </div>
                    
                    <div class="timeline-element">
                    
                        <span class="date">February, 2014</span>
                        <p>Moving to a new office in Boston. More than 5.000 customers, great references and great view of the future!</p>
                    
                    </div>
                
                </div>

            </div>
        
            <div class="right">
            
                <div class="images-slider">
                
                    <div class="images-slider-change">
                    
                        <div class="images-slider-prev"><i class="fa fa-angle-left"></i></div>
                        <div class="images-slider-next"><i class="fa fa-angle-right"></i></div>
                    
                    </div>
                
                    <div class="images-slider-single" style="background-image: url( 'public/css/webfiles/_img/image.png' );">
                    </div>
                    
                    <div class="images-slider-single" style="background-image: url( 'public/css/webfiles/_img/image.png' );">
                    </div>
                
                </div>
                
            </div>
            
            <div class="clear">
            </div>
        
        </div>
    
    </section>

    <section class="slogan section-gray-top">
    
        <div class="center">
        
            <i class="fa fa-bar-chart-o background-icon"></i>

            <div class="left">
            
                <h3>Our vision</h3>
                <h2>Best insurances for everyone.</h2>
                
                <blockquote>
                
                    <p>Phasellus quis tortor in arcu maximus vehicula. Donec eget elit vitae tortor convallis mattis. Aliquam erat volutpat. Integer vitae quam ut leo accumsan consequat eu ac sapien.</p>
                    <cite>John Doe</cite>
                
                </blockquote>
            
            </div>
            
            <div class="right">
            
                <div class="key-number-values">
                    
                    <div class="single single-top single-left">
                    
                        <span class="number">1294</span>
                        <span class="description">satisfied customers</span>
                    
                    </div>
                    
                    <div class="single single-top single-right">
                    
                        <span class="number">5</span>
                        <span class="description">professional agents</span>
                    
                    </div>
                    
                    <div class="single single-bottom single-left">
                    
                        <span class="number">8</span>
                        <span class="description">insurances in our offer</span>
                    
                    </div>
                    
                    <div class="single single-bottom single-right">
                    
                        <span class="number">12</span>
                        <span class="description">years of experience</span>
                    
                    </div>
                
                </div>
            
            </div>
            
            <div class="clear">
            </div>
        
        </div>
    
    </section>
    
    <section class="image-slogan with-parallax" style="background-image: url( 'public/css/webfiles/_img/image.png' );">
    
        <div class="flying-1">
        
            <span>Take care of your child</span>
        
        </div>
        
        <div class="flying-2">
        
            <h3>Insurances for<br /> your child's future</h3>
            <p>Curabitur iaculis ante a nibh vulputate sollicitudin.</p>

            <button class="button button-white" data-action="show-quote-popup" data-quote-key="life-insurance">Get a quote <i class="fa fa-paper-plane-o"></i></button>
        
        </div>
    
    </section>

    <section class="contact section-gray">
    
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