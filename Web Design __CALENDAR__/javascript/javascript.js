
var imagecount = 1;
var total = 3;
 // This is for slide 1:
	function slide(x){
		var images = document.getElementById('img');
		imagecount = imagecount + 1;
		if (imagecount > total){
			imagecount = 1;
		}
		else if (imagecount < 1){
			imagecount= total;
		}
		images.src = "images/slide1/img" + imagecount + ".jpg";
	}
	window.setInterval (function slide(x){
		var images = document.getElementById('img');
		imagecount = imagecount + 1;
		if (imagecount > total){
			imagecount = 1;
		}
		else if (imagecount < 1){
			imagecount= total;
		}
		images.src = "images/slide1/img" + imagecount + ".jpg";
	}, 3000);
 // This is for slide 2 in compact section:
	function slide2(x){
		var images = document.getElementById('img2');
		imagecount = imagecount + 1;
		if (imagecount > total){
			imagecount = 1;
		}
		else if (imagecount < 1){
			imagecount= total;
		}
		images.src = "images/class-a/img" + imagecount + ".jpg";
	}
	window.setInterval (function slide2(x){
		var images = document.getElementById('img2');
		imagecount = imagecount + 1;
		if (imagecount > total){
			imagecount = 1;
		}
		else if (imagecount < 1){
			imagecount= total;
		}
		images.src = "images/class-a/img" + imagecount + ".jpg";
	}, 3000);
 // Scroll to Table:	
	function toTable1(){
		window.scrollTo(0, 800);
	}
	function toTable2(){
		window.scrollTo(0, 1400);
	}
	function toTable3(){
		window.scrollTo(0, 1800);
	}
	

