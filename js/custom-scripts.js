// custom scripts for Beasley Coliseum

// colorbox overrides
			$(document).ready(function(){
            
				//Examples of how to assign the Colorbox event to elements
				$(".link").colorbox({rel:'link', transition:"fade"});
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
			}); // end of colorbox