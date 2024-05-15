jQuery(document).ready(function ($) {

  $('.featured-project-wrap').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    adaptiveHeight: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          arrows: false
        }
      },
    ]
  });


  $('.testimonial-slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    adaptiveHeight: true,
  });

  $('.portfolio-project-wrap').slick({
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
  });

  ///////// Counter Number animation ///////////////////

  var a = 0;
  $(window).scroll(function () {

    var oTop = $('.our-achived-numbers').offset().top - window.innerHeight;
    if (a == 0 && $(window).scrollTop() > oTop) {
      $('.counter').each(function () {
        var $this = $(this),
          countTo = $this.attr('data-value');
        $({
          countNum: $this.text()
        }).animate({
          countNum: countTo
        },

          {

            duration: 2000,
            easing: 'swing',
            step: function () {
              $this.text(Math.floor(this.countNum));
            },
            complete: function () {
              $this.text(this.countNum);
            }

          });
      });
      a = 1;
    }

  });

});


///// Header menu image align ////////
let first_menu_item = document.querySelector('.mega-expertise-sub-menu').querySelector('.mega-my_class').querySelector('img');
let mega_menu_image = document.querySelector('#mega_menu_sub_menu');
const Expertise_menu = document.querySelector('.expertise-sub-menu');
const mega_menu_links = Expertise_menu.querySelectorAll('.mega-menu-item');
mega_menu_image.src = first_menu_item.src

mega_menu_links.forEach((menu_links) => {
  menu_links.addEventListener('mouseover', (e) => {
    e.preventDefault();
    const target_img = e.currentTarget.querySelector('img').src;
    mega_menu_image.src = target_img;
  })
});

/// Accordian start 

const acc_list = document.getElementsByClassName('faq-item');
const acc_content = document.getElementsByClassName('faq-content');
for (let i = 0; i < acc_list.length; i++) {
  acc_list[i].addEventListener('click', () => {
    for (let j = 0; j < acc_content.length; j++) {
      if (i == j) {
        acc_content[j].classList.toggle('active');
        acc_content[j].parentElement.classList.toggle('active');
      }
      else {
        acc_content[j].classList.remove('active');
        acc_content[j].parentElement.classList.remove('active');
      }
    };
  });
}

//////////////////// Apply form popup ///////////////
// if (window.location.pathname === '/careers/') {

const close_btn = document.getElementById('close-btn');
const popup_form = document.querySelectorAll('.popup-with-form');
var apply_form = document.querySelector('.applyform');

window.addEventListener('click', (event) => {

  popup_form.forEach(curr_popup => {
    if ((event.target == close_btn) && (event.target !== curr_popup)) {
      apply_form.classList.remove('active');
      document.body.style.overflow = "auto";
    }
    else if (event.target == curr_popup) {
      apply_form.classList.add('active');
      document.body.style.overflow = "hidden";
    }
  });


});


// }

let mybutton = document.getElementById("scroll-top");

window.onscroll = function () { scrollFunction() };

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    mybutton.style.right = "13px";
  } else {
    mybutton.style.right = "-48px";
  }
}



























/////////////////////////////////////////////////////
///////////////////////////////////////////////////
////////////////////////////////////////////////

// let swip_img = document.querySelector('.swip-image');
// const mega_menu = document.querySelector('.mega-sub-menu');

// console.log(swip_img);
// window.addEventListener('mouseover', (overevent) =>{
//   // console.log(overevent.target);

//       // if(overevent.target.closest(".mega-sub-menu")){
//       //      console.log(overevent.target);
//       // }
// })




// $(document).ready(function(){
//   $(document).mousemove(function(e){
//        if($(".mega-sub-menu:hover").length != 0){

//           if($(e.target).hasClass('mega-menu-link')){
//             var hyperLinkText = "http://xieno.loc/wp-content/uploads/2024/03/" + $(e.target).text().toLowerCase() +".jpg";
//               console.log(hyperLinkText);
//               $('.swip-image').attr("src", hyperLinkText);
//           }
//       } else{
//           console.log("outside div");
//       }
//   });
// });
if (window.location.pathname == '/') {

  const firstsercive_icon = document.querySelector('.service-icon');
  const firsttab_items = document.querySelector('.tab-item');
  firstsercive_icon.classList.add('active');
  firsttab_items.classList.add('active');



  const sercice_icons = document.querySelectorAll('.service-icon');
  const tab_items = document.querySelectorAll('.tab-item');

  sercice_icons.forEach(service_item => {
    service_item.addEventListener('mouseover', opentab)
  });

  function opentab(e) {
    let btnTarget = e.currentTarget;
    tab_items.forEach(tab_item => {
      tab_item.classList.remove('active');
      if (tab_item.id == btnTarget.id) {
        tab_item.classList.add('active');
      }
    })
    sercice_icons.forEach(service_item => {
      service_item.classList.remove('active');
      if (service_item.id == btnTarget.id) {
        service_item.classList.add('active');
      }
    })
  }
}

