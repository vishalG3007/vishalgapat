/*$('ul.nav').find('a').click(function(){
    var $href = $(this).attr('href');
    var $anchor = $($href).offset();
    $('body').animate({ scrollTop: $anchor.top });
    return false;
});*/

$('#aboutsection').click(function(e){
    $(document).scrollTop(100)
  });