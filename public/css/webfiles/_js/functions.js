$( document ).ready( function() {

   /**
    *
    * strict mode
    * 
    */               

    'use strict';
    
   /**
    *
    * global variables
    *
    */                
    
    var windowWidth = 0;
    var windowHeight = 0;
    
   /**
    *
    * actions after window load
    * 
    */                
    
    $( window ).load( function() {
    
       /**
        *
        * window width
        *
        */            
        
        windowWidth = $( window ).width();  
        
       /**
        *
        * window height
        * 
        */
        
        windowHeight = $( window ).height();                                                 
       
       /**
        *
        * configure agents slider
        *
        */
        
        $.martanianConfigureAgentsSlider(); 
        
       /**
        *
        * configure value slider
        *
        */
        
        $.martanianConfigureValueSlider(); 
       
       /**
        *
        * manage images
        *
        */             
        
        $.martanianManageImages();
        
       /**
        *
        * configure image slider
        *
        */                      
        
        $.martanianConfigureImageSlider();   
        
       /**
        *
        * configure insurance slider
        * 
        */
        
        $.martanianConfigureInsuranceSlider();                                       
        
       /**
        *
        * heading slider
        *               
        */              
        
        $.martanianHeadingSlider();  
        
       /**
        *
        * references
        * 
        */
        
        $.martanianManageReferences();    
        
       /**
        *
        * numbers highlighter
        *
        */
        
        $.martanianNumbersHighlighter();   
        
       /**
        *
        * autoloaded progress bars
        *
        */
        
        $.martanianProgressBarsAutoload();  
        
       /**
        *
        * configure tabs section
        *
        */
        
        $.martanianConfigureTabsSection();

       /**
        *
        * set parallax
        *
        */            
        
        $.martanianSetParallax();  

       /**
        *
        * load google map, if exists
        * 
        */                               
    
        var elementA = $( '#google-map' );                                                 
        if( typeof elementA[0] != 'undefined' && elementA[0] != '' ) {
        
            $.martanianGoogleMapInit();
        };
        
       /**
        *
        * load bigger google map, if exists
        * 
        */                               
    
        var elementB = $( '#google-map-full' );                                                 
        if( typeof elementB[0] != 'undefined' && elementB[0] != '' ) {
        
            $.martanianGoogleBigMapInit();
        }; 
        
       /**
        *
        * delete loader
        *
        */             
        
        $( '#loader' ).animate({ 'opacity': 0 }, 300 );
        setTimeout( function() {
        
            $( '#loader' ).remove();
        
        }, 600 );                   
        
       /**
        *
        * end of actions
        * 
        */                                
    
    });
    
   /**
    *
    * actions after window resize
    * 
    */
    
    $( window ).resize( function() {
    
       /**
        *
        * window width
        *
        */            
        
        windowWidth = $( window ).width();    
        
       /**
        *
        * window height
        * 
        */
        
        windowHeight = $( window ).height();                
       
       /**
        *
        * manage images
        *
        */             
        
        $.martanianManageImages();   
        
       /**
        *
        * manage references
        *        
        */ 
        
        $.martanianManageReferences(); 
        
       /**
        *
        * configure tabs section
        *
        */
        
        $.martanianResizeTabsSection();  
        
       /**
        *
        * resize manager
        *        
        */                                                                              
        
        $.martanianResizeManager();
        
       /**
        *
        * set parallax
        *
        */            
        
        $.martanianSetParallax();

       /**
        *
        * show menu, if hidden
        *
        */                    
        
        if( windowWidth > 932 ) {
                  
            $( 'header .menu' ).show();
            $( 'header .menu' ).find( 'ul.submenu' ).addClass( 'animated' );
        }        
        
        else {
        
            $( 'header .menu' ).hide();
            $( 'header .menu' ).find( 'ul.submenu' ).removeClass( 'animated' );
        }   
        
       /**
        *
        * end of actions
        * 
        */                                
    
    });                 
    
   /**
    *
    * initialize google map function
    * 
    */                

    $.martanianGoogleMapInit = function() {

        var lat = $( '#google-map' ).data( 'lat' );
        var lng = $( '#google-map' ).data( 'lng' );
        var zoom_level = $( '#google-map' ).data( 'zoom-level' );

        var map_center = new google.maps.LatLng( lat, lng );

        var mapOptions = {
        
            zoom: zoom_level,
            center: map_center,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false
        }
      
        var map = new google.maps.Map( document.getElementById( 'google-map' ), mapOptions );

        var beachMarker = new google.maps.Marker({
            
            position: new google.maps.LatLng( lat, lng ),
            map: map,
        });
        
    };
    
   /**
    *
    * initialize biggest google map function
    * 
    */                

    $.martanianGoogleBigMapInit = function() {

        var lat = $( '#google-map-full' ).data( 'lat' );
        var lng = $( '#google-map-full' ).data( 'lng' );
        var zoom_level = $( '#google-map-full' ).data( 'zoom-level' );

        var map_center = new google.maps.LatLng( lat, lng );
        var mapOptions = {
        
            zoom: zoom_level,
            center: map_center,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false
        }
      
        var map = new google.maps.Map( document.getElementById( 'google-map-full' ), mapOptions );

        var beachMarker = new google.maps.Marker({
            
            position: new google.maps.LatLng( lat, lng ),
            map: map,
        });
        
    }; 
    
   /**
    *
    * show contact form popup
    *
    */                
    
    $.martanianShowContactPopup = function() {
    
        var mode = windowWidth > 932 && windowHeight > 670 ? 'fixed' : 'absolute';
    
        $( '#contact-popup #contact-popup-background' ).fadeIn( 300 );
        if( mode == 'absolute' ) $( 'html, body' ).animate({ 'scrollTop': '0' }, 300 );
        
        setTimeout( function() {
        
            if( mode == 'fixed' ) $( '#contact-popup #contact-popup-content' ).addClass( 'bounceInDown' ).css({ 'top': '50%', 'position': 'fixed' });
            else $( '#contact-popup #contact-popup-content' ).addClass( 'bounceInDown' ).css({ 'top': '50px', 'marginTop': '0px', 'position': 'absolute' });
        
        }, 300 );
    
    };
    
   /**
    *
    * hide contact form popup
    * 
    */                
    
    $.martanianHideContactPopup = function() {
    
        $( '#contact-popup #contact-popup-content' ).removeClass( 'bounceInDown' ).addClass( 'bounceOutUp' );
        setTimeout( function() {
        
            $( '#contact-popup #contact-popup-background' ).fadeOut( 300 );
            $( '#contact-popup #contact-popup-content' ).css({ 'top': '-10000px' }).removeClass( 'bounceOutUp' );
        
        }, 300 );
    
    };
    
   /**
    *
    * hooks to show contact form popup
    *
    */
    
    $( '*[data-action="show-contact-popup"]' ).click( function() {
    
        $.martanianShowContactPopup();
    
    }); 
    
   /**
    *
    * hooks to hide contact form popup
    *
    */
    
    $( '#contact-popup-close' ).click( function() {
    
        $.martanianHideContactPopup();
    
    });     
    
   /**
    *
    * show quote form popup
    *
    */                
    
    $.martanianShowQuotePopup = function( type ) {    

        var mode = windowWidth > 932 && windowHeight > 670 ? 'fixed' : 'absolute';
        var selectedQuoteForm = $( '#quote-popup #quote-popup-content .quote-form[data-quote-form-for="'+ type +'"]' );

        $( '#quote-popup #quote-popup-background' ).fadeIn( 300 );
        $( '#quote-popup #quote-popup-content #quote-popup-tabs li[data-quote-tab-for="'+ type +'"]' ).addClass( 'active' );

        if( mode == 'absolute' ) $( 'html, body' ).animate({ 'scrollTop': '0' }, 300 );

        selectedQuoteForm.show();
        setTimeout( function() {

            if( mode == 'fixed' ) {

                selectedQuoteForm.children( '.quote-form-background' ).css({ 'height': selectedQuoteForm.height() });
                $( '#quote-popup #quote-popup-content' ).addClass( 'bounceInDown' ).css({ 'top': '50%', 'marginTop': - ( selectedQuoteForm.height() / 2 ), 'height': selectedQuoteForm.height(), 'position': 'fixed' });
            }
            
            else if( mode == 'absolute' ) {

                if( windowWidth > 932 ) {
                
                    $( '#quote-popup #quote-popup-content' ).addClass( 'bounceInDown' ).css({ 'top': '50px', 'marginTop': '0px', 'height': selectedQuoteForm.height(), 'position': 'absolute' });
                    selectedQuoteForm.children( '.quote-form-background' ).css({ 'height': selectedQuoteForm.height() });
                }
                
                else {
                    
                    if( windowWidth > 582 ) $( '#quote-popup #quote-popup-content' ).addClass( 'bounceInDown' ).css({ 'top': '50px', 'marginTop': '0px', 'height': selectedQuoteForm.height(), 'position': 'absolute' });
                    else {
                    
                        $( '#quote-popup #quote-popup-content' ).addClass( 'bounceInDown' ).css({ 'top': '50px', 'marginTop': '0px', 'height': selectedQuoteForm.height() + $( '#quote-popup-tabs' ).height() + 50, 'position': 'absolute' });
                    }
                }
            }
             
        }, 300 );
    
    };
   
   /**
    *
    * hide quote form popup
    * 
    */                
    
    $.martanianHideQuotePopup = function() {
    
        $( '#quote-popup #quote-popup-content' ).removeClass( 'bounceInDown' ).addClass( 'bounceOutUp' );
        setTimeout( function() {
        
            $( '#quote-popup #quote-popup-background' ).fadeOut( 300 );
            $( '#quote-popup #quote-popup-content' ).css({ 'top': '-10000px' }).removeClass( 'bounceOutUp' );
            $( '#quote-popup #quote-popup-content .quote-form' ).hide();
            $( '#quote-popup #quote-popup-content #quote-popup-tabs li' ).removeClass( 'active' );
        
        }, 300 );
    
    };
    
   /**
    *
    * change quote form in popup
    *
    */                
    
    $( '#quote-popup-tabs li' ).click( function() {
                  
        if( !$( this ).hasClass( 'active' ) ) {
        
            var type = $( this ).data( 'quote-tab-for' );
            var mode = windowWidth > 932 && windowHeight > 670 ? 'fixed' : 'absolute';
            var newQuoteForm = $( '#quote-popup #quote-popup-content .quote-form[data-quote-form-for="'+ type +'"]' );
            
            $( '#quote-popup #quote-popup-content #quote-popup-tabs li' ).removeClass( 'active' );
            $( this ).addClass( 'active' );
            
            $( '#quote-popup #quote-popup-content .quote-form' ).fadeOut( 300 );
            
            if( mode == 'fixed' || windowWidth > 932 ) newQuoteForm.children( '.quote-form-background' ).animate({ 'height': newQuoteForm.height() }, 300 );
            
            setTimeout( function() {

                $( '#quote-popup #quote-popup-content .quote-form' ).hide();
                newQuoteForm.fadeIn( 300 );

                if( mode == 'fixed' ) $( '#quote-popup #quote-popup-content' ).animate({ 'height': newQuoteForm.height(), 'marginTop': - ( newQuoteForm.height() / 2 ) }, 300 );
                else {
                
                    if( windowWidth > 582 ) $( '#quote-popup #quote-popup-content' ).animate({ 'height': newQuoteForm.height() }, 300 );
                    else {
                    
                        $( '#quote-popup #quote-popup-content' ).animate({ 'height': newQuoteForm.height() + $( '#quote-popup-tabs' ).height() + 50 }, 300 );
                    }
                }
            
            }, 400 );
        }
    
    });
   
   /**
    *
    * hooks to show contact form popup
    *
    */
    
    $( '*[data-action="show-quote-popup"]' ).click( function() {

        var quoteKey = $( this ).data( 'quote-key' );
        if( typeof quoteKey != 'undefined' && quoteKey !== false ) $.martanianShowQuotePopup( quoteKey );
    
    });
   
   /**
    *
    * hooks to hide quote popup
    *
    */
    
    $( '#quote-popup-close' ).click( function() {
    
        $.martanianHideQuotePopup();
    
    }); 
    
   /**
    *
    * managing width of images
    *
    */                   
    
    $.martanianManageImages = function() {
    
        if( windowWidth > 1332 ) {
    
            var width = ( windowWidth - 37.5 ) / 2;
            var height = 'math';
            var margin = width - 531.5;
            var padding = 75;
        }
        
        else if( windowWidth > 932 ) {
        
            var width = ( windowWidth - 40 ) / 2;
            var height = 'math';
            var margin = width - 400;
            var padding = 50;
        }
        
        else if( windowWidth > 582 ) {
        
            var width = ( ( windowWidth - 540 ) / 2 ) + 540;
            var height = 300;
            var margin = ( windowWidth - 540 ) / 2;
            var padding = 50;
        }
        
        else {
        
            var width = windowWidth - 30;
            var height = 300;
            var margin = 0;
            var padding = 30;
        }
        
        $( '.about-us .right, .agents .right, .contact-full #google-map-full, .box-with-image-right .image' ).css({ 'width': width +'px', 'margin-right': - margin +'px' });
        $( '.insurances-slider .images, .box-with-image-left .image, section.quote-forms .quote-form-background' ).css({ 'width': width +'px', 'margin-left': - margin +'px' });
        
        $( '.about-us, .agents' ).each( function() {
        
            var contentHeight = height == 'math' ? $( this ).children( '.center' ).children( '.left' ).height() + padding : height;
            $( this ).children( '.center' ).children( '.right' ).children( '.images-slider' ).css({ 'height': contentHeight });
        
        }); 
        
        $( '.contact-full' ).each( function() {
        
            var contentHeight = height == 'math' ? $( this ).children( '.center' ).children( '.left' ).height() + padding : height;
            $( this ).children( '.center' ).children( '.right' ).children( '#google-map-full' ).css({ 'height': contentHeight });
        
        }); 
        
        $( '.box-with-image-left' ).each( function() {
        
            var contentHeight = height == 'math' ? $( this ).children( '.center' ).children( '.content' ).height() + padding : height;
            $( this ).children( '.center' ).children( '.image' ).css({ 'height': contentHeight });
        
        }); 
        
        $( '.box-with-image-right' ).each( function() {
        
            var contentHeight = height == 'math' ? $( this ).children( '.center' ).children( '.content' ).height() + padding : height;
            $( this ).children( '.center' ).children( '.image' ).css({ 'height': contentHeight });
        
        }); 
        
        $( 'section.quote-forms' ).each( function() {
        
            var element = $( this );
            setTimeout( function() {
            
                var contentHeight = height == 'math' ? element.children( '.center' ).children( '.quote-form-content' ).height() + padding : height;
                element.children( '.center' ).children( '.quote-form-background' ).css({ 'height': contentHeight });
            
            }, 100 );
        
        });

    };

   /**
    *
    * heading slider
    *
    */                          
    
    $.martanianHeadingSlider = function() {
                  
        var currentHeadingSlideID = 1;
        setInterval( function() {
        
            $.martanianHideSlide( currentHeadingSlideID );
            setTimeout( function() {
            
                currentHeadingSlideID = currentHeadingSlideID == 1 ? 2 : 1;
                $.martanianShowSlide( currentHeadingSlideID );
            
            }, 400 );

        }, 10000 );

    };
    
   /**
    *
    * function hide single heading slide
    *
    */                
    
    $.martanianHideSlide = function( slideID ) {

        var currentSlide = $( '.heading .heading-slide-single[data-slide-id="'+ slideID +'"]' );
        
        currentSlide.children( '.flying-1' ).addClass( 'animated bounceOutLeft' );
        currentSlide.children( '.flying-2' ).addClass( 'animated bounceOutRight' );
        
        setTimeout( function() {
        
            currentSlide.children( '.flying-1' ).removeClass( 'animated bounceOutLeft' ).hide();
            currentSlide.children( '.flying-2' ).removeClass( 'animated bounceOutRight' ).hide();
        
            currentSlide.children( '.heading-content' ).addClass( 'animated fadeOutUp' ); 
            currentSlide.addClass( 'animated fadeOut' );
            
            setTimeout( function() {

                currentSlide.children( '.heading-content' ).removeClass( 'animated fadeOutUp' ).hide(); 
                currentSlide.removeClass( 'animated fadeOut' ).hide();
            
            }, 800 );
        
        }, 400 );

    };  
    
   /**
    *
    * function show single heading slide
    *
    */ 
    
    $.martanianShowSlide = function( slideID ) {

        var currentSlide = $( '.heading .heading-slide-single[data-slide-id="'+ slideID +'"]' );
        
        currentSlide.children( '.flying-1' ).hide();
        currentSlide.children( '.flying-2' ).hide();
        currentSlide.children( '.heading-content' ).hide();
        
        currentSlide.addClass( 'animated fadeIn' ).show();
        
        setTimeout( function() {
        
            currentSlide.children( '.flying-1' ).addClass( 'animated bounceInLeft' ).show(); 
            currentSlide.children( '.flying-2' ).addClass( 'animated bounceInRight' ).show();
            
            setTimeout( function() {

                currentSlide.children( '.heading-content' ).addClass( 'animated fadeInDown' ).show();
                setTimeout( function() {
                
                    currentSlide.removeClass( 'animated fadeIn' );
                    currentSlide.children( '.flying-1' ).removeClass( 'animated bounceInLeft' ); 
                    currentSlide.children( '.flying-2' ).removeClass( 'animated bounceInRight' );
                    currentSlide.children( '.heading-content' ).removeClass( 'animated fadeInDown' );
                
                }, 1000 );
            
            }, 400 ); 
        
        }, 400 );
        
    };
    
   /**
    *
    * configure image slider
    *
    */                
    
    $.martanianConfigureImageSlider = function() {
    
        $( '.about-us .right .images-slider' ).each( function() {
        
            var slider = $( this );
            var slideID = 1;
            
            slider.children( '.images-slider-single' ).each( function() {
            
                $( this ).attr( 'data-slide-id', slideID );
                slideID++;
            
            });
            
            slider.attr( 'data-active-slide-id', 1 );
            slider.attr( 'data-slides-count', slideID - 1 );
        
        });
    
    };
    
   /**
    *
    * next / prev image
    *
    */                 
    
    $( '.about-us .right .images-slider .images-slider-next' ).click( function() {
    
        var imagesSlider = $( this ).parent().parent();
    
        var currentImageID = parseInt( imagesSlider.data( 'active-slide-id' ) );
        var slidesCount = parseInt( imagesSlider.data( 'slides-count' ) );
        
        var nextImageID = currentImageID == slidesCount ? 1 : currentImageID + 1;
                                
        imagesSlider.children( '.images-slider-single[data-slide-id="'+ currentImageID +'"]' ).fadeOut( 300 );
        imagesSlider.children( '.images-slider-single[data-slide-id="'+ nextImageID +'"]' ).fadeIn( 300 );
        
        imagesSlider.data( 'active-slide-id', nextImageID );

    });
    
    $( '.about-us .right .images-slider .images-slider-prev' ).click( function() {
    
        var imagesSlider = $( this ).parent().parent();
    
        var currentImageID = parseInt( imagesSlider.data( 'active-slide-id' ) );
        var slidesCount = parseInt( imagesSlider.data( 'slides-count' ) );
        
        var prevImageID = currentImageID == 1 ? slidesCount : currentImageID - 1;
                                
        imagesSlider.children( '.images-slider-single[data-slide-id="'+ currentImageID +'"]' ).fadeOut( 300 );
        imagesSlider.children( '.images-slider-single[data-slide-id="'+ prevImageID +'"]' ).fadeIn( 300 );
        
        imagesSlider.data( 'active-slide-id', prevImageID );
    
    });  
    
   /**
    *
    * configure insurance slider
    *
    */   

    $.martanianConfigureInsuranceSlider = function() {
    
        if( windowWidth > 1332 ) {

            var padding = 75;
            var height = 'math';
        }
        
        else if( windowWidth > 932 ) {

            var padding = 50;
            var height = 'math';
        }
        
        else {
        
            var padding = 50;
            var height = 300;
        }
        
        $( '.insurances-slider' ).each( function() {
        
            var slider = $( this ).children( '.center' );
            var descriptions = slider.children( '.content' ).children( '.descriptions' );
            var activeInsurance = slider.children( '.content' ).children( '.tabs' ).children( 'li.active' ).data( 'insurance-key' );
            
            if( typeof activeInsurance == 'undefined' || activeInsurance === false ) {
            
                activeInsurance = slider.children( '.content' ).children( '.tabs' ).children( 'li' ).first().data( 'insurance-key' );
                slider.children( '.content' ).children( '.tabs' ).children( 'li' ).first().addClass( 'active' );
            }

            descriptions.children( '.description[data-insurance-key="'+ activeInsurance +'"]' ).show();
            descriptions.css({ 'height': descriptions.children( '.description[data-insurance-key="'+ activeInsurance +'"]' ).height() });

            slider.children( '.images' ).children( '.image[data-insurance-key="'+ activeInsurance +'"]' ).show();
            
            if( height == 'math' ) height = slider.children( '.content' ).height() + padding;
            slider.children( '.images' ).css({ 'height': height });
        
        });

    };    
    
   /**
    *
    * change insurances slider single slide
    *
    */                                 
                                                        
    $( '.insurances-slider .tabs li' ).click( function() {
    
        if( !$( this ).hasClass( 'active' ) ) {
        
            if( windowWidth > 1332 ) {

                var space = 213;
            }
            
            else if( windowWidth > 932 ) {
    
                var space = 188;
            }
            
            var newInsuranceKey = $( this ).data( 'insurance-key' );
            var oldInsuranceKey = $( this ).siblings( '.active' ).data( 'insurance-key' );
            
            var slider = $( this ).parent().parent().parent();
            var newHeight = 0;
            
            var oldDescription = slider.children( '.content' ).children( '.descriptions' ).children( '.description[data-insurance-key="'+ oldInsuranceKey +'"]' );
            var newDescription = slider.children( '.content' ).children( '.descriptions' ).children( '.description[data-insurance-key="'+ newInsuranceKey +'"]' );
            
            $( '.insurances-slider .tabs li' ).removeClass( 'active' );
            $( this ).addClass( 'active' );
            
            oldDescription.addClass( 'animated speed fadeOutRight' );                                       
           
            slider.children( '.images' ).children( '.image[data-insurance-key="'+ oldInsuranceKey +'"]' ).fadeOut( 300 );
            slider.children( '.images' ).children( '.image[data-insurance-key="'+ newInsuranceKey +'"]' ).fadeIn( 300 );
            
            setTimeout( function() {
            
                newDescription.addClass( 'animated speed fadeInRight' ).show();
                newHeight = newDescription.height();
                
                slider.children( '.content' ).children( '.descriptions' ).animate({ 'height': newHeight }, 200 );
                slider.children( '.images' ).animate({ 'height': newHeight + space }, 200 );

                setTimeout( function() {

                    oldDescription.removeClass( 'animated speed fadeOutRight' ).hide();
                    newDescription.removeClass( 'animated speed fadeInRight' );
                
                }, 400 );
            
            }, 300 );
        }
    
    });
    
   /**
    * 
    * manage references
    *
    */                

    var referencesInterval = {};
    $.martanianManageReferences = function() {

        var referenceBoxID = 0;
        $( 'section.references' ).each( function() {
        
            referenceBoxID++;
            clearInterval( referencesInterval[referenceBoxID] );
        
            if( windowWidth > 1332 ) {
    
                var padding = 150;
            }
            
            else if( windowWidth > 932 ) {
            
                var padding = 100;
            }

            var referencesSection = $( this );
            var references = $( this ).children( '.center' ).children( '.right' ).children( '.references' );
            var referenceID = 1;
            
            references.children( '.single-reference' ).each( function() {
            
                $( this ).attr( 'data-reference-id', referenceID );
                
                if( referenceID > 1 ) $( this ).hide();
                else {
                
                    $( this ).show();

                    references.css({ 'marginTop': '', 'min-height': $( this ).height() });
                    references.css({ 'marginTop': ( referencesSection.height() - padding - ( $( this ).children( '.single-reference-content' ).height() + 40 ) ) / 2 });
                }

                referenceID++;   
            
            });

            if( referenceID > 2 ) {

                var currentReference = 1;
                referencesInterval[referenceBoxID] = setInterval( function() {
                
                    var oldReference = references.children( '.single-reference[data-reference-id="'+ currentReference +'"]' );
                    
                    currentReference = ( currentReference + 1 ) > ( referenceID - 1 ) ? 1 : currentReference + 1;  
                    var newReference = references.children( '.single-reference[data-reference-id="'+ currentReference +'"]' );

                    oldReference.addClass( 'animated speed fadeOutLeft' );
                    newReference.addClass( 'animated speed fadeInLeft' ).show();

                    references.animate({ 'min-height': newReference.height(), 'marginTop': ( referencesSection.height() - padding - ( newReference.children( '.single-reference-content' ).height() + 40 ) ) / 2 }, 200 );
                    
                    setTimeout( function() {
                    
                        oldReference.removeClass( 'animated speed fadeOutLeft' ).hide();
                        newReference.removeClass( 'animated speed fadeInLeft' );
                    
                    }, 500 );
                
                }, 5000 );
            }

        });
    
    };
    
   /**
    *
    * numbers highlighter
    *
    */                
    
    $.martanianNumbersHighlighter = function() {
    
        var animation = 'shake';
    
        $( '.key-number-values' ).each( function() {
        
            var parent = $( this );
            var boxes = [];
            
            parent.children( '.single' ).each( function() {

                boxes.push( $( this ).children( '.number' ) );
                
            });

            setInterval( function() {

                $( boxes[0][0] ).addClass( 'animated '+ animation );
                setTimeout( function() {
                
                    $( boxes[1][0] ).addClass( 'animated '+ animation );
                    setTimeout( function() {
                    
                        $( boxes[2][0] ).addClass( 'animated '+ animation );
                        setTimeout( function() {
                        
                            $( boxes[3][0] ).addClass( 'animated '+ animation );
                            setTimeout( function() {
                            
                                $( boxes[0][0] ).removeClass( 'animated '+ animation );
                                $( boxes[1][0] ).removeClass( 'animated '+ animation );
                                $( boxes[2][0] ).removeClass( 'animated '+ animation );
                                $( boxes[3][0] ).removeClass( 'animated '+ animation );
                            
                            }, 1000 );

                        }, 400 );
                    
                    }, 400 );
                
                }, 400 );

            }, 5000 );
        
        });
    
    };
    
   /**
    *
    * checkbox field
    *
    */              
    
    $( '.checkbox' ).click( function() {
    
        var checkbox = $( this );
        var checked = checkbox.attr( 'data-checked' ) == 'yes' ? true : false;
        
        if( checked == true ) {
        
            checkbox.attr( 'data-checked', 'no' );
            checkbox.data( 'checked', 'no' );
            
            checkbox.children( '.checkbox-status' ).html( '<i class="fa fa-times"></i>' );
        }
        
        else {
        
            checkbox.attr( 'data-checked', 'yes' );
            checkbox.data( 'checked', 'yes' );
            
            checkbox.children( '.checkbox-status' ).html( '<i class="fa fa-check"></i>' );
        }
    
    }); 
    
   /**
    * 
    * sliders
    *
    */      
    
    $.martanianConfigureValueSlider = function() {
    
        $( '#quote-popup .quote-form .slider, section.quote-forms .slider' ).each( function() {
        
            var sliderValueMin = $( this ).data( 'slider-min' );
            var sliderValueMax = $( this ).data( 'slider-max' );
            var sliderValueStart = $( this ).data( 'slider-start' );
            var sliderValueStep = $( this ).data( 'slider-step' );
            var sliderID = $( this ).data( 'slider-id' );
            
            $( this ).noUiSlider({ start: sliderValueStart, step: sliderValueStep, range: { 'min': sliderValueMin, 'max': sliderValueMax } });
            $( this ).Link( 'lower' ).to( $( '.slider-value[data-slider-id="'+ sliderID +'"] span' ), null, wNumb({ thousand: '.', decimals: '0' }) );
        
        }); 
    
    }; 
    
   /**
    *
    * send quote
    * 
    */
    
    $( '.send-quote' ).click( function() {
    
        var quoteForm = $( this ).parent();
        var quoteFormParent = quoteForm.parent().parent();
        
        var insuranceType = quoteFormParent.data( 'quote-form-for' );
        var fields = {};
        var fieldID = 0;
        
        var fieldName = '';
        var fieldValue = '';
        
        var clientName = '';
        var clientEmail = ''; 
        
        var errorFound = false;

        quoteForm.find( '.quote-form-element' ).each( function( fieldID ) {
        
            fieldName = $( this ).attr( 'name' );
            if( typeof fieldName == 'undefined' || fieldName === false ) {

                fieldName = $( this ).data( 'name' );
            }
                                      
            if( $( this ).hasClass( 'checkbox' ) ) {

                fieldValue = $( this ).data( 'checked' ) == 'yes' ? $( this ).children( '.checkbox-values' ).children( '.checkbox-value-checked' ).text() : $( this ).children( '.checkbox-values' ).children( '.checkbox-value-unchecked' ).text();
            }
            
            else {
                                     
                fieldValue = $( this ).is( 'input' ) || $( this ).is( 'select' ) ? $( this ).val() : $( this ).text();
                if( ( $( this ).is( 'input' ) && fieldValue == '' ) || ( $( this ).is( 'select' ) && fieldValue == '-' ) ) {
                
                    errorFound = true;
                    $( this ).addClass( 'error' );                                                                         
                }
                
                else {
                
                    $( this ).removeClass( 'error' );
                }
            }
            
            if( $( this ).hasClass( 'quote-form-client-name' ) ) clientName = $( this ).val();
            if( $( this ).hasClass( 'quote-form-client-email' ) ) clientEmail = $( this ).val();

            fields[fieldID] = { 'name': fieldName, 'value': fieldValue };
            fieldID++;  

        });

        if( errorFound == false ) {

            $.ajax({ url: '_assets/submit.php',
                     data: { 'send': 'quote-form', 'values': fields, 'clientName': clientName, 'clientEmail': clientEmail },
                     type: 'post',
                     success: function( output ) {
                     
                         quoteForm.children( '.quote-form-thanks' ).fadeIn( 300 );
                     }
                  
                  });
        }
    
    });
    
   /**
    *
    * close quote popup notice
    *
    */            
    
    $( '.quote-form-thanks-close' ).click( function() {
    
        var parent = $( this ).parent().parent();
        parent.fadeOut( 300 );
    
    }); 
    
   /**
    *
    * send contact form
    * 
    */
    
    $( '.send-contact' ).click( function() {

        var contactForm = $( this ).parent();
        var contactFormParent = contactForm.parent().parent();

        var fields = {};
        var fieldID = 0;
        
        var fieldName = '';
        var fieldValue = '';
        
        var clientName = '';
        var clientEmail = ''; 
        var clientMessageTitle = '';
        
        var errorFound = false;

        contactForm.find( '.contact-form-element' ).each( function( fieldID ) {

            fieldName = $( this ).attr( 'name' );
            if( typeof fieldName == 'undefined' || fieldName === false ) {

                fieldName = $( this ).data( 'name' );
            }
                                      
            if( $( this ).hasClass( 'checkbox' ) ) {

                fieldValue = $( this ).data( 'checked' ) == 'yes' ? $( this ).children( '.checkbox-values' ).children( '.checkbox-value-checked' ).text() : $( this ).children( '.checkbox-values' ).children( '.checkbox-value-unchecked' ).text();
            }
            
            else {
                                     
                fieldValue = $( this ).is( 'input' ) || $( this ).is( 'textarea' ) || $( this ).is( 'select' ) ? $( this ).val() : $( this ).text();
                if( ( $( this ).is( 'input' ) && fieldValue == '' ) || ( $( this ).is( 'textarea' ) && fieldValue == '' ) || ( $( this ).is( 'select' ) && fieldValue == '-' ) ) {
                
                    errorFound = true;
                    $( this ).addClass( 'error' );                                                                         
                }
                
                else {
                
                    $( this ).removeClass( 'error' );
                }
            }
            
            if( $( this ).hasClass( 'contact-form-client-name' ) ) clientName = $( this ).val();
            if( $( this ).hasClass( 'contact-form-client-email' ) ) clientEmail = $( this ).val();
            if( $( this ).hasClass( 'contact-form-client-message-title' ) ) clientMessageTitle = $( this ).val();

            fields[fieldID] = { 'name': fieldName, 'value': fieldValue };
            fieldID++;  

        });

        if( errorFound == false ) {

            $.ajax({ url: '_assets/submit.php',
                     data: { 'send': 'contact-form', 'values': fields, 'clientName': clientName, 'clientEmail': clientEmail, 'clientMessageTitle': clientMessageTitle },
                     type: 'post',
                     success: function( output ) {
                     
                         contactForm.children( '.contact-form-thanks' ).fadeIn( 300 );
                     }
                  
                  });
        }

    }); 
    
   /**
    *
    * close contact popup notice
    *
    */            
    
    $( '.contact-form-thanks .contact-form-thanks-content .contact-form-thanks-close' ).click( function() {
    
        var parent = $( this ).parent().parent();
        parent.fadeOut( 300 );
    
    });
    
   /**
    *
    * get a phone call
    *
    */    
    
    $( '.send-phone-call-quote' ).click( function() {
    
        var element = $( this );
        var phoneField = element.siblings( '.phone-number' );
        var phoneNumber = phoneField.val();
        
        if( phoneNumber == '' ) phoneField.addClass( 'error' );
        else {
        
            phoneField.removeClass( 'error' );
            $.ajax({ url: '_assets/submit.php',
                     data: { 'send': 'phone-form', 'phoneNumber': phoneNumber },
                     type: 'post',
                     success: function( output ) {
                     
                         element.siblings( '.call-to-action-thanks' ).fadeIn( 300 );
                     }
                  
                  });
        }
    
    });            
    
   /**
    *
    * close phone call notice
    *
    */                
    
    $( '.call-to-action-thanks .call-to-action-thanks-content .call-to-action-thanks-close' ).click( function() {
    
        var parent = $( this ).parent().parent();
        parent.fadeOut( 300 );
    
    });
    
   /**
    *
    * progress bars
    *
    */             
    
    $.martanianProgressBars = function( progressBars ) {

        if( progressBars.hasClass( 'animated-done' ) ) return;
        
        var progressValue = '';
        progressBars.children( '.progress-bar' ).each( function() {
        
            var progressBar = $( this ).children( '.progress-bar-value' );
        
            progressValue = progressBar.data( 'value' );
            progressBar.animate({ 'width': progressValue }, 900 );
            
            setTimeout( function() {
            
                progressBar.children( '.progress-bar-value-tip' ).fadeIn( 300 );
            
            }, 900 );
        
        });
        
        progressBars.addClass( 'animated-done' );

    }; 

    $.martanianProgressBarsAutoload = function() {

        setTimeout( function() {
        
            $( '.progress-bars.progress-bars-autoload' ).each( function() {
            
                var progressBars = $( this );
                var progressValue = '';
                
                progressBars.children( '.progress-bar' ).each( function() {
                
                    var progressBar = $( this ).children( '.progress-bar-value' );
                
                    progressValue = progressBar.data( 'value' );
                    progressBar.animate({ 'width': progressValue }, 900 );
                    
                    setTimeout( function() {
                    
                        progressBar.children( '.progress-bar-value-tip' ).fadeIn( 300 );
                    
                    }, 900 );
                
                });
            
            });
        
        }, 500 );

    }; 

   /**
    *
    * configure insurance slider
    *
    */   

    $.martanianConfigureAgentsSlider = function() {
    
        $( 'section.agents' ).each( function() {

            var agentID = 1;
            var agentImageID = 1;
            
            var agentsData = $( this ).children( '.center' ).children( '.left' ).children( '.agents-data' );
            var agentsImages = $( this ).children( '.center' ).children( '.right' ).children( '.images-slider' );
            
            agentsData.children( '.single-agent' ).each( function() {
            
                $( this ).attr( 'data-agent-id', agentID );
                if( agentID == 1 ) {
                
                    agentsData.css({ 'height': $( this ).height() - 45 });
                    
                    var progressBars = $( this ).children( '.progress-bars' );
                    if( typeof progressBars[0] != 'undefined' && progressBars[0] != '' ) {
                    
                        setTimeout( function() {
    
                            $.martanianProgressBars( progressBars );
                        
                        }, 300 );
                    }
                }
                
                agentID++;   
             
            });
            
            agentsData.attr( 'data-current-agent-id', 1 ).attr( 'data-agents-count', agentID - 1 );
            agentsImages.children( '.images-slider-single' ).each( function() {
            
                $( this ).attr( 'data-agent-id', agentImageID );
                agentImageID++;
            
            });

        });

    };    
    
   /**
    *
    * change insurances slider single slide
    *
    */                                 
           
    $( '.agents .center .left .switch-agents button' ).click( function() {
    
        var agentsData = $( this ).parent().siblings( '.agents-data' );
        var agentsImages = $( this ).parent().parent().siblings( '.right' ).children( '.images-slider' );
        
        var currentAgentID = parseInt( agentsData.attr( 'data-current-agent-id' ) );
        var agentsCount = parseInt( agentsData.attr( 'data-agents-count' ) );
        var action = $( this ).hasClass( 'prev-agent' ) ? 'prev' : ( $( this ).hasClass( 'next-agent' ) ? 'next' : false );
        
        if( action == false ) return false;
        else {
        
            switch( action ) {
            
                case 'prev':
                
                    var newAgentID = currentAgentID == 1 ? agentsCount : currentAgentID - 1;

                break;
                
                case 'next':
                
                    var newAgentID = currentAgentID == agentsCount ? 1 : currentAgentID + 1;  
                
                break;
            }
            
            agentsData.children( '.single-agent[data-agent-id="'+ currentAgentID +'"]' ).fadeOut( 300 );
            agentsData.children( '.single-agent[data-agent-id="'+ newAgentID +'"]' ).fadeIn( 300 );
            
            agentsImages.children( '.images-slider-single[data-agent-id="'+ currentAgentID +'"]' ).fadeOut( 300 );
            agentsImages.children( '.images-slider-single[data-agent-id="'+ newAgentID +'"]' ).fadeIn( 300 );
            
            agentsData.attr( 'data-current-agent-id', newAgentID );

            agentsData.animate({ 'height': agentsData.children( '.single-agent[data-agent-id="'+ newAgentID +'"]' ).height() - 30 }, 300 );
            if( windowWidth > 932 ) agentsImages.animate({ 'height': agentsData.children( '.single-agent[data-agent-id="'+ newAgentID +'"]' ).height() + 124 }, 300 )
            
            var progressBars = agentsData.children( '.single-agent[data-agent-id="'+ newAgentID +'"]' ).children( '.progress-bars' );
            if( typeof progressBars[0] != 'undefined' && progressBars[0] != '' ) {
            
                setTimeout( function() {

                    $.martanianProgressBars( progressBars );
                
                }, 300 );
            }
        }
    
    }); 
    
   /**
    *
    * tabs section
    *
    */            
    
    $.martanianConfigureTabsSection = function() {
    
        var padding = windowWidth > 1332 ? 150 : 100;
       
        $( 'section.tabs' ).each( function() {
        
            var tabID = 1;
            var content = $( this ).children( '.center' ).children( '.content' );
            var tabs = $( this ).children( '.center' ).children( '.tabs-selector' );
            
            content.children( '.content-tab-single' ).each( function() {
            
                $( this ).attr( 'data-tab-id', tabID );
                if( tabID == 1 ) {

                    content.css({ 'height': $( this ).height() + padding });
                }
                
                tabID++;
            
            });
            
            tabID = 1;
            tabs.children( 'li' ).each( function() {

                $( this ).attr( 'data-tab-id', tabID );
                if( tabID == 1 ) {
                
                    $( this ).addClass( 'active' );
                }
                
                tabID++;
                
            });
            
        });
    };    
    
    $.martanianResizeTabsSection = function() {
    
        var padding = windowWidth > 1332 ? 150 : 100;
        
        $( 'section.tabs' ).each( function() {
        
            var content = $( this ).children( '.center' ).children( '.content' );
            var activeTabID = $( this ).children( '.center' ).children( '.tabs-selector' ).children( 'li.active' ).data( 'tab-id' );
            
            content.css({ 'height': content.children( '.content-tab-single[data-tab-id="'+ activeTabID +'"]' ).height() + padding });
        
        });
    
    };
    
    $( 'section.tabs .tabs-selector li' ).click( function() {
    
        if( $( this ).hasClass( 'active' ) ) return;
        
        var padding = windowWidth > 1332 ? 150 : 80;
    
        var tabsContent = $( this ).parent().siblings( '.content' );
        var newTabID = $( this ).data( 'tab-id' );
        var oldTabID = $( this ).siblings( 'li.active' ).data( 'tab-id' );
        
        $( this ).siblings( 'li.active' ).removeClass( 'active' );
        $( this ).addClass( 'active' );
        
        tabsContent.children( '.content-tab-single[data-tab-id="'+ oldTabID +'"]' ).fadeOut( 300 );
        setTimeout( function() {
        
            tabsContent.children( '.content-tab-single[data-tab-id="'+ newTabID +'"]' ).fadeIn( 300 );
            tabsContent.animate({ 'height': tabsContent.children( '.content-tab-single[data-tab-id="'+ newTabID +'"]' ).height() + padding }, 300 );
            
        }, 100 );
     
    }); 
    
   /**
    *
    * open menu in responsive mode
    *
    */                
    
    $( 'header .menu-responsive' ).click( function() {
    
        var menu = $( 'header .menu' );
        
        if( menu.css( 'display' ) == 'block' ) menu.hide();
        else {
        
            menu.find( 'ul.submenu' ).removeClass( 'animated' );
            menu.show();
        }
    
    });
    
   /**
    *
    * set parallax
    *
    */
    
    $.martanianSetParallax = function() {

        var speed = windowWidth > 1120 ? 0.25 : 0.1;
        $( '.with-parallax' ).css({ 'background-position': '' }).parallax( '50%', speed );
    
    };                
    
   /**
    *
    * resize manager
    *
    */                

    $.martanianResizeManager = function() {
    
       /**
        *
        * mode
        * 
        */                                
        
        var mode = windowWidth > 932 && windowHeight > 670 ? 'fixed' : 'absolute';
       
       /**
        *
        * insurances slider
        *
        */                 

        $( '.insurances-slider' ).each( function() {
        
            if( windowWidth > 1332 ) {

                var padding = 75;
                var height = 'math';
            }
            
            else if( windowWidth > 932 ) {
    
                var padding = 50;
                var height = 'math';
            }
            
            else {
            
                var padding = 50;
                var height = 300;
            }
            
            var slider = $( this ).children( '.center' );
            var activeInsurance = slider.children( '.content' ).children( '.tabs' ).children( 'li.active' ).data( 'insurance-key' );
            var image = slider.children( '.images' ).children( '.image[data-insurance-key="'+ activeInsurance +'"]' );

            if( height == 'math' ) height = slider.children( '.content' ).height() + padding;
            image.css({ 'height': height });
        
        });
        
       /**
        *
        * quote popup
        * 
        */

        if( $( '#quote-popup #quote-popup-background' ).css( 'display' ) == 'block' ) {

            var type = $( '#quote-popup #quote-popup-content #quote-popup-tabs li.active' ).data( 'quote-tab-for' );       
            var selectedQuoteForm = $( '#quote-popup #quote-popup-content .quote-form[data-quote-form-for="'+ type +'-insurance"]' );
    
            setTimeout( function() {
                
                if( mode == 'fixed' ) {
        
                    selectedQuoteForm.children( '.quote-form-background' ).css({ 'height': selectedQuoteForm.height() });
                    $( '#quote-popup #quote-popup-content' ).css({ 'top': '50%', 'marginTop': - ( selectedQuoteForm.height() / 2 ), 'height': selectedQuoteForm.height(), 'position': 'fixed' });
                }
                
                else if( mode == 'absolute' ) {
        
                    if( windowWidth > 932 ) {
                    
                        $( '#quote-popup #quote-popup-content' ).addClass( 'bounceInDown' ).css({ 'top': '50px', 'marginTop': '0px', 'height': selectedQuoteForm.height(), 'position': 'absolute' });
                        selectedQuoteForm.children( '.quote-form-background' ).css({ 'height': selectedQuoteForm.height() });
                    }
                    
                    else {                            
                    
                        $( '#quote-popup .quote-form-background' ).css({ 'height': '' });
                    
                        if( windowWidth > 582 ) $( '#quote-popup #quote-popup-content' ).css({ 'top': '50px', 'marginTop': '0px', 'height': selectedQuoteForm.height(), 'position': 'absolute' });
                        else {
                        
                            $( '#quote-popup #quote-popup-content' ).css({ 'top': '50px', 'marginTop': '0px', 'height': selectedQuoteForm.height() + $( '#quote-popup-tabs' ).height() + 50, 'position': 'absolute' });
                        }
                    }
                } 
                
            }, 300 );
        } 
        
       /**
        *
        * contact popup
        * 
        */
             
        if( $( '#contact-popup #contact-popup-background' ).css( 'display' ) == 'block' ) {
            
            setTimeout( function() {
            
                if( mode == 'fixed' ) $( '#contact-popup #contact-popup-content' ).css({ 'top': '50%', 'position': 'fixed', 'marginTop': '-300px' });
                else $( '#contact-popup #contact-popup-content' ).css({ 'top': '50px', 'marginTop': '0px', 'position': 'absolute' });
            
            }, 300 );
        }                       

       /**
        *
        * end of resize manager
        * 
        */                                            
        
    };

   /**
    *
    * end of file
    * 
    */                

});