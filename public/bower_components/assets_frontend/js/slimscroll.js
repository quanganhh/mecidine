(function(d){jQuery.fn.extend({slimScroll:function(p){var a=ops=d.extend({wheelStep:20,width:"auto",height:"250px",size:"7px",color:"#000",position:"right",distance:"1px",start:"top",opacity:0.4,alwaysVisible:!1,disableFadeOut:!1,railVisible:!1,railColor:"#333",railOpacity:"0.2",railClass:"slimScrollRail",barClass:"slimScrollBar",wrapperClass:"slimScrollDiv",allowPageScroll:!1,scroll:0},p);this.each(function(){function i(a,d,e){var f=a;d&&(f=parseInt(c.css("top"))+a*C/100*c.outerHeight(),d=b.outerHeight()-
c.outerHeight(),f=Math.min(Math.max(f,0),d),c.css({top:f+"px"}));g=parseInt(c.css("top"))/(b.outerHeight()-c.outerHeight());f=g*(b[0].scrollHeight-b.outerHeight());e&&(f=a,a=f/b[0].scrollHeight*b.outerHeight(),c.css({top:a+"px"}));b.scrollTop(f);q();j()}function w(){r=Math.max(b.outerHeight()/b[0].scrollHeight*b.outerHeight(),p);c.css({height:r+"px"})}function q(){w();clearTimeout(x);g==~~g&&(l=D,y!=g&&b.trigger("slimscroll",0==~~g?"top":"bottom"));y=g;r>=b.outerHeight()?l=!0:(c.stop(!0,!0).fadeIn("fast"),
z&&h.stop(!0,!0).fadeIn("fast"))}function j(){m||(x=setTimeout(function(){if((!E||!n)&&!s&&!t)c.fadeOut("slow"),h.fadeOut("slow")},1E3))}var n,s,t,x,r,g,y,p=30,l=!1,C=parseInt(a.wheelStep),k=a.width,A=a.height,e=a.size,F=a.color,G=a.position,B=a.distance,u=a.start,H=a.opacity,E=a.disableFadeOut,m=a.alwaysVisible,z=a.railVisible,I=a.railColor,J=a.railOpacity,D=a.allowPageScroll,o=a.scroll,b=d(this);if(b.parent().hasClass("slimScrollDiv"))o&&(c=b.parent().find(".slimScrollBar"),h=b.parent().find(".slimScrollRail"),
i(b.scrollTop()+parseInt(o),!1,!0));else{o=d("<div></div>").addClass(a.wrapperClass).css({position:"relative",overflow:"hidden",width:k,height:A});b.css({overflow:"hidden",width:k,height:A});var h=d("<div></div>").addClass(a.railClass).css({width:e,height:"100%",position:"absolute",top:0,display:m&&z?"block":"none","border-radius":e,background:I,opacity:J,zIndex:90}),c=d("<div></div>").addClass(a.barClass).css({background:F,width:e,position:"absolute",top:0,opacity:H,display:m?"block":"none","border-radius":e,
BorderRadius:e,MozBorderRadius:e,WebkitBorderRadius:e,zIndex:99}),k="right"==G?{right:B}:{left:B};h.css(k);c.css(k);b.wrap(o);b.parent().append(c);b.parent().append(h);c.draggable({axis:"y",containment:"parent",start:function(){t=!0},stop:function(){t=!1;j()},drag:function(){i(0,d(this).position().top,!1)}});h.hover(function(){q()},function(){j()});c.hover(function(){s=!0},function(){s=!1});b.hover(function(){n=!0;q();j()},function(){n=!1;j()});var v=function(a){if(n){var a=a||window.event,b=0;a.wheelDelta&&
(b=-a.wheelDelta/120);a.detail&&(b=a.detail/3);i(b,!0);a.preventDefault&&!l&&a.preventDefault();l||(a.returnValue=!1)}};(function(){window.addEventListener?(this.addEventListener("DOMMouseScroll",v,!1),this.addEventListener("mousewheel",v,!1)):document.attachEvent("onmousewheel",v)})();w();"bottom"==u?(c.css({top:b.outerHeight()-c.outerHeight()}),i(0,!0)):"object"==typeof u&&(i(d(u).position().top,null,!0),m||c.hide())}});return this}});jQuery.fn.extend({slimscroll:jQuery.fn.slimScroll})})(jQuery);