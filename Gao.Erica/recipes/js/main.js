
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  let mybutton = document.getElementById("myBtn");
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}




$(document).ready(function() {
	document.getElementById("change_Display").onclick = function(){
		var x = document.getElementById("show_hide");
		if(x.style.display === 'flex') {
			x.style.display = 'none';
			document.getElementById("change_Display").innerHTML='Show Recipe';
	
		} else {
			x.style.display = 'flex';
			document.getElementById("change_Display").innerHTML='Hide Recipe';

			
		}

	};

});

$(document).ready(function() {
	document.getElementById("frenchtoast_change_Display").onclick = function(){
		var y = document.getElementById("frenchtoast_show_hide");
		if(y.style.display === 'flex') {
			y.style.display = 'none';
			document.getElementById("frenchtoast_change_Display").innerHTML='Show Recipe';
	
		} else {
			y.style.display = 'flex';
			document.getElementById("frenchtoast_change_Display").innerHTML='Hide Recipe';
			
		}

	};

});

$(document).ready(function() {
	document.getElementById("egg_change_Display").onclick = function(){
		var y = document.getElementById("egg_show_hide");
		if(y.style.display === 'flex') {
			y.style.display = 'none';
			document.getElementById("egg_change_Display").innerHTML='Show Recipe';
	
		} else {
			y.style.display = 'flex';
			document.getElementById("egg_change_Display").innerHTML='Hide Recipe';
			
		}

	};

});

$(function() {
	let currentslidenumber = 0;

	$(".arrow-next").on('click', function() {
		currentslidenumber++;
		//console.lg(currentslidenumber);
		if(currentslidenumber>1) {
			currentslidenumber=0;
		}
		showSlide();
	});
	$(".arrow-prev").on('click', function() {
		currentslidenumber--;
		if (currentslidenumber<0) {
			currentslidenumber=1;
		}
		showSlide();
	});

	function showSlide() {
		let calculation=-838*currentslidenumber;
		$(".slideshow-images").animate({marginLeft:calculation},1000);
		
	};
});


