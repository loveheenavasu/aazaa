$(document).ready(function(){
    grecaptcha.ready(function() {
      grecaptcha.execute('put your site key here', {action: 'homepage'}).then(function(token) {
        // pass the token to the backend script for verification
      });
    });
    changeBodyPadding();

});
$(window).resize(function(){
    changeBodyPadding()
});

function changeBodyPadding(){
    $('body').css('padding-top', ($('#TopNav').outerHeight() + 10) );
}

var image_counter = 1;
setInterval(function() {
    $("link[rel='icon']").remove();
    $("link[rel='shortcut icon']").remove();
    $("head").append('<link rel="icon" href="/images/favicons/' + image_counter + '.gif" type="image/gif">');
    if(image_counter === 5) {
        image_counter = 1;
    } else {
        image_counter++;
    }
}, 800);


function openMainMenu(menu) {
    $('body').toggleClass('lock-position');
    $(menu).toggleClass('open');
}


$('.favoriteAction').on('click',function () {
    var $this = $(this);
    $.ajax({
       url: Routing.generate('account_favorites_toggle'),
       type: 'POST',
       data: {
           'pageContentId': $this.data('favorite')
       },
       success: function(response){
           if(response.status){
               if(response.added){
                   if($this.data('reload')){
                       location.reload();
                   }
                   $this.addClass('fav-active');
                   $this.find('span').html('Favoriet!');
                   $this.find('.fa-star').removeClass('far').addClass('fas')
               }
               else {
                   if($this.data('reload')){
                       location.reload();
                   }
                   $this.removeClass('fav-active');
                   $this.find('span').html('Favoriet?');
                   $this.find('.fa-star').removeClass('fas').addClass('far')
               }
           }
           else {
               location.reload();
           }
       }
    });
});