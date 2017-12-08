		var i = 0;
		var t = 0;
		var path = new Array();
 		path[0] = "Images/1.jpg";
		path[1] = "Images/2.jpg";
		path[2] = "Images/3.jpg";
		path[3] = "Images/4.jpg";
		function swapImage()
		{
  		 	document.slide.src = path[i];
   			if(i < path.length - 1) 
   				i++; 
   			else 
   				i = 0;
   			//clearTimeout(t);
   			t = setTimeout("swapImage()",3000);
		}
		function onClickPrev(){
			clearTimeout(t);
			//alert(t);
			if (i == 0)
				i = path.length - 2;
			else if(i == 1)
				i = path.length - 1;		
			else
				i = i-2;
			document.slide.src = path[i];
			if(i < path.length - 1) 
   				i++; 
   			else 
   				i = 0;
			clearTimeout(t);
			t = setTimeout("swapImage()",3000);
		}
		function onClickNext(){
			clearTimeout(t);
			document.slide.src = path[i];
   			if(i < path.length - 1) 
   				i++; 
   			else 
   				i = 0;
   			clearTimeout(t);
   			t = setTimeout("swapImage()",3000);
		}
		function flip(x){
			var a = document.getElementById(x);
			//a.innerHTML = "TV Show";
		}
		window.onload=swapImage;

