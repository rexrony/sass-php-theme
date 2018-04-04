    $(document).on('ready', function() {
      $(".slide-con").slick({
        dots:true,
          customPaging: function(slider, i) {
      // this example would render "tabs" with titles
      return '<span class="cus_dot"></span>';
    },
        infinite: true,
        slidesToShow: 1
  
      });

          $(".events-slides").slick({
        dots:false,
        infinite: true,
        slidesToShow: 1,
 arrows:false,
                 dots:true,
          customPaging: function(slider, i) {
      // this example would render "tabs" with titles
      return '<span class="cus_dot2"></span>';
    },
  /*  next:   '#next',
    prev:   '#prev',
	pager:  '#nav1'*/
      });  
 
 /******Search Script**********/       
      var submitIcon = $('.searchbox-icon');
            var inputBox = $('.searchbox-input');
            var searchBox = $('.searchbox');
            var isOpen = false;
            submitIcon.click(function(){
                if(isOpen == false){
                    searchBox.addClass('searchbox-open');
                    inputBox.focus();
                    isOpen = true;
                } else {
                    searchBox.removeClass('searchbox-open');
                    inputBox.focusout();
                    isOpen = false;
                }
            });  
             submitIcon.mouseup(function(){
                    return false;
                });
            searchBox.mouseup(function(){
                    return false;
                });
            $(document).mouseup(function(){
                    if(isOpen == true){
                        $('.searchbox-icon').css('display','block');
                        submitIcon.click();
                    }
                });      

        
        
 /*********Animation***********/
$(function() {

  var $window           = $(window),
      win_height_padded = $window.height() * 1.1,
      isTouch           = Modernizr.touch;

  if (isTouch) { $('.revealOnScroll').addClass('animated'); }

  $window.on('scroll', revealOnScroll);

  function revealOnScroll() {
    var scrolled = $window.scrollTop(),
        win_height_padded = $window.height() * 1.1;

    // Showed...
    $(".revealOnScroll:not(.animated)").each(function () {
      var $this     = $(this),
          offsetTop = $this.offset().top;

      if (scrolled + win_height_padded > offsetTop) {
        if ($this.data('timeout')) {
          window.setTimeout(function(){
            $this.addClass('animated ' + $this.data('animation'));
          }, parseInt($this.data('timeout'),10));
        } else {
          $this.addClass('animated ' + $this.data('animation'));
        }
      }
    });
    // Hidden...
   $(".revealOnScroll.animated").each(function (index) {
      var $this     = $(this),
          offsetTop = $this.offset().top;
      if (scrolled + win_height_padded < offsetTop) {
        $(this).removeClass('animated fadeInUp fadeInLeft fadeInRight flipInX lightSpeedIn')
      }
    });
  }

  revealOnScroll();
});       
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    }); //Script Load Close


/*****Search menu JS********/     
            function buttonUp(){
                var inputVal = $('.searchbox-input').val();
                inputVal = $.trim(inputVal).length;
                if( inputVal !== 0){
                    $('.searchbox-icon').css('display','none');
                } else {
                    $('.searchbox-input').val('');
                    $('.searchbox-icon').css('display','block');
                }
            }
      