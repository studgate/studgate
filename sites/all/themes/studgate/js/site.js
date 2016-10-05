$(document).ready(function() {
            if ($('#body .content-b div.view-FAQs div.trigger')) {
                $('#body .content-b div.view-FAQs div.toggle_container').css('display', 'none');
            }

            $('#body .content-b div.view-FAQs h3.trigger').click(function() {
				$(this).toggleClass("active").next().slideToggle("normal");
            });
        });
		function toggle_all_open() {
			$('#body .content-b div.view-FAQst div.toggle_container').show();
			$('#body .content-b div.view-FAQs h3.trigger').not('.active').addClass('active').toggle(function(){
				$(this).addClass('active');
			}, function () {
				$(this).removeClass('active');
			});
		}

		function toggle_all_close() {
			$('#inner #content div.toggle_container').hide();
			$('h2.trigger.active').removeClass('active').toggle(function(){
				$(this).addClass('active');
			}, function () {
				$(this).removeClass('active');
			});
		}

	//===============================================
// EXTERNAL LINKS
//===============================================
function addEvent( obj, type, fn ) {
  if ( obj.attachEvent ) {
    obj['e'+type+fn] = fn;
    obj[type+fn] = function(){obj['e'+type+fn]( window.event );}
    obj.attachEvent( 'on'+type, obj[type+fn] );
  } else
    obj.addEventListener( type, fn, false );
}
function removeEvent( obj, type, fn ) {
  if ( obj.detachEvent ) {
    obj.detachEvent( 'on'+type, obj[type+fn] );
    obj[type+fn] = null;
  } else
    obj.removeEventListener( type, fn, false );
}

/*
JSTarget function by Roger Johansson, www.456bereastreet.com
*/
var JSTarget = {
	init: function(att,val,warning) {
		if (document.getElementById && document.createElement && document.appendChild) {
			var strAtt = ((typeof att == 'undefined') || (att == null)) ? 'class' : att;
			var strVal = ((typeof val == 'undefined') || (val == null)) ? 'non-html' : val;
			var strWarning = ((typeof warning == 'undefined') || (warning == null)) ? ' (opens in a new window)' : warning;
			var oWarning;
			var arrLinks = document.getElementsByTagName('a');
			var oLink;
			var oRegExp = new RegExp("(^|\\s)" + strVal + "(\\s|$)");
			for (var i = 0; i < arrLinks.length; i++) {
				oLink = arrLinks[i];
				if ((strAtt == 'class') && (oRegExp.test(oLink.className)) || (oRegExp.test(oLink.getAttribute(strAtt)))) {
					oWarning = document.createElement("em");
					oWarning.appendChild(document.createTextNode(strWarning));
					oLink.appendChild(oWarning);
					oLink.onclick = JSTarget.openWin;
				}
			}
			oWarning = null;
		}
	},
	openWin: function(e) {
		var event = (!e) ? window.event : e;
		if (event.shiftKey || event.altKey || event.ctrlKey || event.metaKey) return true;
		else {
		    var oWin = window.open(this.getAttribute('href'), '_blank');
			if (oWin) {
				if (oWin.focus) oWin.focus();
				return false;
			}
			oWin = null;
			return true;
		}
	}
};

if(document.getElementById && document.createTextNode)
{
  addEvent(window, 'load', function(){JSTarget.init("class","external","");});
  addEvent(window, 'load', function(){JSTarget.init("rel","external","");});
  addEvent(window, 'load', function(){JSTarget.init("class","pdf","");});
}

// $(document).ready(function() {
	// $('#email').focus(function() {
		// v = $(this).val();
		// if(v == "Enter Your E-mail Address")
			// $(this).val("");
	// });
	// $('#email').blur(function() {
		// v = $(this).val();
		// if(v == "")
			// $(this).val("Enter Your E-mail Address");
	// });

	// Block1 = $("#a1");
	// Block2 = $("#a2");
	// Block3 = $("#a3");
	// Block4 = $("#a4");
	// maxWidth =  426;
	// minWidth = 164;
	// backWidth = 230;
	// var blocks = new Array (Block1,Block2,Block3,Block4);

	// var elements_directions = new Array();
	// elements_directions['a1'] = new Array();
	// elements_directions['a1'][1] = 1;
	// elements_directions['a1'][2] = 0;
	// elements_directions['a1'][3] = 0;
	// elements_directions['a1'][4] = 0;

	// elements_directions['a2'] = new Array();
	// elements_directions['a2'][1] = 0;
	// elements_directions['a2'][2] = 1;
	// elements_directions['a2'][3] = 0;
	// elements_directions['a2'][4] = 0;

	// elements_directions['a3'] = new Array();
	// elements_directions['a3'][1] = 0;
	// elements_directions['a3'][2] = 0;
	// elements_directions['a3'][3] = 1;
	// elements_directions['a3'][4] = 0;

	// elements_directions['a4'] = new Array();
	// elements_directions['a4'][1] = 0;
	// elements_directions['a4'][2] = 0;
	// elements_directions['a4'][3] = 0;
	// elements_directions['a4'][4] = 1;

	// $("#accordion .slide").hover(	
		// function() {
			// var i;
			
			// for (i=1;i<5;i++){
				// if (elements_directions[this.id][i] == 0) {
					// block_to_move = $("#a"+i);
					// $(block_to_move).animate({width: minWidth+"px"}, { queue:false, duration:400 });
				// }
				// if (elements_directions[this.id][i] == 1) {
					// $(this).animate({width: maxWidth+"px"}, { queue:false, duration:400});
				// }
			// }
		// },

		// function() {
			// $(Block1).animate({width: backWidth+"px"}, { queue:false, duration:400 });
			// $(Block2).animate({width: backWidth+"px"}, { queue:false, duration:400 });
			// $(Block3).animate({width: backWidth+"px"}, { queue:false, duration:400 });
			// $(Block4).animate({width: backWidth+"px"}, { queue:false, duration:400 });
		// }
	// );
// });

/*
 * jQuery Nivo Slider v2.1
 * http://nivo.dev7studios.com
 *
 * Copyright 2010, Gilbert Pellegrom
 * Free to use and abuse under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * May 2010 - Pick random effect from specified set of effects by toronegro
 * May 2010 - controlNavThumbsFromRel option added by nerd-sh
 * May 2010 - Do not start nivoRun timer if there is only 1 slide by msielski
 * April 2010 - controlNavThumbs option added by Jamie Thompson (http://jamiethompson.co.uk)
 * March 2010 - manualAdvance option added by HelloPablo (http://hellopablo.co.uk)
 */

(function($) {

	$.fn.nivoSlider = function(options) {

		//Defaults are below
		var settings = $.extend({}, $.fn.nivoSlider.defaults, options);

		return this.each(function() {
			//Useful variables. Play carefully.
			var vars = {
				currentSlide: 0,
				currentImage: '',
				totalSlides: 0,
				randAnim: '',
				running: false,
				paused: false,
				stop:false
			};
		
			//Get this slider
			var slider = $(this);
			slider.data('nivo:vars', vars);
			slider.css('position','relative');
			slider.addClass('nivoSlider');
			
			//Find our slider children
			var kids = slider.children();
			kids.each(function() {
				var child = $(this);
				var link = '';
				if(!child.is('img')){
					if(child.is('a')){
						child.addClass('nivo-imageLink');
						link = child;
					}
					child = child.find('img:first');
				}
				//Get img width & height
                var childWidth = child.width();
                if(childWidth == 0) childWidth = child.attr('width');
                var childHeight = child.height();
                if(childHeight == 0) childHeight = child.attr('height');
                //Resize the slider
                if(childWidth > slider.width()){
                    slider.width(childWidth);
                }
                if(childHeight > slider.height()){
                    slider.height(childHeight);
                }
                if(link != ''){
                    link.css('display','none');
                }
                child.css('display','none');
                vars.totalSlides++;
			});
			
			//Set startSlide
			if(settings.startSlide > 0){
				if(settings.startSlide >= vars.totalSlides) settings.startSlide = vars.totalSlides - 1;
				vars.currentSlide = settings.startSlide;
			}
			
			//Get initial image
			if($(kids[vars.currentSlide]).is('img')){
				vars.currentImage = $(kids[vars.currentSlide]);
			} else {
				vars.currentImage = $(kids[vars.currentSlide]).find('img:first');
			}
			
			//Show initial link
			if($(kids[vars.currentSlide]).is('a')){
				$(kids[vars.currentSlide]).css('display','block');
			}
			
			//Set first background
			slider.css('background','url('+ vars.currentImage.attr('src') +') no-repeat');
			
			//Add initial slices
			for(var i = 0; i < settings.slices; i++){
				var sliceWidth = Math.round(slider.width()/settings.slices);
				if(i == settings.slices-1){
					slider.append(
						$('<div class="nivo-slice"></div>').css({ left:(sliceWidth*i)+'px', width:(slider.width()-(sliceWidth*i))+'px' })
					);
				} else {
					slider.append(
						$('<div class="nivo-slice"></div>').css({ left:(sliceWidth*i)+'px', width:sliceWidth+'px' })
					);
				}
			}
			
			//Create caption
			slider.append(
				$('<div class="nivo-caption"><p></p></div>').css({ display:'none', opacity:settings.captionOpacity })
			);			
			//Process initial  caption
			if(vars.currentImage.attr('title') != ''){
                var title = vars.currentImage.attr('title');
                if(title.substr(0,1) == '#') title = $(title).html();
                $('.nivo-caption p', slider).html(title);					
				$('.nivo-caption', slider).fadeIn(settings.animSpeed);
			}
			
			//In the words of Super Mario "let's a go!"
			var timer = 0;
			if(!settings.manualAdvance && kids.length > 1){
				timer = setInterval(function(){ nivoRun(slider, kids, settings, false); }, settings.pauseTime);
			}

			//Add Direction nav
			if(settings.directionNav){
				slider.append('<div class="nivo-directionNav"><a class="nivo-prevNav">Prev</a><a class="nivo-nextNav">Next</a></div>');
				
				//Hide Direction nav
				if(settings.directionNavHide){
					$('.nivo-directionNav', slider).hide();
					slider.hover(function(){
						$('.nivo-directionNav', slider).show();
					}, function(){
						$('.nivo-directionNav', slider).hide();
					});
				}
				
				$('a.nivo-prevNav', slider).live('click', function(){
					if(vars.running) return false;
					clearInterval(timer);
					timer = '';
					vars.currentSlide-=2;
					nivoRun(slider, kids, settings, 'prev');
				});
				
				$('a.nivo-nextNav', slider).live('click', function(){
					if(vars.running) return false;
					clearInterval(timer);
					timer = '';
					nivoRun(slider, kids, settings, 'next');
				});
			}
			
			//Add Control nav
			if(settings.controlNav){
				var nivoControl = $('<div class="nivo-controlNav"></div>');
				slider.append(nivoControl);
				for(var i = 0; i < kids.length; i++){
					if(settings.controlNavThumbs){
						var child = kids.eq(i);
						if(!child.is('img')){
							child = child.find('img:first');
						}
                        if (settings.controlNavThumbsFromRel) {
                            nivoControl.append('<a class="nivo-control" rel="'+ i +'"><img src="'+ child.attr('rel') + '" alt="" /></a>');
                        } else {
                            nivoControl.append('<a class="nivo-control" rel="'+ i +'"><img src="'+ child.attr('src').replace(settings.controlNavThumbsSearch, settings.controlNavThumbsReplace) +'" alt="" /></a>');
                        }
					} else {
						nivoControl.append('<a class="nivo-control" rel="'+ i +'">'+ (i + 1) +'</a>');
					}
					
				}
				//Set initial active link
				$('.nivo-controlNav a:eq('+ vars.currentSlide +')', slider).addClass('active');
				
				$('.nivo-controlNav a', slider).live('click', function(){
					if(vars.running) return false;
					if($(this).hasClass('active')) return false;
					clearInterval(timer);
					timer = '';
					slider.css('background','url('+ vars.currentImage.attr('src') +') no-repeat');
					vars.currentSlide = $(this).attr('rel') - 1;
					nivoRun(slider, kids, settings, 'control');
				});
			}
			
			//Keyboard Navigation
			if(settings.keyboardNav){
				$(window).keypress(function(event){
					//Left
					if(event.keyCode == '37'){
						if(vars.running) return false;
						clearInterval(timer);
						timer = '';
						vars.currentSlide-=2;
						nivoRun(slider, kids, settings, 'prev');
					}
					//Right
					if(event.keyCode == '39'){
						if(vars.running) return false;
						clearInterval(timer);
						timer = '';
						nivoRun(slider, kids, settings, 'next');
					}
				});
			}
			
			//For pauseOnHover setting
			if(settings.pauseOnHover){
				slider.hover(function(){
					vars.paused = true;
					clearInterval(timer);
					timer = '';
				}, function(){
					vars.paused = false;
					//Restart the timer
					if(timer == '' && !settings.manualAdvance){
						timer = setInterval(function(){ nivoRun(slider, kids, settings, false); }, settings.pauseTime);
					}
				});
			}
			
			//Event when Animation finishes
			slider.bind('nivo:animFinished', function(){ 
				vars.running = false; 
				//Hide child links
				$(kids).each(function(){
					if($(this).is('a')){
						$(this).css('display','none');
					}
				});
				//Show current link
				if($(kids[vars.currentSlide]).is('a')){
					$(kids[vars.currentSlide]).css('display','block');
				}
				//Restart the timer
				if(timer == '' && !vars.paused && !settings.manualAdvance){
					timer = setInterval(function(){ nivoRun(slider, kids, settings, false); }, settings.pauseTime);
				}
				//Trigger the afterChange callback
				settings.afterChange.call(this);
			});
		});
		
		function nivoRun(slider, kids, settings, nudge){
			//Get our vars
			var vars = slider.data('nivo:vars');
			if((!vars || vars.stop) && !nudge) return false;
			
			//Trigger the beforeChange callback
			settings.beforeChange.call(this);
					
			//Set current background before change
			if(!nudge){
				slider.css('background','url('+ vars.currentImage.attr('src') +') no-repeat');
			} else {
				if(nudge == 'prev'){
					slider.css('background','url('+ vars.currentImage.attr('src') +') no-repeat');
				}
				if(nudge == 'next'){
					slider.css('background','url('+ vars.currentImage.attr('src') +') no-repeat');
				}
			}
			vars.currentSlide++;
			if(vars.currentSlide == vars.totalSlides){ 
				vars.currentSlide = 0;
				//Trigger the slideshowEnd callback
				settings.slideshowEnd.call(this);
			}
			if(vars.currentSlide < 0) vars.currentSlide = (vars.totalSlides - 1);
			//Set vars.currentImage
			if($(kids[vars.currentSlide]).is('img')){
				vars.currentImage = $(kids[vars.currentSlide]);
			} else {
				vars.currentImage = $(kids[vars.currentSlide]).find('img:first');
			}
			
			//Set acitve links
			if(settings.controlNav){
				$('.nivo-controlNav a', slider).removeClass('active');
				$('.nivo-controlNav a:eq('+ vars.currentSlide +')', slider).addClass('active');
			}
			
			//Process caption
			if(vars.currentImage.attr('title') != ''){
                var title = vars.currentImage.attr('title');
                if(title.substr(0,1) == '#') title = $(title).html();	
                    
				if($('.nivo-caption', slider).css('display') == 'block'){
					$('.nivo-caption p', slider).fadeOut(settings.animSpeed, function(){
						$(this).html(title);
						$(this).fadeIn(settings.animSpeed);
					});
				} else {
					$('.nivo-caption p', slider).html(title);
				}					
				$('.nivo-caption', slider).fadeIn(settings.animSpeed);
			} else {
				$('.nivo-caption', slider).fadeOut(settings.animSpeed);
			}
			
			//Set new slice backgrounds
			var  i = 0;
			$('.nivo-slice', slider).each(function(){
				var sliceWidth = Math.round(slider.width()/settings.slices);
				$(this).css({ height:'0px', opacity:'0', 
					background: 'url('+ vars.currentImage.attr('src') +') no-repeat -'+ ((sliceWidth + (i * sliceWidth)) - sliceWidth) +'px 0%' });
				i++;
			});
			
			if(settings.effect == 'random'){
				var anims = new Array("sliceDownRight","sliceDownLeft","sliceUpRight","sliceUpLeft","sliceUpDown","sliceUpDownLeft","fold","fade");
				vars.randAnim = anims[Math.floor(Math.random()*(anims.length + 1))];
				if(vars.randAnim == undefined) vars.randAnim = 'fade';
			}
            
            //Run random effect from specified set (eg: effect:'fold,fade')
            if(settings.effect.indexOf(',') != -1){
                var anims = settings.effect.split(',');
                vars.randAnim = $.trim(anims[Math.floor(Math.random()*anims.length)]);
            }
		
			//Run effects
			vars.running = true;
			if(settings.effect == 'sliceDown' || settings.effect == 'sliceDownRight' || vars.randAnim == 'sliceDownRight' ||
				settings.effect == 'sliceDownLeft' || vars.randAnim == 'sliceDownLeft'){
				var timeBuff = 0;
				var i = 0;
				var slices = $('.nivo-slice', slider);
				if(settings.effect == 'sliceDownLeft' || vars.randAnim == 'sliceDownLeft') slices = $('.nivo-slice', slider)._reverse();
				slices.each(function(){
					var slice = $(this);
					slice.css('top','0px');
					if(i == settings.slices-1){
						setTimeout(function(){
							slice.animate({ height:'100%', opacity:'1.0' }, settings.animSpeed, '', function(){ slider.trigger('nivo:animFinished'); });
						}, (100 + timeBuff));
					} else {
						setTimeout(function(){
							slice.animate({ height:'100%', opacity:'1.0' }, settings.animSpeed);
						}, (100 + timeBuff));
					}
					timeBuff += 50;
					i++;
				});
			} 
			else if(settings.effect == 'sliceUp' || settings.effect == 'sliceUpRight' || vars.randAnim == 'sliceUpRight' ||
					settings.effect == 'sliceUpLeft' || vars.randAnim == 'sliceUpLeft'){
				var timeBuff = 0;
				var i = 0;
				var slices = $('.nivo-slice', slider);
				if(settings.effect == 'sliceUpLeft' || vars.randAnim == 'sliceUpLeft') slices = $('.nivo-slice', slider)._reverse();
				slices.each(function(){
					var slice = $(this);
					slice.css('bottom','0px');
					if(i == settings.slices-1){
						setTimeout(function(){
							slice.animate({ height:'100%', opacity:'1.0' }, settings.animSpeed, '', function(){ slider.trigger('nivo:animFinished'); });
						}, (100 + timeBuff));
					} else {
						setTimeout(function(){
							slice.animate({ height:'100%', opacity:'1.0' }, settings.animSpeed);
						}, (100 + timeBuff));
					}
					timeBuff += 50;
					i++;
				});
			} 
			else if(settings.effect == 'sliceUpDown' || settings.effect == 'sliceUpDownRight' || vars.randAnim == 'sliceUpDown' || 
					settings.effect == 'sliceUpDownLeft' || vars.randAnim == 'sliceUpDownLeft'){
				var timeBuff = 0;
				var i = 0;
				var v = 0;
				var slices = $('.nivo-slice', slider);
				if(settings.effect == 'sliceUpDownLeft' || vars.randAnim == 'sliceUpDownLeft') slices = $('.nivo-slice', slider)._reverse();
				slices.each(function(){
					var slice = $(this);
					if(i == 0){
						slice.css('top','0px');
						i++;
					} else {
						slice.css('bottom','0px');
						i = 0;
					}
					
					if(v == settings.slices-1){
						setTimeout(function(){
							slice.animate({ height:'100%', opacity:'1.0' }, settings.animSpeed, '', function(){ slider.trigger('nivo:animFinished'); });
						}, (100 + timeBuff));
					} else {
						setTimeout(function(){
							slice.animate({ height:'100%', opacity:'1.0' }, settings.animSpeed);
						}, (100 + timeBuff));
					}
					timeBuff += 50;
					v++;
				});
			} 
			else if(settings.effect == 'fold' || vars.randAnim == 'fold'){
				var timeBuff = 0;
				var i = 0;
				$('.nivo-slice', slider).each(function(){
					var slice = $(this);
					var origWidth = slice.width();
					slice.css({ top:'0px', height:'100%', width:'0px' });
					if(i == settings.slices-1){
						setTimeout(function(){
							slice.animate({ width:origWidth, opacity:'1.0' }, settings.animSpeed, '', function(){ slider.trigger('nivo:animFinished'); });
						}, (100 + timeBuff));
					} else {
						setTimeout(function(){
							slice.animate({ width:origWidth, opacity:'1.0' }, settings.animSpeed);
						}, (100 + timeBuff));
					}
					timeBuff += 50;
					i++;
				});
			}  
			else if(settings.effect == 'fade' || vars.randAnim == 'fade'){
				var i = 0;
				$('.nivo-slice', slider).each(function(){
					$(this).css('height','100%');
					if(i == settings.slices-1){
						$(this).animate({ opacity:'1.0' }, (settings.animSpeed*2), '', function(){ slider.trigger('nivo:animFinished'); });
					} else {
						$(this).animate({ opacity:'1.0' }, (settings.animSpeed*2));
					}
					i++;
				});
			}
		}
	};
	
	//Default settings
	$.fn.nivoSlider.defaults = {
		effect:'random',
		slices:15,
		animSpeed: 500,
		pauseTime: 7500,
		startSlide:0,
		directionNav:false,
		directionNavHide:true,
		controlNav:true,
		controlNavThumbs:false,
        controlNavThumbsFromRel:false,
		controlNavThumbsSearch:'.jpg',
		controlNavThumbsReplace:'_thumb.jpg',
		keyboardNav:true,
		pauseOnHover:true,
		manualAdvance:false,
		captionOpacity:0.8,
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){}
	};
	
	$.fn._reverse = [].reverse;
	
})(jQuery);

