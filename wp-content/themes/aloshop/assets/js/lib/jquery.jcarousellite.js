!function(a){a.jCarouselLite={version:"1.1"},a.fn.jCarouselLite=function(b){return b=a.extend({},a.fn.jCarouselLite.options,b||{}),this.each(function(){function r(a){return c||(clearTimeout(q),p=a,b.beforeStart&&b.beforeStart.call(this,x()),b.circular?y(a):z(a),B({start:function(){c=!0},done:function(){b.afterEnd&&b.afterEnd.call(this,x()),b.auto&&w(),c=!1}}),b.circular||A()),!1}function s(){if(c=!1,d=b.vertical?"top":"left",e=b.vertical?"height":"width",g=f.find(">ul"),h=g.find(">li"),n=h.size(),m=n<b.visible?n:b.visible,b.circular){var j=h.slice(n-m).clone(),k=h.slice(0,m).clone();g.prepend(j).append(k),b.start+=m}i=a("li",g),o=i.size(),p=b.start}function t(){f.css("visibility","visible"),i.css({overflow:"hidden",float:b.vertical?"none":"left"}),g.css({margin:"0",padding:"0",position:"relative","list-style":"none","z-index":"1"}),f.css({overflow:"hidden",position:"relative","z-index":"2",left:"0px"}),!b.circular&&b.btnPrev&&0==b.start&&a(b.btnPrev).addClass("disabled")}function u(){j=b.vertical?i.outerHeight(!0):i.outerWidth(!0),k=j*o,l=j*m,i.css({width:i.width(),height:i.height()}),g.css(e,k+"px").css(d,-(p*j)),f.css(e,l+"px")}function v(){b.btnPrev&&a(b.btnPrev).click(function(){return r(p-b.scroll)}),b.btnNext&&a(b.btnNext).click(function(){return r(p+b.scroll)}),b.btnGo&&a.each(b.btnGo,function(c,d){a(d).click(function(){return r(b.circular?m+c:c)})}),b.mouseWheel&&f.mousewheel&&f.mousewheel(function(a,c){return r(c>0?p-b.scroll:p+b.scroll)}),b.auto&&w()}function w(){q=setTimeout(function(){r(p+b.scroll)},b.auto)}function x(){return i.slice(p).slice(0,m)}function y(a){var c;a<=b.start-m-1?(c=a+n+b.scroll,g.css(d,-(c*j)+"px"),p=c-b.scroll,console.log("Before - Positioned at: "+c+" and Moving to: "+p)):a>=o-m+1&&(c=a-n-b.scroll,g.css(d,-(c*j)+"px"),p=c+b.scroll,console.log("After - Positioned at: "+c+" and Moving to: "+p))}function z(a){a<0?p=0:a>o-m&&(p=o-m),console.log("Item Length: "+o+"; To: "+a+"; CalculatedTo: "+p+"; Num Visible: "+m)}function A(){a(b.btnPrev+","+b.btnNext).removeClass("disabled"),a(p-b.scroll<0&&b.btnPrev||p+b.scroll>o-m&&b.btnNext||[]).addClass("disabled")}function B(e){c=!0,g.animate("left"==d?{left:-(p*j)}:{top:-(p*j)},a.extend({duration:b.speed,easing:b.easing},e))}var c,d,e,g,h,i,j,k,l,m,n,o,p,q,f=a(this);s(),t(),u(),v()})},a.fn.jCarouselLite.options={btnPrev:null,btnNext:null,btnGo:null,mouseWheel:!1,auto:null,speed:200,easing:null,vertical:!1,circular:!0,visible:3,start:0,scroll:1,beforeStart:null,afterEnd:null}}(jQuery);