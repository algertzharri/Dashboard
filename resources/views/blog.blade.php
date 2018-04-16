	@include('headertop')
                 
    @include('contactpopup')

    @include('quotepopup')

    @include('header')

    <section class="blog section-top-space">

        <i class="fa fa-newspaper-o background-icon"></i>

        <div class="center">
        
            <ul class="recent-news">
            
                <li class="recent-news-single">

                    <img src="public/css/webfiles/_img/image.png" alt="" />
                    <div class="post-data">
                        
                        3 days ago
                        <span class="divider">&middot;</span>
                        by <a href="#">Martanian</a> 
                        <span class="divider">&middot;</span>
                        <a href="#">1 comment</a>
                
                    </div>
                    
                    <h2><a href="{{ url('/blog-single') }}">How to choose best life insurance</a></h2>

                    <p>Mauris hendrerit fringilla ligula, nec congue leo pharetra in. Quisque commodo vehicula justo, tincidunt vehicula elit consequat vel. Nunc gravida erat sed bibendum accumsan.</p>
                    <p>Duis id hendrerit ante, id sagittis quam. Sed aliquet enim ut mi fermentum dignissim. Fusce in dui ut felis facilisis fermentum. Maecenas vitae turpis dignissim diam volutpat venenatis vel in massa. Aliquam mi quam, vulputate vitae orci quis, feugiat volutpat urna.</p>
                    <p><a class="button button-navy-blue" href="{{ url('/blog-single') }}">Read more <i class="fa fa-file-text-o"></i></a></p>

                </li>

                <li class="recent-news-single">
                
                    <img src="public/css/webfiles/_img/image.png" alt="" />
                    <div class="post-data">
                        
                        3 days ago
                        <span class="divider">&middot;</span>
                        by <a href="#">Martanian</a> 
                        <span class="divider">&middot;</span>
                        <a href="#">1 comment</a>
                
                    </div> 
                    
                    <h2><a href="{{ url('/blog-single') }}">Safe travels with family</a></h2>

                    <p>Mauris hendrerit fringilla ligula, nec congue leo pharetra in. Quisque commodo vehicula justo, tincidunt vehicula elit consequat vel. Nunc gravida erat sed bibendum accumsan.</p>
                    <p>Duis id hendrerit ante, id sagittis quam. Sed aliquet enim ut mi fermentum dignissim. Fusce in dui ut felis facilisis fermentum. Maecenas vitae turpis dignissim diam volutpat venenatis vel in massa. Aliquam mi quam, vulputate vitae orci quis, feugiat volutpat urna.</p>
                    <p><a class="button button-navy-blue" href="{{ url('/blog-single') }}">Read more <i class="fa fa-file-text-o"></i></a></p>

                </li>      
                
                <li class="next-prev-posts">
                
                    <p class="left"><a href="#">&laquo; Next posts</a></p>
                    <p class="right"><a href="#">Previous posts &raquo;</a></p>
                
                    <div class="clear">
                    </div>
                 
                </li>
            
            </ul>
            
            <div class="sidebar">

                <div class="widget">
                
                    <h3>Most commented <span>news</span></h3>
                    <ul class="most-commented-news">
                        
                        <li>
                            
                            <a href="{{ url('/blog-single') }}">How to choose best life insurance?</a>
                            <div class="data">1 month ago &middot; 6 comments</div>
                            <div class="line"></div>
                      
                        </li>
                        
                        <li>
                            
                            <a href="{{ url('/blog-single') }}">Safe travels with family</a>
                            <div class="data">1 month ago &middot; 3 comment</div>
                            <div class="line"></div>
                      
                        </li>
                        
                        <li>
                            
                            <a href="{{ url('/blog-single') }}">Thousandth satisfied customer</a>
                            <div class="data">2 months ago &middot; 1 comment</div>
                        
                        </li>
                    
                    </ul>
                
                </div>
                
                <div class="widget">

                    <h3>Popular tags</h3>
                    <div class="tagcloud">
                    
                        <a href="#">Life Insurance</a>
                        <a href="#">Our team</a>
                        <a href="#">Travel</a>
                        <a href="#">Cars</a>
                        <a href="#">Insurance Agency</a>
                        <a href="#">Family</a>
                    
                    </div>
                
                </div>
                
                <div class="widget-call-to-action" style="background-image: url( 'public/css/webfiles/_img/image.png' );">
                
                    <h3>Get a free quote</h3>
                    <div class="textwidget">
                    
                        <p>Justo enim cursus ligula, et tristique dui justo at ligula. Nullam aliquet blandit volutpat. Proin lobortis est non mauris lobortis, non mattis felis congue.</p>
                        <p class="without-margin-bottom"><button class="button button-white" data-action="show-quote-popup" data-quote-key="life-insurance">Get a quote <i class="fa fa-paper-plane-o"></i></button></p>
                    
                    </div>
                
                </div> 
                
                <div class="widget">
                
                    <h3>Archive</h3>
                    <ul>
                    
                        <li><a href="#">May 2018</a></li>
                        <li><a href="#">April 2018</a></li>
                        <li><a href="#">March 2018</a></li>
                        <li><a href="#">February 2018</a></li>
                    
                    </ul>
                
                </div>
                
                <div class="widget">
                
                    <h3>Take care about your family</h3>
                    <div class="textwidget">
                    
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean massa lacus, mattis at ligula quis, sodales facilisis ipsum. Sed pretium, nibh nec gravida tincidunt.</p>
                        <p>Justo enim cursus ligula, et tristique dui justo at ligula. Nullam aliquet blandit volutpat. Proin lobortis est non mauris lobortis, non mattis felis congue.</p>
                    
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
                    <p>Available 8:00am - 4:00pm</p> 
                
                </div>
            
            </div>

        </div>
    
    </section>

    @include('footer')