// JavaScript Document



$(function(){
/*addresspage
------------------------------*/		
		$("a.address").click(function(){
			$(".text").fadeIn(3000 , function(){
				$("span").fadeIn(100);
				});
				return false;
		});
		
/*content
-----------------------------*/	
	$(".plus").click(function(){
			$(".content").slideToggle("slow");
		});
	

}); 

/*banner
-----------------------------*/



var picWidth = 1349,
currentSlide = 0,
lastSlide = 0,
autoPlayDelay = 5000,
autoPlayTimer,
autoPlayFn,
stopAutoPlay,
startAutoPlay,
divScrl, ulBtns, liBtns, picsLen, go2slide, nextSlide, prvSlide;

window.onload=function(){
	
	divScrl = document.getElementsByClassName('banner').item(0).getElementsByClassName('scroll').item(0);
	
	ulBtns = document.getElementsByClassName('banner').item(0).getElementsByClassName('btn').item(0);
	liBtns = ulBtns.getElementsByTagName('li');
	
	picsLen = liBtns.length;
	
	divScrl.style.width = (picsLen*picWidth+100) +'px';
	ulBtns.style.width = (35*picsLen+5) +'px'; 

	go2slide = function (n){
		if(n>=picsLen) n=0;
		if(n<0) n=picsLen-1;
		
		divScrl.style.left = -n*picWidth + 'px';

		lastSlide=currentSlide;
		currentSlide=n;

		liBtns.item(lastSlide).className=''; 
		liBtns.item(currentSlide).className='active';
	};
	
	nextSlide = function (){
		go2slide(currentSlide+1)
	};
	prvSlide = function (){
		go2slide(currentSlide-1)
	};

	for(var i=0;i<picsLen;i++){
		(function(j){
			liBtns.item(j).onclick=function(){
				resetAutoPlay(); 
				go2slide(j);
			}
		})(i);
	}
	
	stopAutoPlay = function (){
		if(!autoPlayTimer) return; 
		clearTimeout(autoPlayTimer);
		autoPlayTimer=0;
	};
	startAutoPlay = function (){
		autoPlayTimer = setTimeout(autoPlayFn,autoPlayDelay);
	};
	resetAutoPlay = function (){
		stopAutoPlay();
		startAutoPlay(); 
	};

	(autoPlayFn = function(){
		if(autoPlayTimer) nextSlide();
		 else go2slide(currentSlide);
		startAutoPlay(); 
	})();

}

/*contact us
------------------------------------*/

window.onload = function(){
	
	document.body.className = '';
	
	var myform = document.forms.item(0);
	
	myform.onsubmit = function(){
			
			var ret = true;
			
			for(var i=0;i<myform.elements.length;i++){
				if(myform.elements.item(i).className!='ok'){
					ret = false;
					break;
				}
			}
			
			return ret;
		}
	
	for (var i=0;i<myform.elements.length;i++){
		
		var inp = myform.elements.item(i);
		
		if (inp.type !='text' && inp.type !='textarea') continue;
		
		inp.onfocus = function(){ 
		
			if(this.value == this.defaultValue)  { 
			
			this.value = ''
			
			}
			
		}
		
		inp.onblur = function(){
			
			if(this.value !=''){
				
				this.className = 'ok';
				
				}else{
					
					this.className = 'nok';
					
					} 
				if (this.value == ''){
					this.value =  this.defaultValue;
				}
			}	
			
		}
}
