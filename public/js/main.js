 $(document).ready(function () {
     AOS.init();
     $(".owl-carousel#spoonCarousel").owlCarousel({
         items: 6,
         margin: 15,
         loop: true,
         nav: true,
         navClass: ['col-sm-1', 'col-sm-offset-10 col-sm-1'],
         autoplay: false,
         mouseDrag: false,
         navText: [' <span class="glyphicon glyphicon-chevron-left"></span>', ' <span class="glyphicon glyphicon-chevron-right"></span>']
     });
     const ps = new PerfectScrollbar('.section2 .about-us-content', {
         wheelSpeed: 2,
         wheelPropagation: true,
         minScrollbarLength: 20,

     });
     const ps2 = new PerfectScrollbar('.section6 .herbs-bar', {
         wheelSpeed: 2,
         wheelPropagation: true,
         minScrollbarLength: 20,
     });
     $("#menuClick").on('click', function (event) {
         event.preventDefault();
         var hash = this.hash;
         $('html, body').animate({
             scrollTop: $(hash).offset().top
         }, 1000, function () {
             window.location.hash = hash;
         });
     });
     $('.section2 button.btn-up').click(function(){
         $('.section2 .about-us-content').scrollTop($('.section2 .about-us-content').scrollTop()-20);
     });
     $('.section2 button.btn-down').click(function(){
         $('.section2 .about-us-content').scrollTop($('.section2 .about-us-content').scrollTop()+20);
     });
    
}); 
 $('.carousel').carousel({
     interval: false
 });
 $('.navbar-nav a').on('click', function () {
     $('.navbar-nav').find('li.active').removeClass('active');
     $(this).parent('li').addClass('active');
 });


 //spoon effect

 $(document).on('click', '.owl-item>div>li>a', function () {
     // alert($(this).attr("href")); 
     $('.owl-item>div>li>a').removeClass('spoonDown');
     $(this).addClass('spoonDown');

     var target = $('.owl-item>div>li>a.spoonDown').attr("href").split("-", 1);
     var target2 = $.trim(target);
     $(' .section4 .content div').hide();
     $(target2).show();
 });

 $(document).on('click', '.section6 .herb-row .herb-img a', function () {
     $('.section6 .herb-row .herb-img a').removeClass('zoom-img');
     $('.section6 .herb-row h3.herb-name').show();
     $(this).addClass('zoom-img');
     var linkHerb = $('.section6 .herb-img a.zoom-img').attr("href");
     var targetHerb = $('.section6 .herb-img a.zoom-img').attr("href").split("-", 1);
     var targetHerb2 = $.trim(targetHerb);
     $('.section6 .herb-row h3.herb-name[data-name^="' + targetHerb + '"]').hide();
     $('.section6 .contect-note-book').hide();
     $(targetHerb2).show();
 });