    
$(function() {
    $('.toggleNav').on('click',function() {
    $('nav.menu-overlay').toggleClass('open');
    // $('nav.menu-overlay').fadeToggle();
    });
    $('.close').on('click',function() {
    $('nav.menu-overlay').toggleClass('open');
    });
    $('.cats-toggle').on('click', function() {
        $('.blog-header .blog-header-wrapper .menu-flex').toggleClass('open');
    });
});

$(window).resize(function() {

});

// $(document).ready(function() {
//     $('#slider').fullpage({
//         autoScrolling: false,
//         fitToSection: false,
//         // slidesNavPosition: 'bottom',
//         controlArrows: false,
//         anchors:['first'],
//     });
// });

function io_hm_page_silder(){



    var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
    var h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);


    $('.slider-wrap').width(w); // .css('min-height', h);
    $('.slider-wrapper').width(w);
    $('.slide').each(function(){
        $(this).width(w);
    });

    var slider = {
  
        // Not sure if keeping element collections like this
        // together is useful or not.
        el: {
          slider: $("#slider"),
          allSlides: $(".slide"),
          sliderNav: $(".slider-nav"),
          allNavButtons: $(".slider-nav > a")
        },
        
        timing: 800,
        slideWidth: w, // could measure this
       
        // In this simple example, might just move the
        // binding here to the init function
        init: function() {
          this.bindUIEvents();
        },
        
        bindUIEvents: function() {
          // You can either manually scroll...
        //   this.el.slider.on("scroll", function(event) {
            // slider.moveSlidePosition(event);
        //   });
          // ... or click a thing
          this.el.sliderNav.on("click", "a", function(event) {
            slider.handleNavClick(event, this);
          });
          // What would be cool is if it had touch
          // events where you could swipe but it
          // also kinda snapped into place.
        },
        
        // moveSlidePosition: function(event) {
        //   Magic Numbers =(
        //   this.el.allSlides.css({
            // "background-position": $(event.target).scrollLeft()/6-100+ "px 0"
        //   });  
        // },
        
        handleNavClick: function(event, el) {
          event.preventDefault();
          var position = $(el).attr("href").split("-").pop();
          
          this.el.slider.animate({
            scrollLeft: position * this.slideWidth
          }, this.timing);
          
          this.changeActiveNav(el);
        },
        
        changeActiveNav: function(el) {
          this.el.allNavButtons.removeClass("active");
          $(el).addClass("active");
        }
        
      };
      
      slider.init();

}

io_hm_page_silder();
