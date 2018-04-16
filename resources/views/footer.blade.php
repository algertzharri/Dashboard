<footer>

        <div class="center">

            <div class="green-line">
            </div>
        
            <nav>
        
                <ul class="left">
    
                    <li>
                    
                        <h4>Insurances</h4>  
                        <ul class="sub">
                        
                            <li><a href="{{ url('/life-insurance') }}">Life insurance</a></li>
                            <li><a href="{{ url('/car-insurance') }}">Car insurance</a></li>
                            <li><a href="{{ url('/house-insurance') }}">House insurance</a></li>
                            <li><a href="{{ url('/travel-insurance') }}">Travel insurance</a></li>
                        
                        </ul>
                    
                    </li>
    
                    <li>
                    
                        <h4>Pages</h4>
                        <ul class="sub">
                        
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/agents') }}">Agents</a></li>
                            <li><a href="{{ url('/claims') }}">Claims</a></li>
                            <li><button class="menu-element" data-action="show-quote-popup" data-quote-key="life-insurance">Get a quote</button></li>
                            <li><a href="blog">Blog</a></li>
                            <li><button class="menu-element" data-action="show-contact-popup">Contact</button></li>
                        
                        </ul>
                    
                    </li>
                    
                    <li>
                    
                        <h4>Find us!</h4>
                        <ul class="sub">
                        
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Google+</a></li>
                        
                        </ul>
                    
                    </li>
                    
                </ul>
            
            </nav>
            
            <ul class="right">
            
                <li>Copyright &copy; 2018 <span class="divider">&middot;</span> <a href="{{ url('/') }}">Insurance Agency</a></li>
                <li><div class="fb-like" data-href="https://www.facebook.com/envato" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div></li>
            
            </ul>

            <div class="clear">
            </div>
        
        </div>
    
    </footer>
	 <!--
    facebook SDK
    -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "http://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <script src="public/css/webfiles/_libs/jquery.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="public/css/webfiles/_libs/no-ui-slider/jquery.nouislider.all.min.js"></script>
    <script src="public/css/webfiles/_libs/smoothscroll.js"></script>
    <script src="public/css/webfiles/_libs/parallax.js"></script>
    <script src="public/css/webfiles/_js/functions.js"></script>

</body>
</html>