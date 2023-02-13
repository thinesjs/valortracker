function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function setThemeView() {
    let themeSetting = getCookie("theme");

    // window.alert(themeSetting);

    if (themeSetting == "dark") {
        $("#theme-view").prop('checked', true);
        $("body").attr("data-theme", "dark");
        // skins
        $("#main-wrapper, header, .navbar-collapse").attr(
            "data-navbarbg",
            "skin5"
        );
        $(".topbar > .navbar")
            .removeClass("navbar-light")
            .addClass("navbar-dark");
        $(".navbar-header").attr("data-logobg", "skin5");
        $(".left-sidebar").attr("data-sidebarbg", "skin5");
        //$("#theme-view").prop("checked", !0);
    }else if (themeSetting == "light"){
        $("#theme-view").prop('checked', false);
        $("body").attr("data-theme", "light");

        //$("body").prop("checked", !1);
        // skins
        $("#main-wrapper, header, .navbar-collapse").attr(
            "data-navbarbg",
            "skin6"
        );
        $(".topbar > .navbar")
            .removeClass("navbar-dark")
            .addClass("navbar-light");
        $(".navbar-header").attr("data-logobg", "skin6");
        $(".left-sidebar").attr("data-sidebarbg", "skin6");
    }
}

$(function () {
  "use strict";

  $("#main-wrapper").AdminSettings({
    Theme: false, // this can be true or false ( true means dark and false means light ),
    Layout: "vertical",
    LogoBg: "skin6", // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
    NavbarBg: "skin6", // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
    SidebarType: "mini-sidebar", // You can change it full / mini-sidebar / stylish / overlay
    SidebarColor: "skin6", // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
    SidebarPosition: true, // it can be true / false ( true means Fixed and false means absolute )
    HeaderPosition: true, // it can be true / false ( true means Fixed and false means absolute )
    BoxedLayout: false, // it can be true / false ( true means Boxed and false means Fluid )
  });

    setThemeView();
});
