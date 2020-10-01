

        

$(document).ready(function() {

	$(".my-list").click(function() {
	  
	    collapse = true;
		$(".my-list").removeClass("nav-list-active");
		$(this).addClass("nav-list-active");

		document.getElementById('page-name').innerHTML = this.innerHTML.split('<p class="left">')[1].split('</p>')[0];
	});

	var down = true;
	$(".carret").stop().click(function() {
		if (down) {
		      
			$(this).css({
				"transform": "rotate(180deg)"
			}); down = false;
		} else {
			$(this).css({
				"transform": "rotate(360deg)"
			}); down = true;
		} $(".profile-dropdown").animate({'height': 'toggle'},100);
	});
	
	var collapse = true;
	$(".my-menu-bar").click(function(event) {
	    $(".my-container #chart-1").css({"width": "100%"});
		if(!collapse) {
		       $(".my-collapse-container").animate({"width": "0%"},300);
		       $(".my-container").animate({"width": "96%"},300);
		       
		       $(".my-collapse-container ul li").fadeOut(100);
		    collapse = true;
		} else {
		    $(".my-collapse-container").animate({"width": "12%"},300)
		       $(".my-container").animate({"width": "84%"},300);
		       $(".my-collapse-container ul li").fadeIn();
		    collapse = false;
		}
	});
	
	      /*  var click = true;
              $("#settinghead").click(function(){
              if(click){
                  alert('111');
              $("#myprop").show(300);
              click = false;
              }
              else{
                $("#myprop").hide(300);
                 alert('222');
                click = true;
                }
              });*/
          
        

});





