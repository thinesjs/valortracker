function d(t){var a=new Date;return"<li class='msg_receive'><div class='chat-content'><div class='box bg-light-info'>"+t+"</div></div><div class='chat-time'>"+a.getHours()+":"+a.getMinutes()+"</div></li>"}function n(t){var a=new Date;return"<li class='odd msg_sent'><div class='chat-content'><div class='box bg-light-info'>"+t+"</div><br></div><div class='chat-time'>"+a.getHours()+":"+a.getMinutes()+"</div></li>"}$.fn.AdminSettings=function(t){var a=this.attr("id"),i=(t=$.extend({},{Theme:!0,Layout:"vertical",LogoBg:"skin6",NavbarBg:"skin6",SidebarType:"full",SidebarColor:"skin1",SidebarPosition:!1,HeaderPosition:!1,BoxedLayout:!1},t),{AdminSettingsInit:function(){i.ManageTheme(),i.ManageThemeLayout(),i.ManageThemeBackground(),i.ManageSidebarType(),i.ManageSidebarColor(),i.ManageSidebarPosition(),i.ManageBoxedLayout()},ManageTheme:function(){var e=t.Theme;switch(t.Layout){case"vertical":e==1?($("body").attr("data-theme","dark"),$("#theme-view").prop("checked",!0)):($("#"+a).attr("data-theme","light"),$("body").prop("checked",!1))}},ManageThemeLayout:function(){switch(t.Layout){case"horizontal":$("#"+a).attr("data-layout","horizontal");var e=function(){(0<window.innerWidth?window.innerWidth:this.screen.width)<768?$(".scroll-sidebar").perfectScrollbar({}):$(".scroll-sidebar").perfectScrollbar("destroy")};$(window).ready(e),$(window).on("resize",e);break;case"vertical":$("#"+a).attr("data-layout","vertical"),$(".scroll-sidebar").perfectScrollbar({})}},ManageThemeBackground:function(){var e,r;(e=t.LogoBg)!=null&&e!=""?$("#"+a+" .topbar .top-navbar .navbar-header").attr("data-logobg",e):$("#"+a+" .topbar .top-navbar .navbar-header").attr("data-logobg","skin1"),(r=t.NavbarBg)!=null&&r!=""?($("#"+a+" .topbar .navbar-collapse").attr("data-navbarbg",r),$("#"+a+" .topbar").attr("data-navbarbg",r),$("#"+a).attr("data-navbarbg",r)):($("#"+a+" .topbar .navbar-collapse").attr("data-navbarbg","skin1"),$("#"+a+" .topbar").attr("data-navbarbg","skin1"),$("#"+a).attr("data-navbarbg","skin1"))},ManageSidebarType:function(){switch(t.SidebarType){case"full":$("#"+a).attr("data-sidebartype","full");var e=function(){(0<window.innerWidth?window.innerWidth:this.screen.width)<1170?($("#main-wrapper").attr("data-sidebartype","mini-sidebar"),$("#main-wrapper").addClass("mini-sidebar")):($("#main-wrapper").attr("data-sidebartype","full"),$("#main-wrapper").removeClass("mini-sidebar"))};$(window).ready(e),$(window).on("resize",e),$(".sidebartoggler").on("click",function(){$("#main-wrapper").toggleClass("mini-sidebar"),$("#main-wrapper").hasClass("mini-sidebar")?($(".sidebartoggler").prop("checked",!0),$("#main-wrapper").attr("data-sidebartype","mini-sidebar")):($(".sidebartoggler").prop("checked",!1),$("#main-wrapper").attr("data-sidebartype","full"))});break;case"stylish":$("#"+a).attr("data-sidebartype","stylish"),e=function(){(0<window.innerWidth?window.innerWidth:this.screen.width)<1170?($("#main-wrapper").attr("data-sidebartype","mini-sidebar"),$("#main-wrapper").addClass("mini-sidebar")):($("#main-wrapper").attr("data-sidebartype","stylish"),$("#main-wrapper").removeClass("mini-sidebar"))},$(window).ready(e),$(window).on("resize",e),$(".sidebartoggler").on("click",function(){$("#main-wrapper").toggleClass("mini-sidebar"),$("#main-wrapper").hasClass("mini-sidebar")?($(".sidebartoggler").prop("checked",!0),$("#main-wrapper").attr("data-sidebartype","mini-sidebar")):($(".sidebartoggler").prop("checked",!1),$("#main-wrapper").attr("data-sidebartype","stylish"))});break;case"mini-sidebar":$("#"+a).attr("data-sidebartype","mini-sidebar"),$(".sidebartoggler").on("click",function(){$("#main-wrapper").toggleClass("mini-sidebar"),$("#main-wrapper").hasClass("mini-sidebar")?($(".sidebartoggler").prop("checked",!0),$("#main-wrapper").attr("data-sidebartype","full")):($(".sidebartoggler").prop("checked",!1),$("#main-wrapper").attr("data-sidebartype","mini-sidebar"))});break;case"iconbar":$("#"+a).attr("data-sidebartype","iconbar"),e=function(){(0<window.innerWidth?window.innerWidth:this.screen.width)<1170?($("#main-wrapper").attr("data-sidebartype","mini-sidebar"),$("#main-wrapper").addClass("mini-sidebar")):($("#main-wrapper").attr("data-sidebartype","iconbar"),$("#main-wrapper").removeClass("mini-sidebar"))},$(window).ready(e),$(window).on("resize",e),$(".sidebartoggler").on("click",function(){$("#main-wrapper").toggleClass("mini-sidebar"),$("#main-wrapper").hasClass("mini-sidebar")?($(".sidebartoggler").prop("checked",!0),$("#main-wrapper").attr("data-sidebartype","mini-sidebar")):($(".sidebartoggler").prop("checked",!1),$("#main-wrapper").attr("data-sidebartype","iconbar"))});break;case"overlay":$("#"+a).attr("data-sidebartype","overlay"),e=function(){(0<window.innerWidth?window.innerWidth:this.screen.width)<767?($("#main-wrapper").attr("data-sidebartype","mini-sidebar"),$("#main-wrapper").addClass("mini-sidebar")):($("#main-wrapper").attr("data-sidebartype","overlay"),$("#main-wrapper").removeClass("mini-sidebar"))},$(window).ready(e),$(window).on("resize",e),$(".sidebartoggler").on("click",function(){$("#main-wrapper").toggleClass("show-sidebar"),$("#main-wrapper").hasClass("show-sidebar")})}},ManageSidebarColor:function(){var e;(e=t.SidebarColor)!=null&&e!=""?$("#"+a+" .left-sidebar").attr("data-sidebarbg",e):$("#"+a+" .left-sidebar").attr("data-sidebarbg","skin1")},ManageSidebarPosition:function(){var e=t.SidebarPosition,r=t.HeaderPosition;switch(t.Layout){case"vertical":case"horizontal":e==1?($("#"+a).attr("data-sidebar-position","fixed"),$("#sidebar-position").prop("checked",!0)):($("#"+a).attr("data-sidebar-position","absolute"),$("#sidebar-position").prop("checked",!1)),r==1?($("#"+a).attr("data-header-position","fixed"),$("#header-position").prop("checked",!0)):($("#"+a).attr("data-header-position","relative"),$("#header-position").prop("checked",!1))}},ManageBoxedLayout:function(){var e=t.BoxedLayout;switch(t.Layout){case"vertical":case"horizontal":e==1?($("#"+a).attr("data-boxed-layout","boxed"),$("#boxed-layout").prop("checked",!0)):($("#"+a).attr("data-boxed-layout","full"),$("#boxed-layout").prop("checked",!1))}}});i.AdminSettingsInit()},$(function(){$("#chat"),$("#chat .message-center a").on("click",function(){var t=$(this).find(".mail-contnet h5").text(),a=$(this).find(".user-img img").attr("src"),i=$(this).attr("data-user-id"),e=$(this).find(".profile-status").attr("data-status");if($(this).hasClass("active"))$(this).toggleClass("active"),$(".chat-windows #user-chat"+i).hide();else if($(this).toggleClass("active"),$(".chat-windows #user-chat"+i).length)$(".chat-windows #user-chat"+i).removeClass("mini-chat").show();else{var r=d("I watched the storm, so beautiful yet terrific."),s="<div class='user-chat' id='user-chat"+i+"' data-user-id='"+i+"'>";s+="<div class='chat-head'><img src='"+a+"' data-user-id='"+i+"'><span class='status "+e+"'></span><span class='name'>"+t+"</span><span class='opts'><i class='ti-close closeit' data-user-id='"+i+"'></i><i class='ti-minus mini-chat' data-user-id='"+i+"'></i></span></div>",s+="<div class='chat-body'><ul class='chat-list'>"+(r+=n("That is very deep indeed!"))+"</ul></div>",s+="<div class='chat-footer'><input type='text' data-user-id='"+i+"' placeholder='Type & Enter' class='form-control'></div>",s+="</div>",$(".chat-windows").append(s)}}),$(document).on("click",".chat-windows .user-chat .chat-head .closeit",function(t){var a=$(this).attr("data-user-id");$(".chat-windows #user-chat"+a).hide(),$("#chat .message-center .user-info#chat_user_"+a).removeClass("active")}),$(document).on("click",".chat-windows .user-chat .chat-head img, .chat-windows .user-chat .chat-head .mini-chat",function(t){var a=$(this).attr("data-user-id");$(".chat-windows #user-chat"+a).hasClass("mini-chat")?$(".chat-windows #user-chat"+a).removeClass("mini-chat"):$(".chat-windows #user-chat"+a).addClass("mini-chat")}),$(document).on("keypress",".chat-windows .user-chat .chat-footer input",function(t){if(t.keyCode==13){var a=$(this).attr("data-user-id"),i=$(this).val();i=n(i),$(".chat-windows #user-chat"+a+" .chat-body .chat-list").append(i),$(this).val(""),$(this).focus()}$(".chat-windows #user-chat"+a+" .chat-body").perfectScrollbar({suppressScrollX:!0})}),$(".page-wrapper").on("click",function(t){$(".chat-windows").addClass("hide-chat"),$(".chat-windows").removeClass("show-chat")}),$(".service-panel-toggle").on("click",function(t){$(".chat-windows").addClass("show-chat"),$(".chat-windows").removeClass("hide-chat")})});
