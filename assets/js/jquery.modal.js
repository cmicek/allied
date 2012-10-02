var modal = (function() {
  var $overlay = $('.modal-background');

  //
  // Animates & opens the modal
  //

  function openModal ($modal){
    
    if($(document).width() < 699) {
      return false;
    }
    //Store the current scroll position because firefox is a prick
    $('html').data('prevScrollPos', $(window).scrollTop());

    $('html,body').addClass('fixed');
    $overlay.height($('body').height()).css('z-index', 10);
    $modal.height($(window).height()).css('z-index', 10);

    setTimeout(function(){
      $overlay.addClass('in');
      $modal.addClass('in');
    },10);
  }

  //
  // Animates the closing of the modal
  //

  function closeModal ($modal){
    
    $('html,body').removeClass('fixed');
    $overlay.removeClass('in');
    $modal.removeClass('in');

    setTimeout(function(){
      $overlay.attr('style', '');
      $modal.attr('style', '');
    },250);
    
    //Only firefox repositions to the top, so this is a test for that
    if($(window).scrollTop() === 0){
      $('body, html').scrollTop($('html').data('prevScrollPos'));
      jQuery.removeData($('html'), 'prevScrollPos')
    }
  }

  //
  // Sets up the event handlers
  //

  function initUIBindings() {
    console.log('toggle modal');
    $('[data-modal-target]').on('click', function(e){
      e.preventDefault();
      var $this = $(this);
      openModal($($this.attr('data-modal-target')));

    });

    $('.modal-close').on('click', function(e){
      e.preventDefault();
      var $this = $(this);
      closeModal($this.parents('.modal-container'));
    });

    $('body').on('keyup', function(e){
      if(e.keyCode === 27){
        closeModal($('.modal-container'));
      }
    });

  }

  //
  // Runs on init
  //

  return {
    init : function(el) {
      initUIBindings();
    }
  };
})();

jQuery(document).ready(function($) {
  modal.init();
});