$(document).ready(function(){
  $('.slider').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 2
    });

  const meIcon = new Vivus(
      'me',
      {
          type: 'sync',
          duration: 200
      }
  );

});
