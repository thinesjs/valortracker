jQuery(function(l){l.fn.hScroll=function(e){e=e||120,l(this).bind("DOMMouseScroll mousewheel",function(o){var i=o.originalEvent,t=i.detail?i.detail*-e:i.wheelDelta,n=l(this).scrollLeft();n+=t>0?-e:e,l(this).scrollLeft(n),o.preventDefault()})}});$(document).ready(function(){$("#skinChooser").hScroll(70)});$(document).ready(function(){$("#bundleList").hScroll(70)});
