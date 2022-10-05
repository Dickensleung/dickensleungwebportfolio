jQuery(document).ready(function ($) {
    var images = $(".featured-image img");
    let title;
    $(".featured-image img").each(function(){        
        images.css('opacity', 0);
    })

    $( "#project-link #project-title" ).each(function(){
        $(".featured-image img").animate({"opacity": "0"}, "fast");
    })

    //MOBILE SUPPORT 

    //DESKTOP SUPPORT 
    
    $( "#project-link #project-title" ).on('mouseover', function(){
        title = $( this ).data( 'controls' );

        $(".description-header h1").css("background-color", "#ebff00");
        $(".description-header h2").css("background-color", "#ebff00");
        $(".user-logo a").css("background-color", "#ebff00");
        $("#project-card-wrapper .project-sub-title").css("color", "transparent");
        
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
            $(".description-header h1").css("background-color", "transparent");
            $(".description-header h2").css("background-color", "transparent");
            $(".description-header h2").css("color", "#404040");
            $(".description-header h1").css("color", "#404040");
            $(".user-logo a").css("background-color", "#b8d87e");
            $("#project-card-wrapper .project-sub-title").css("color", "#d1d1d1");
            
        }
        
    })
    
});