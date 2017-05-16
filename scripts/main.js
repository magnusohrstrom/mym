let mym = (function(){

  return {
    gett:function(){

      let likeButtons = document.getElementsByClassName('like-form');

      var ajaxInsertLike = function() {
        //let postId = this.parentNode.parentNode.id;
        console.log(this);
        $.ajax({
          url:'likes/insertLike.php',
          method: 'post',
          data: 'postId=',//+postId,
          success: function(resp){
            console.log(resp);
          }
        }).done();
      };
      for (var i = 0; i < likeButtons.length; i++) {
        likeButtons[i].addEventListener('submit', function(event) {
          event.preventDefault();
          console.log(this);
          ajaxInsertLike();
        });
      }




    },
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

    changeOnId: (leng, id, className) => {
      st <= leng ? document.getElementById(id).classList.remove(className):
        document.getElementById(id).classList.add(className);
    },
    //Hides and shows header on scroll up/down.
    detectScrollLength: (leng, id1, id2, tagName,className) => {
      $(window).on('scroll', function() {
        st = $(this).scrollTop();
        mym.changeOnId(leng,id1,className);
        mym.changeOnId(leng,id2,className);

        st <= leng ? document.getElementsByTagName(tagName)[0].classList.remove(className):
          document.getElementsByTagName(tagName)[0].classList.add(className);

        console.log(st);
      });
    },

    detectScrollOnMultipleElem: (leng, className, cl) => {

      $(window).on('scroll', function() {
        st = $(this).scrollTop();
        let arr = document.getElementsByClassName(className);
        if(st <= leng){
          for (var i = 0; i < arr.length; i++) {
            arr[i].classList.remove(cl);
          }
        }
        else{
          for (var i = 0; i < arr.length; i++) {
            arr[i].classList.add(cl);
          }
        }
      });
    },

    showFormOnClick: (id,form) => {

      if(document.getElementById(id)){document.getElementById(id).addEventListener('click',function(){
        document.getElementById(form).classList.toggle('active');
      });}

    },
    init: () => {

      mym.detectScrollLength(200, 'nav-title','nav-bar','body', 'active');
      mym.detectScrollOnMultipleElem(2800,'post-section','active');
      mym.detectScrollLength(2800, 'nav-title','nav-bar' ,'body', 'active2');
      mym.smoothScrollAhref();
      mym.showFormOnClick('sign-up','sign-up-form');

      //mym.gett();
    }
  }
})();

mym.init();
