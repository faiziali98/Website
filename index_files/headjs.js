
	$(document).ready(function() {
          //change the integers below to match the height of your upper dive, which I called
          //banner.  Just add a 1 to the last number.  console.log($(window).scrollTop())
          //to figure out what the scroll position is when exactly you want to fix the nav
          //bar or div or whatever.  I stuck in the console.log for you.  Just remove when
          //you know the position.
          $('#nav_bar').hide();
          $(window).scroll(function () { 
            console.log($(window).scrollTop());
        
            if ($(window).scrollTop() > 450) {
              $('#nav_bar').addClass('navbar-fixed-top');
              $("#nav_bar").fadeIn("slow");
            }
        
            if ($(window).scrollTop() < 451) {
              $('#nav_bar').removeClass('navbar-fixed-top');
              $('#nav_bar').hide();
              $("#nav_bar").fadeOut("fast");
            }
          });
        });
    (function($){
        $.fn.styleddropdown = function(){
            return this.each(function(){
                var obj = $(this)
                obj.find('.field').click(function() { //onclick event, 'list' fadein
                obj.find('.list').fadeIn(400);
                
                $(document).keyup(function(event) { //keypress event, fadeout on 'escape'
                    if(event.keyCode == 27) {
                    obj.find('.list').fadeOut(400);
                    }
                });
                
                obj.find('.list').hover(function(){ },
                    function(){
                        $(this).fadeOut(400);
                    });
                });
                
                obj.find('.list li').click(function() { //onclick event, change field value with selected 'list' item and fadeout 'list'
                obj.find('.field')
                    .val($(this).html())
                    .css({
                        'background':'#fff',
                        'color':'#333'
                    });
                obj.find('.list').fadeOut(400);
                });
            });
        };
    })(jQuery);
    $(function(){
        $('.size').styleddropdown();
    });
    $(function(){
      $('#loginform').submit(function(e){
        return false;
      });
      
      $('#modaltrigger').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
    });
    $(function(){
      
      $('#modaltriggerr').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
    });
    $('.navbar-lower').affix({
      offset: {top: 50}
    });
    $(document).ready(function(){
        $("a[rel^='prettyPhoto']").prettyPhoto();
    });
    $(document).ready(function() {
    $('.parent').click(function() {
        $('.sub-nav').toggleClass('visible');
    });
});
    function emptyElement(x){
        _(x).innerHTML = "";
    }
    function login(){
        var e = document.getElementById("email").value;
        var p = document.getElementById("password").value;
        if(e == "" || p == ""){
            document.getElementById("status").innerHTML = "Fill out all of the form data";
        } else {
            document.getElementById("loginbtn").style.display = "none";
            document.getElementById("status").innerHTML = 'please wait ...';
            var ajax = ajaxObj("POST", "../include/loginm.php");
            ajax.onreadystatechange = function() {
                if(ajaxReturn(ajax) == true) {
                    if(ajax.responseText.includes('try again')){
                        document.getElementById("status").innerHTML = ajax.responseText;
                        document.getElementById("loginbtn").style.display = "block";
                    } else {
                        document.getElementById("status").innerHTML = ajax.responseText;
                        location.reload();
                    }
                }
            }
            ajax.send("email="+e+"&password="+p);
        }
    }
    function logout(){
        var ajax = ajaxObj("POST", "../include/logout.php");
        ajax.onreadystatechange = function() {
            if(ajaxReturn(ajax) == true) {
                location.reload();
            }
        }
        ajax.send();
    }