	<header>
    
        <div class="center">

            <div class="logo">
            
                <a href="{{ url('/') }}"><img src="public/css/webfiles/_img/logo.png" alt="Insurance Agency" /></a>
            
            </div>
			<nav>
            
                <ul class="menu">
                
                    <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/asl/">Home</a></li>
                    <li><button class="menu-element" data-action="show-quote-popup" data-quote-key="life-insurance">Get a quote</button></li>
                    <li {{{ (Request::is('blog') ? 'class=active' : '') }}} {{{ (Request::is('blog-single') ? 'class=active' : '') }}}><a href="blog">Blog</a></li>
                    
                    <li 
						{{{ (Request::is('agents') ? 'class=active' : '') }}} 
						{{{ (Request::is('life-insurance-quote') ? 'class=active' : '') }}}
						{{{ (Request::is('car-insurance-quote') ? 'class=active' : '') }}}
						{{{ (Request::is('house-insurance-quote') ? 'class=active' : '') }}}
						{{{ (Request::is('travel-insurance-quote') ? 'class=active' : '') }}}
						{{{ (Request::is('claims') ? 'class=active' : '') }}}
						{{{ (Request::is('contact') ? 'class=active' : '') }}}
						{{{ (Request::is('life-insurance') ? 'class=active' : '') }}}
						{{{ (Request::is('car-insurance') ? 'class=active' : '') }}}
						{{{ (Request::is('house-insurance') ? 'class=active' : '') }}}
						{{{ (Request::is('travel-insurance') ? 'class=active' : '') }}}
						{{{ (Request::is('not-found') ? 'class=active' : '') }}}
					
					>
                    
                        <a href="agents">Pages</a>
                        <i class="fa fa-caret-down"></i>
                        
                        <ul class="submenu animated speed fadeInDown">
                        
                            <li><a href="agents">Agents</a></li>
                            
                            <li>

                                <a href="travel-insurance-quote"><i class="fa fa-caret-left"></i> Quote forms</a>
                                <ul class="submenu animated speed fadeInRight">
                                
                                    <li><a href="life-insurance-quote">Life insurance Quote</a></li>
                                    <li><a href="car-insurance-quote">Car insurance Quote</a></li>
                                    <li><a href="house-insurance-quote">House insurance Quote</a></li>
                                    <li><a href="travel-insurance-quote">Travel insurance Quote</a></li>
                                
                                </ul>
                            
                            </li>
                            
                            <li><a href="claims">Claims</a></li>
                            <li><a href="contact">Contact page</a></li>

                            <li>

                                <a href="travel-insurance"><i class="fa fa-caret-left"></i> Insurances promo</a>
                                <ul class="submenu animated speed fadeInRight">
                                
                                    <li><a href="life-insurance">Life insurance</a></li>
                                    <li><a href="car-insurance">Car insurance</a></li>
                                    <li><a href="house-insurance">House insurance</a></li>
                                    <li><a href="travel-insurance">Travel insurance</a></li>
                                
                                </ul>
                            
                            </li>

                            <li><a href="not-found">404 page</a></li>
                        
                        </ul>
                    
                    </li>
                    
                    <li><button class="menu-element" data-action="show-contact-popup">Contact</button></li>
					<li><a href="{{ url('/dashboard') }}">Login to Dashboard</a></li>
					
                </ul>
                
                <div class="menu-responsive"><i class="fa fa-bars"></i></div>
            
            </nav>
			<div class="clear">
            </div>

        </div>

    </header>