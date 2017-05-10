let mym = (function(){

  return {  
    //Smooth scrolling
    smoothScrollAhref: () => {
      $('a[href*=\\#]').on('click', function(event){
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
      });
    },

    //Enables click on search-button when enter-key is pressed.
    enterKey:(e) => {
      e = window.event;
      if(e.keyCode == 13){
        document.getElementsByClassName('search-button')[0].click();
        return false;
      }
    },
    //Hides and shows header on scroll up/down.
    detectScrollLength: (leng, id, tagName,className) => {
      $(window).on('scroll', function() {
        st = $(this).scrollTop();

        st <= leng ? document.getElementById(id).classList.remove(className):
          document.getElementById(id).classList.add(className);

        st <= leng ? document.getElementsByTagName(tagName)[0].classList.remove(className):
          document.getElementsByTagName(tagName)[0].classList.add(className);

        console.log(st);
      });
    },
    init: () => {
      mym.detectScrollLength(200, 'nav-title', 'body', 'active');
      mym.detectScrollLength(2800, 'nav-title', 'body', 'active2');
    }
  }
})();

mym.init();
