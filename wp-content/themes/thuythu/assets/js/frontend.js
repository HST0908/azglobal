jQuery(document).ready(function () {

  swiperfc()
  hovered_wobble()
  autoplay_video_scroll()
  open_popup_boss()
  item_card_choose()
  show_faq()
  popup()
  drop()



  
  
  if (jQuery('.counter').size()){
    jQuery('.counter').countUp();
  };

  var video = document.getElementById('video')

  jQuery('.btn-play-video').click(function (e) { 
    e.preventDefault();
    jQuery('.section-video').toggleClass('active');
    video.play()
  });

  jQuery('#video').click(function(){
    jQuery('.section-video').toggleClass('active');
    video.pause()
  })

  jQuery('#video').on('mouseout', function() {
    jQuery('.section-video').removeClass('active');
    video.pause()
  });

  let topBtn = document.getElementById('scroll-to-top')
  window.onscroll = () => topBtn.style.opacity = window.scrollY > 500 ? 1 : 0;

  function swiperfc(){
    var swiper_banner_thumb = new Swiper('.swiper-banner-thumbs', {
        loop: false,
        slidesPerView: 3,
        watchSlidesProgress: true,
        // spaceBetween: 135,
        breakpoints: {
          319: {
            slidesPerView: 2,
          },
          767: {
            slidesPerView: 3,
          },
        }
    });
    
    var swiper_banner = new Swiper('.swiper-banner', {
        loop: false,
        effect: "fade",
        thumbs: {
          swiper: swiper_banner_thumb,
        },
        autoplay: {
          delay: 3000,
        },

    });

    // trang giới thiệu

    var swiper_partner = new Swiper('.swiper-partner', {
      loop: false,
      slidesPerView: 1,
      // autoplay: {
      //   delay: 3000,
      // },
      pagination: {
        el: ".swiper-pagination-partner",
        clickable: true,
        renderBullet: function (index, className) {
          return '<span class="pagination-partner-dot ' + className + '">'+ "</span>";
        },
      },

    });

    var swiper_choose = new Swiper('.swiper-choose_us', {
      loop: false,
      slidesPerView: 3,
      spaceBetween: 20,
      cssMode: true,
      navigation: {
        nextEl: '.button-choose.next',
        prevEl: '.button-choose.prev',
      },
    });


    var swiper_investment = new Swiper('.swiper-investment', {
      effect: "fade",
    });

    swiper_investment.on('slideChange', function () {

      var activeIndex = swiper_investment.activeIndex;  
      swiper_investment_thumb.slideTo(activeIndex);
    })


    var swiper_investment_thumb = new Swiper('.swiper-investment-thumb', {
      loop: false,
      effect: "fade",
      watchSlidesProgress: true,
      thumbs: {
        swiper: swiper_investment,
      },
      autoplay: {
        delay: 3000,
      },
      pagination: {
        el: ".swiper-pagination-investment",
        clickable: true,
        renderBullet: function (index, className) {
          return '<span class="pagination-investment-dot relative ' + className + '">'+ "</span>";
        },
      },
    });

    

     
    var swiper_banner_ct_thumb = new Swiper(".swiper-banner-ct-thumb", {
      slidesPerView: 6,
      // centeredSlides: true,
      loop: true,
      spaceBetween: 20,
      navigation: {
        nextEl: '.button-banner_bds-ct_thumb.next',
        prevEl: '.button-banner_bds-ct_thumb.prev',
      },
    });

    var swiper_banner_ct = new Swiper(".swiper-banner-ct", {
      // centeredSlides: true,
      loop: true,
      thumbs: {
        swiper: swiper_banner_ct_thumb,
      },
      spaceBetween: 20,
      navigation: {
        nextEl: '.button-banner_bds-ct.next',
        prevEl: '.button-banner_bds-ct.prev',
      },
    });

    
    swiper_banner_ct_thumb.on('slideChange', function () {

      var activeIndex = swiper_banner_ct_thumb.activeIndex;  
      swiper_banner_ct.slideTo(activeIndex);
    })

    // swiper_banner_ct.on('slideChange', function () {

    //   var activeIndex = swiper_banner_ct.activeIndex;  
    //   swiper_banner_ct_thumb.slideTo(activeIndex);
    // })
  }

  function hovered_wobble() {
    jQuery(".box-list-img-about .list-img-about .grid-50 .item-img").mouseenter(function() {
      jQuery(this).addClass("hovered_wobble");
    }).mouseleave(function() {
      var self = this;
      jQuery(this).removeClass("hovered_wobble");
      // Sử dụng setTimeout để thêm lại lớp sau một khoảng thời gian ngắn
      setTimeout(function() {
        jQuery(self).addClass("hovered_wobble_rv");
        setTimeout(function() {
          jQuery(self).removeClass("hovered_wobble_rv");
        },1800);
      },10);
    });
  }

  function autoplay_video_scroll()  {
    if (jQuery('#video_page_gt').length > 0){
      var video = jQuery('#video_page_gt');
      var videoPosition = video.offset().top;
      var videoHeight = video.height();
      var windowHeight = jQuery(window).height();

      jQuery(window).scroll(function() {
        var windowScroll = jQuery(this).scrollTop();

        // Tính vị trí của video khi nó trong khung nhìn
        var videoInView = (windowScroll + windowHeight > videoPosition) && (windowScroll < videoPosition + videoHeight);

        if (videoInView) {
          video.get(0).play(); // Phát video khi trong khung nhìn
        } else {
          video.get(0).pause(); // Dừng video khi ra khỏi khung nhìn
        }
      });
      jQuery('#video_page_gt').click(()=>video.get(0).pause())
    }
  }

  function open_popup_boss(){
    
    jQuery('.manger-list-item').click(function (e) { 
      e.preventDefault();
      jQuery('.over_lay').addClass('active')
    });

    jQuery('.btn_close_popup').click(function (e) { 
      e.preventDefault();
      jQuery('.over_lay').removeClass('active')
    });
  }

  function item_card_choose() {
    
    jQuery('.card-Choose-us-list .item-card').mouseenter(function() {
      jQuery('.card-Choose-us-list .item-card').removeClass('active');
      jQuery(this).addClass('active'); // Thêm class active khi hover
    }).mouseleave(function() {
      jQuery(this).removeClass('active'); // Loại bỏ class active khi không hover
      jQuery('.card-Choose-us-list .item-card:first-child').addClass('active');
    });
  }

  function show_faq(){
    jQuery('.faq-item-title').click(function (e) { 
      e.preventDefault();
      jQuery(".faq-item-content").not(jQuery(this).next()).slideUp();
      jQuery(".faq-item.active").not(jQuery(this).parents(".faq-item")).removeClass("active");

      jQuery(this).next().slideToggle();
      jQuery(this).parents(".faq-item").toggleClass('active');
    })
  }

  function popup(){
    jQuery('#btn-popup').click(()=>jQuery('.over_lay').addClass('active'))
  }

  function drop() {
    jQuery('.dropdown-compare .dropdown-select').click(function (e) { 
      e.preventDefault();
      jQuery(this).next().slideToggle();
      jQuery(this).toggleClass('active')
    });

    jQuery('.dropdown-compare .dropdown-list .dropdown-item').click(function(){
      let kq = jQuery(this).text()
      let value = jQuery('.dropdown-compare .dropdown-select .dropdown-value')
      
      jQuery('.dropdown-compare .dropdown-list .dropdown-item').removeClass('active')
      jQuery(this).toggleClass('active')
      value.text(kq)
      jQuery(this).parent().slideToggle()

    })
  }

    

});