jQuery(document).ready(function ($) {
    var images = $(".featured-image img");
    let title;
    $(".featured-image img").each(function(){        
        images.css('opacity', 0);
    })
    
    //set background image to invisible
    $( "#project-link #project-title" ).each(function(){
        $(".featured-image img").animate({"opacity": "0"}, "fast");
    })

    //Controls which image to display on hover
    $( "#project-link #project-title" ).on('mouseover', function(){
        title = $( this ).data( 'controls' );
        console.log()
        //$(".description-header h2").css("color", "#404040");
        //$(".description-header h1").css("color", "#404040");
        $("#project-card-wrapper .project-sub-title").css("opacity", "0");

        
        if( title == '#cat cafe' ){
            $(".featured-image .cat-cafe").stop(1,1).animate( {"opacity": ".99"}, 400 );
        }

        if(title == '#destination hyrule'){
            $(".featured-image .desination-hyrule").stop(1,1).animate( {"opacity": ".99"}, 400 );
        }
        if(title == '#movie watch'){
            $(".featured-image .movie-watch").stop(1,1).animate( {"opacity": ".99"}, 400 );
        }
        else{
            $(".featured-image .default-img").stop(1,1).animate( {"opacity": ".99"}, 400 );
        }
    }).on('mouseout', function(){
        if (title != '#cat cafe' || title != '#destination hyrule' || title == '#movie watch' ){
            $(".featured-image img").animate({"opacity": "0"}, "slow");
            $("#project-card-wrapper .project-sub-title").css("opacity", "1");

            
        }
        
    })


    // Control Navigation Animation
	function navAnimation( val1, val2 ) {
		//forEach(function(element, index) { /* ... */ })
        const nav1 = document.querySelector( '#nav-1' );
        const nav2 = document.querySelector( '#nav-2' );
        const nav3 = document.querySelector( '#nav-3' );
        const nav4 = document.querySelector( '#nav-4' );
        const nav5 = document.querySelector( '#nav-5' );
	    const navItems = [ nav1, nav2, nav3, nav4, nav5 ];
		navItems.forEach( ( nav, i ) => {
			if ( nav ) {
				nav.classList.replace( `slide-${ val1 }-${ i + 1 }`, `slide-${ val2 }-${ i + 1 }` );
			}
		} );
	}

    function toggleNav() {
		const hamburgerMenuH = document.querySelector('.hamburger-menu');
		const overlayO = document.querySelector('.overlay');
		// Toggle: Hamburger Open/Close
		hamburgerMenuH.classList.toggle( 'active' );

		//   Toggle: Menu Active
		overlayO.classList.toggle( 'overlay-active' );

		if ( overlayO.classList.contains( 'overlay-active' ) ) {
			// Animate In - Overlay
			overlayO.classList.replace( 'overlay-slide-up', 'overlay-slide-down' );

			// Animate In - Nav Items
			navAnimation( 'out', 'in' );
		} else {
			// Animate Out - Overlay
			overlayO.classList.replace( 'overlay-slide-down', 'overlay-slide-up' );

			// Animate Out - Nav Items
			navAnimation( 'in', 'out' );
		}
	}

    $("#hamburger-menu").on("mousedown", function(event){
        toggleNav()
    } );
    $("#project-second-link").on( "mousedown", function(event){
        toggleNav()
    } );



    /* MOUSE CURSOR GRADIENT TRACKING */
    function calculateRotation(element, offset) {
        //https://codepen.io/anjanas_dh/pen/yQqajE

        var x = element.offset().left + element.width() / 2;
        var y = element.offset().top + element.height() / 2;
        var rad = Math.atan2(event.pageX - x, event.pageY - y);
        var rot = rad * (180 / Math.PI) * -1 + (230 + offset);
        
        element.css({
          "-webkit-transform": "rotate(" + rot + "deg)",
          "-moz-transform": "rotate(" + rot + "deg)",
          "-ms-transform": "rotate(" + rot + "deg)",
          transform: "rotate(" + rot + "deg)"
        });
      }
      
   
    $(".tracking-section").on("mousemove", function(event){
        var eye = $(".t-eye");
        calculateRotation(eye, 0);
    });
});