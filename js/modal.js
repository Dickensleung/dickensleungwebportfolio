/**
 * File modal.js.
 *
 * Handles custom javascript functions
 */
 ( function(){
    const hamburgerMenu = document.querySelector("#hamburger-menu");
    const overlay = document.querySelector("#overlay");
    const nav1 = document.querySelector("#nav-1");
    const nav2 = document.querySelector("#nav-2");
    const nav3 = document.querySelector("#nav-3");
    const nav4 = document.querySelector("#nav-4");
    const nav5 = document.querySelector("#nav-5");
    const navItems = [nav1, nav2, nav3, nav4, nav5];
    
   
  // Control Navigation Animation
    function navAnimation(val1, val2) {
      navItems.forEach((nav, i) => {
        nav.classList.replace(`slide-${val1}-${i + 1}`, `slide-${val2}-${i + 1}`);
      });
    }

    
    function toggleNav() {
      // Toggle: Hamburger Open/Close
      hamburgerMenu.classList.toggle("active");
    
      //   Toggle: Menu Active
      overlay.classList.toggle("overlay-active");
    
      if (overlay.classList.contains("overlay-active")) {
        // Animate In - Overlay
        overlay.classList.replace("overlay-slide-left", "overlay-slide-right");
    
        // Animate In - Nav Items
        navAnimation("out", "in");
      } else {
        // Animate Out - Overlay
        overlay.classList.replace("overlay-slide-right", "overlay-slide-left");
    
        // Animate Out - Nav Items
        navAnimation("in", "out");
      }
    }
   
    
    //https://xhy.ch/2021/07/06/fixing-the-problem-in-this-wordpress-theme/
    //https://codebl0g.wordpress.com/2018/12/20/javascript-events-mouse/
    //http://www.sitestepper.be/en/css-properties-to-javascript-properties-reference-list.htm
    //https://javascript.info/mousemove-mouseover-mouseout-mouseenter-mouseleave#events-mouseenter-and-mouseleave
    const projectTitle = document.querySelectorAll('#project-link');
    const featuredImage = document.querySelectorAll('#featured-images img');
    const map = function(fn) {
      return function(x) {
        Array.prototype.map.call(x, fn);
      }
    }


    map(function(x){
      x.addEventListener('mouseover', function(e){
        e.target.style.visibility = 'hidden';
      });

      x.addEventListener('mouseleave', function(e){
        e.target.style.visibility = 'visible';
      });
    })(featuredImage)


    
    
    projectTitle.forEach((title)=>{
      title.addEventListener("mouseover", activeEvent);
      title.addEventListener("mouseout" , removeEvent);
    })


    // Events Listeners
    hamburgerMenu.addEventListener("click", toggleNav);
    navItems.forEach(nav => nav.addEventListener("click", toggleNav));


}() );




