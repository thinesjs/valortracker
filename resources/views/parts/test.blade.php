<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, material admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, material design, FlexileDash bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Flexy is powerful and clean admin dashboard template, inpired from Bootstrap Design"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>FlexileDash Bootstrap Dashboard - by Wrappixel</title>
    <!-- Favicon icon -->
    <link
      rel="stylesheet"
      href="../../assets/libs/apexcharts/dist/apexcharts.css"
    />
    <!-- Custom CSS -->
    @vite('resources/css/app.css')
    @vite('resources/css/style.min.css')
    <style type="text/css">.apexcharts-canvas {
      position: relative;
      user-select: none;
      /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
    }


    /* scrollbar is not visible by default for legend, hence forcing the visibility */
    .apexcharts-canvas ::-webkit-scrollbar {
      -webkit-appearance: none;
      width: 6px;
    }

    .apexcharts-canvas ::-webkit-scrollbar-thumb {
      border-radius: 4px;
      background-color: rgba(0, 0, 0, .5);
      box-shadow: 0 0 1px rgba(255, 255, 255, .5);
      -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
    }


    .apexcharts-inner {
      position: relative;
    }

    .apexcharts-text tspan {
      font-family: inherit;
    }

    .legend-mouseover-inactive {
      transition: 0.15s ease all;
      opacity: 0.20;
    }

    .apexcharts-series-collapsed {
      opacity: 0;
    }

    .apexcharts-tooltip {
      border-radius: 5px;
      box-shadow: 2px 2px 6px -4px #999;
      cursor: default;
      font-size: 14px;
      left: 62px;
      opacity: 0;
      pointer-events: none;
      position: absolute;
      top: 20px;
      display: flex;
      flex-direction: column;
      overflow: hidden;
      white-space: nowrap;
      z-index: 12;
      transition: 0.15s ease all;
    }

    .apexcharts-tooltip.apexcharts-active {
      opacity: 1;
      transition: 0.15s ease all;
    }

    .apexcharts-tooltip.apexcharts-theme-light {
      border: 1px solid #e3e3e3;
      background: rgba(255, 255, 255, 0.96);
    }

    .apexcharts-tooltip.apexcharts-theme-dark {
      color: #fff;
      background: rgba(30, 30, 30, 0.8);
    }

    .apexcharts-tooltip * {
      font-family: inherit;
    }


    .apexcharts-tooltip-title {
      padding: 6px;
      font-size: 15px;
      margin-bottom: 4px;
    }

    .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
      background: #ECEFF1;
      border-bottom: 1px solid #ddd;
    }

    .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
      background: rgba(0, 0, 0, 0.7);
      border-bottom: 1px solid #333;
    }

    .apexcharts-tooltip-text-value,
    .apexcharts-tooltip-text-z-value {
      display: inline-block;
      font-weight: 600;
      margin-left: 5px;
    }

    .apexcharts-tooltip-text-z-label:empty,
    .apexcharts-tooltip-text-z-value:empty {
      display: none;
    }

    .apexcharts-tooltip-text-value,
    .apexcharts-tooltip-text-z-value {
      font-weight: 600;
    }

    .apexcharts-tooltip-marker {
      width: 12px;
      height: 12px;
      position: relative;
      top: 0px;
      margin-right: 10px;
      border-radius: 50%;
    }

    .apexcharts-tooltip-series-group {
      padding: 0 10px;
      display: none;
      text-align: left;
      justify-content: left;
      align-items: center;
    }

    .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
      opacity: 1;
    }

    .apexcharts-tooltip-series-group.apexcharts-active,
    .apexcharts-tooltip-series-group:last-child {
      padding-bottom: 4px;
    }

    .apexcharts-tooltip-series-group-hidden {
      opacity: 0;
      height: 0;
      line-height: 0;
      padding: 0 !important;
    }

    .apexcharts-tooltip-y-group {
      padding: 6px 0 5px;
    }

    .apexcharts-tooltip-box, .apexcharts-custom-tooltip {
      padding: 4px 8px;
    }

    .apexcharts-tooltip-boxPlot {
      display: flex;
      flex-direction: column-reverse;
    }

    .apexcharts-tooltip-box>div {
      margin: 4px 0;
    }

    .apexcharts-tooltip-box span.value {
      font-weight: bold;
    }

    .apexcharts-tooltip-rangebar {
      padding: 5px 8px;
    }

    .apexcharts-tooltip-rangebar .category {
      font-weight: 600;
      color: #777;
    }

    .apexcharts-tooltip-rangebar .series-name {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
    }

    .apexcharts-xaxistooltip {
      opacity: 0;
      padding: 9px 10px;
      pointer-events: none;
      color: #373d3f;
      font-size: 13px;
      text-align: center;
      border-radius: 2px;
      position: absolute;
      z-index: 10;
      background: #ECEFF1;
      border: 1px solid #90A4AE;
      transition: 0.15s ease all;
    }

    .apexcharts-xaxistooltip.apexcharts-theme-dark {
      background: rgba(0, 0, 0, 0.7);
      border: 1px solid rgba(0, 0, 0, 0.5);
      color: #fff;
    }

    .apexcharts-xaxistooltip:after,
    .apexcharts-xaxistooltip:before {
      left: 50%;
      border: solid transparent;
      content: " ";
      height: 0;
      width: 0;
      position: absolute;
      pointer-events: none;
    }

    .apexcharts-xaxistooltip:after {
      border-color: rgba(236, 239, 241, 0);
      border-width: 6px;
      margin-left: -6px;
    }

    .apexcharts-xaxistooltip:before {
      border-color: rgba(144, 164, 174, 0);
      border-width: 7px;
      margin-left: -7px;
    }

    .apexcharts-xaxistooltip-bottom:after,
    .apexcharts-xaxistooltip-bottom:before {
      bottom: 100%;
    }

    .apexcharts-xaxistooltip-top:after,
    .apexcharts-xaxistooltip-top:before {
      top: 100%;
    }

    .apexcharts-xaxistooltip-bottom:after {
      border-bottom-color: #ECEFF1;
    }

    .apexcharts-xaxistooltip-bottom:before {
      border-bottom-color: #90A4AE;
    }

    .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
      border-bottom-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
      border-bottom-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-top:after {
      border-top-color: #ECEFF1
    }

    .apexcharts-xaxistooltip-top:before {
      border-top-color: #90A4AE;
    }

    .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
      border-top-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
      border-top-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip.apexcharts-active {
      opacity: 1;
      transition: 0.15s ease all;
    }

    .apexcharts-yaxistooltip {
      opacity: 0;
      padding: 4px 10px;
      pointer-events: none;
      color: #373d3f;
      font-size: 13px;
      text-align: center;
      border-radius: 2px;
      position: absolute;
      z-index: 10;
      background: #ECEFF1;
      border: 1px solid #90A4AE;
    }

    .apexcharts-yaxistooltip.apexcharts-theme-dark {
      background: rgba(0, 0, 0, 0.7);
      border: 1px solid rgba(0, 0, 0, 0.5);
      color: #fff;
    }

    .apexcharts-yaxistooltip:after,
    .apexcharts-yaxistooltip:before {
      top: 50%;
      border: solid transparent;
      content: " ";
      height: 0;
      width: 0;
      position: absolute;
      pointer-events: none;
    }

    .apexcharts-yaxistooltip:after {
      border-color: rgba(236, 239, 241, 0);
      border-width: 6px;
      margin-top: -6px;
    }

    .apexcharts-yaxistooltip:before {
      border-color: rgba(144, 164, 174, 0);
      border-width: 7px;
      margin-top: -7px;
    }

    .apexcharts-yaxistooltip-left:after,
    .apexcharts-yaxistooltip-left:before {
      left: 100%;
    }

    .apexcharts-yaxistooltip-right:after,
    .apexcharts-yaxistooltip-right:before {
      right: 100%;
    }

    .apexcharts-yaxistooltip-left:after {
      border-left-color: #ECEFF1;
    }

    .apexcharts-yaxistooltip-left:before {
      border-left-color: #90A4AE;
    }

    .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
      border-left-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
      border-left-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-right:after {
      border-right-color: #ECEFF1;
    }

    .apexcharts-yaxistooltip-right:before {
      border-right-color: #90A4AE;
    }

    .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
      border-right-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
      border-right-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip.apexcharts-active {
      opacity: 1;
    }

    .apexcharts-yaxistooltip-hidden {
      display: none;
    }

    .apexcharts-xcrosshairs,
    .apexcharts-ycrosshairs {
      pointer-events: none;
      opacity: 0;
      transition: 0.15s ease all;
    }

    .apexcharts-xcrosshairs.apexcharts-active,
    .apexcharts-ycrosshairs.apexcharts-active {
      opacity: 1;
      transition: 0.15s ease all;
    }

    .apexcharts-ycrosshairs-hidden {
      opacity: 0;
    }

    .apexcharts-selection-rect {
      cursor: move;
    }

    .svg_select_boundingRect, .svg_select_points_rot {
      pointer-events: none;
      opacity: 0;
      visibility: hidden;
    }
    .apexcharts-selection-rect + g .svg_select_boundingRect,
    .apexcharts-selection-rect + g .svg_select_points_rot {
      opacity: 0;
      visibility: hidden;
    }

    .apexcharts-selection-rect + g .svg_select_points_l,
    .apexcharts-selection-rect + g .svg_select_points_r {
      cursor: ew-resize;
      opacity: 1;
      visibility: visible;
    }

    .svg_select_points {
      fill: #efefef;
      stroke: #333;
      rx: 2;
    }

    .apexcharts-svg.apexcharts-zoomable.hovering-zoom {
      cursor: crosshair
    }

    .apexcharts-svg.apexcharts-zoomable.hovering-pan {
      cursor: move
    }

    .apexcharts-zoom-icon,
    .apexcharts-zoomin-icon,
    .apexcharts-zoomout-icon,
    .apexcharts-reset-icon,
    .apexcharts-pan-icon,
    .apexcharts-selection-icon,
    .apexcharts-menu-icon,
    .apexcharts-toolbar-custom-icon {
      cursor: pointer;
      width: 20px;
      height: 20px;
      line-height: 24px;
      color: #6E8192;
      text-align: center;
    }

    .apexcharts-zoom-icon svg,
    .apexcharts-zoomin-icon svg,
    .apexcharts-zoomout-icon svg,
    .apexcharts-reset-icon svg,
    .apexcharts-menu-icon svg {
      fill: #6E8192;
    }

    .apexcharts-selection-icon svg {
      fill: #444;
      transform: scale(0.76)
    }

    .apexcharts-theme-dark .apexcharts-zoom-icon svg,
    .apexcharts-theme-dark .apexcharts-zoomin-icon svg,
    .apexcharts-theme-dark .apexcharts-zoomout-icon svg,
    .apexcharts-theme-dark .apexcharts-reset-icon svg,
    .apexcharts-theme-dark .apexcharts-pan-icon svg,
    .apexcharts-theme-dark .apexcharts-selection-icon svg,
    .apexcharts-theme-dark .apexcharts-menu-icon svg,
    .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
      fill: #f3f4f5;
    }

    .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
    .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
    .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
      fill: #008FFB;
    }

    .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
    .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
    .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
    .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
    .apexcharts-theme-light .apexcharts-reset-icon:hover svg,
    .apexcharts-theme-light .apexcharts-menu-icon:hover svg {
      fill: #333;
    }

    .apexcharts-selection-icon,
    .apexcharts-menu-icon {
      position: relative;
    }

    .apexcharts-reset-icon {
      margin-left: 5px;
    }

    .apexcharts-zoom-icon,
    .apexcharts-reset-icon,
    .apexcharts-menu-icon {
      transform: scale(0.85);
    }

    .apexcharts-zoomin-icon,
    .apexcharts-zoomout-icon {
      transform: scale(0.7)
    }

    .apexcharts-zoomout-icon {
      margin-right: 3px;
    }

    .apexcharts-pan-icon {
      transform: scale(0.62);
      position: relative;
      left: 1px;
      top: 0px;
    }

    .apexcharts-pan-icon svg {
      fill: #fff;
      stroke: #6E8192;
      stroke-width: 2;
    }

    .apexcharts-pan-icon.apexcharts-selected svg {
      stroke: #008FFB;
    }

    .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
      stroke: #333;
    }

    .apexcharts-toolbar {
      position: absolute;
      z-index: 11;
      max-width: 176px;
      text-align: right;
      border-radius: 3px;
      padding: 0px 6px 2px 6px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .apexcharts-menu {
      background: #fff;
      position: absolute;
      top: 100%;
      border: 1px solid #ddd;
      border-radius: 3px;
      padding: 3px;
      right: 10px;
      opacity: 0;
      min-width: 110px;
      transition: 0.15s ease all;
      pointer-events: none;
    }

    .apexcharts-menu.apexcharts-menu-open {
      opacity: 1;
      pointer-events: all;
      transition: 0.15s ease all;
    }

    .apexcharts-menu-item {
      padding: 6px 7px;
      font-size: 12px;
      cursor: pointer;
    }

    .apexcharts-theme-light .apexcharts-menu-item:hover {
      background: #eee;
    }

    .apexcharts-theme-dark .apexcharts-menu {
      background: rgba(0, 0, 0, 0.7);
      color: #fff;
    }

    @media screen and (min-width: 768px) {
      .apexcharts-canvas:hover .apexcharts-toolbar {
        opacity: 1;
      }
    }

    .apexcharts-datalabel.apexcharts-element-hidden {
      opacity: 0;
    }

    .apexcharts-pie-label,
    .apexcharts-datalabels,
    .apexcharts-datalabel,
    .apexcharts-datalabel-label,
    .apexcharts-datalabel-value {
      cursor: default;
      pointer-events: none;
    }

    .apexcharts-pie-label-delay {
      opacity: 0;
      animation-name: opaque;
      animation-duration: 0.3s;
      animation-fill-mode: forwards;
      animation-timing-function: ease;
    }

    .apexcharts-canvas .apexcharts-element-hidden {
      opacity: 0;
    }

    .apexcharts-hide .apexcharts-series-points {
      opacity: 0;
    }

    .apexcharts-gridline,
    .apexcharts-annotation-rect,
    .apexcharts-tooltip .apexcharts-marker,
    .apexcharts-area-series .apexcharts-area,
    .apexcharts-line,
    .apexcharts-zoom-rect,
    .apexcharts-toolbar svg,
    .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
    .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
    .apexcharts-radar-series path,
    .apexcharts-radar-series polygon {
      pointer-events: none;
    }


    /* markers */

    .apexcharts-marker {
      transition: 0.15s ease all;
    }

    @keyframes opaque {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }


    /* Resize generated styles */

    @keyframes resizeanim {
      from {
        opacity: 0;
      }
      to {
        opacity: 0;
      }
    }

    .resize-triggers {
      animation: 1ms resizeanim;
      visibility: hidden;
      opacity: 0;
    }

    .resize-triggers,
    .resize-triggers>div,
    .contract-trigger:before {
      content: " ";
      display: block;
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      overflow: hidden;
    }

    .resize-triggers>div {
      background: #eee;
      overflow: auto;
    }

    .contract-trigger:before {
      width: 200%;
      height: 200%;
    }</style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ri-close-line ri-menu-2-line fs-6"></i
            ></a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="index.html">
              <!-- Logo icon -->
              <b class="logo-icon">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <img
                  src="../../assets/images/logo-icon.png"
                  alt="homepage"
                  class="dark-logo"
                />
                <!-- Light Logo icon -->
                <img
                  src="../../assets/images/logo-light-icon.png"
                  alt="homepage"
                  class="light-logo"
                />
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text">
                <!-- dark Logo text -->
                <img
                  src="../../assets/images/logo-text.png"
                  alt="homepage"
                  class="dark-logo"
                />
                <!-- Light Logo text -->
                <img
                  src="../../assets/images/logo-light-text.png"
                  class="light-logo"
                  alt="homepage"
                />
              </span>
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a
              class="topbartoggler d-block d-md-none waves-effect waves-light"
              href="javascript:void(0)"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
              ><i class="ri-more-line fs-6"></i
            ></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav me-auto">
              <!-- This is  -->
              <li class="nav-item">
                <a
                  class="nav-link sidebartoggler d-none d-md-block"
                  href="javascript:void(0)"
                  ><i data-feather="menu"></i
                ></a>
              </li>
              <!-- search -->
              <li class="nav-item search-box">
                <a class="nav-link" href="javascript:void(0)">
                  <i data-feather="search"></i>
                </a>
                <form class="app-search position-absolute">
                  <input
                    type="text"
                    class="form-control border-0"
                    placeholder="Search &amp; enter"
                  />
                  <a class="srh-btn"
                    ><i
                      data-feather="x-circle"
                      class="feather-sm text-muted"
                    ></i
                  ></a>
                </form>
              </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link nav-sidebar" href="javascript:void(0)">
                  <i data-feather="shopping-cart"></i>
                </a>
              </li>
              <!-- ============================================================== -->
              <!-- Messages -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="2"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i data-feather="message-square"></i>
                  <div class="notify">
                    <span class="point bg-warning"></span>
                  </div>
                </a>
                <div
                  class="
                    dropdown-menu
                    mailbox
                    dropdown-menu-end dropdown-menu-animate-up
                  "
                  aria-labelledby="2"
                >
                  <ul class="list-style-none">
                    <li>
                      <div
                        class="rounded-top p-30 pb-2 d-flex align-items-center"
                      >
                        <h3 class="card-title mb-0">Messages</h3>
                        <span class="badge bg-primary ms-3">5 new</span>
                      </div>
                    </li>
                    <li class="p-30 pt-0">
                      <div
                        class="message-center message-body position-relative"
                      >
                        <!-- Message -->
                        <a
                          href="javascript:void(0)"
                          class="
                            message-item
                            px-2
                            d-flex
                            align-items-center
                            border-bottom
                            py-3
                          "
                        >
                          <span
                            class="user-img position-relative d-inline-block"
                          >
                            <img
                              src="../../assets/images/users/1.jpg"
                              alt="user"
                              class="rounded-circle w-100"
                            />
                            <span
                              class="profile-status rounded-circle online"
                            ></span>
                          </span>
                          <div class="w-75 d-inline-block v-middle ps-3 ms-1">
                            <h5
                              class="
                                message-title
                                mb-0
                                mt-1
                                fs-4
                                font-weight-medium
                              "
                            >
                              Roman Joined the Team!
                            </h5>
                            <span
                              class="
                                fs-3
                                text-nowrap
                                d-block
                                time
                                text-truncate
                                fw-normal
                                mt-1
                                text-muted
                              "
                              >Congratulate him</span
                            >
                            <span
                              class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              "
                              >9:08 AM</span
                            >
                          </div>
                        </a>
                        <!-- Message -->
                        <a
                          href="javascript:void(0)"
                          class="
                            message-item
                            px-2
                            d-flex
                            align-items-center
                            border-bottom
                            py-3
                          "
                        >
                          <span
                            class="user-img position-relative d-inline-block"
                          >
                            <img
                              src="../../assets/images/users/2.jpg"
                              alt="user"
                              class="rounded-circle w-100"
                            />
                            <span
                              class="profile-status rounded-circle busy"
                            ></span>
                          </span>
                          <div class="w-75 d-inline-block v-middle ps-3 ms-1">
                            <h5
                              class="
                                message-title
                                mb-0
                                mt-1
                                fs-4
                                font-weight-medium
                              "
                            >
                              New message received
                            </h5>
                            <span
                              class="
                                fs-3
                                text-nowrap
                                d-block
                                time
                                text-truncate
                                fw-normal
                                mt-1
                                text-muted
                              "
                              >Salma sent you new message</span
                            >
                            <span
                              class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              "
                              >9:08 AM</span
                            >
                          </div>
                        </a>
                        <!-- Message -->
                        <a
                          href="javascript:void(0)"
                          class="
                            message-item
                            px-2
                            d-flex
                            align-items-center
                            border-bottom
                            py-3
                          "
                        >
                          <span
                            class="user-img position-relative d-inline-block"
                          >
                            <img
                              src="../../assets/images/users/4.jpg"
                              alt="user"
                              class="rounded-circle w-100"
                            />
                            <span
                              class="profile-status rounded-circle busy"
                            ></span>
                          </span>
                          <div class="w-75 d-inline-block v-middle ps-3 ms-1">
                            <h5
                              class="
                                message-title
                                mb-0
                                mt-1
                                fs-4
                                font-weight-medium
                              "
                            >
                              New Payment received
                            </h5>
                            <span
                              class="
                                fs-3
                                text-nowrap
                                d-block
                                time
                                text-truncate
                                fw-normal
                                mt-1
                                text-muted
                              "
                              >Check your earnings</span
                            >
                            <span
                              class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              "
                              >9:08 AM</span
                            >
                          </div>
                        </a>
                        <!-- Message -->
                        <a
                          href="javascript:void(0)"
                          class="
                            message-item
                            px-2
                            d-flex
                            align-items-center
                            py-3
                          "
                        >
                          <span
                            class="user-img position-relative d-inline-block"
                          >
                            <img
                              src="../../assets/images/users/5.jpg"
                              alt="user"
                              class="rounded-circle w-100"
                            />
                            <span
                              class="profile-status rounded-circle away"
                            ></span>
                          </span>
                          <div class="w-75 d-inline-block v-middle ps-3 ms-1">
                            <h5
                              class="
                                message-title
                                mb-0
                                mt-1
                                fs-4
                                font-weight-medium
                              "
                            >
                              Jolly completed tasks
                            </h5>
                            <span
                              class="
                                fs-3
                                text-nowrap
                                d-block
                                time
                                text-truncate
                                fw-normal
                                mt-1
                                text-muted
                              "
                              >Assign her new tasks</span
                            >
                            <span
                              class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              "
                              >9:08 AM</span
                            >
                          </div>
                        </a>
                        <!-- Message -->
                        <a
                          href="javascript:void(0)"
                          class="
                            message-item
                            px-2
                            d-flex
                            align-items-center
                            py-3
                          "
                        >
                          <span
                            class="user-img position-relative d-inline-block"
                          >
                            <img
                              src="../../assets/images/users/1.jpg"
                              alt="user"
                              class="rounded-circle w-100"
                            />
                            <span
                              class="profile-status rounded-circle online"
                            ></span>
                          </span>
                          <div class="w-75 d-inline-block v-middle ps-3 ms-1">
                            <h5
                              class="
                                message-title
                                mb-0
                                mt-1
                                fs-4
                                font-weight-medium
                              "
                            >
                              Payment deducted
                            </h5>
                            <span
                              class="
                                fs-3
                                text-nowrap
                                d-block
                                time
                                text-truncate
                                fw-normal
                                mt-1
                                text-muted
                              "
                              >$230 deducted from account</span
                            >
                            <span
                              class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              "
                              >9:08 AM</span
                            >
                          </div>
                        </a>
                      </div>
                      <div class="mt-4">
                        <a
                          class="btn btn-info text-white"
                          href="javascript:void(0);"
                        >
                          See all messages
                        </a>
                      </div>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- ============================================================== -->
              <!-- End Messages -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- Comment -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i data-feather="bell"></i>
                  <div class="notify">
                    <span class="point bg-primary"></span>
                  </div>
                </a>
                <div
                  class="
                    dropdown-menu dropdown-menu-end
                    mailbox
                    dropdown-menu-animate-up
                  "
                >
                  <ul class="list-style-none">
                    <li>
                      <div
                        class="rounded-top p-30 pb-2 d-flex align-items-center"
                      >
                        <h3 class="card-title mb-0">Notifications</h3>
                        <span class="badge bg-warning ms-3">5 new</span>
                      </div>
                    </li>
                    <li class="p-30 pt-0">
                      <div
                        class="message-center message-body position-relative"
                      >
                        <!-- Message -->
                        <a
                          href="javascript:void(0)"
                          class="
                            message-item
                            px-2
                            d-flex
                            align-items-center
                            border-bottom
                            py-3
                          "
                        >
                          <span
                            class="user-img position-relative d-inline-block"
                          >
                            <img
                              src="../../assets/images/users/1.jpg"
                              alt="user"
                              class="rounded-circle w-100"
                          /></span>
                          <div class="w-75 d-inline-block v-middle ps-3 ms-1">
                            <h5
                              class="
                                message-title
                                mb-0
                                mt-1
                                fs-4
                                font-weight-medium
                              "
                            >
                              Roman Joined the Team!
                            </h5>
                            <span
                              class="
                                fs-3
                                text-nowrap
                                d-block
                                time
                                text-truncate
                                fw-normal
                                mt-1
                                text-muted
                              "
                              >Congratulate him</span
                            >
                          </div>
                        </a>
                        <!-- Message -->
                        <a
                          href="javascript:void(0)"
                          class="
                            message-item
                            px-2
                            d-flex
                            align-items-center
                            border-bottom
                            py-3
                          "
                        >
                          <span
                            class="user-img position-relative d-inline-block"
                          >
                            <img
                              src="../../assets/images/users/2.jpg"
                              alt="user"
                              class="rounded-circle w-100"
                            />
                          </span>
                          <div class="w-75 d-inline-block v-middle ps-3 ms-1">
                            <h5
                              class="
                                message-title
                                mb-0
                                mt-1
                                fs-4
                                font-weight-medium
                              "
                            >
                              New message received
                            </h5>
                            <span
                              class="
                                fs-3
                                text-nowrap
                                d-block
                                time
                                text-truncate
                                fw-normal
                                mt-1
                                text-muted
                              "
                              >Salma sent you new message</span
                            >
                          </div>
                        </a>
                        <!-- Message -->
                        <a
                          href="javascript:void(0)"
                          class="
                            message-item
                            px-2
                            d-flex
                            align-items-center
                            border-bottom
                            py-3
                          "
                        >
                          <span class="btn btn-light-info text-info btn-circle">
                            <i
                              data-feather="dollar-sign"
                              class="feather-sm fill-white"
                            ></i>
                          </span>
                          <div class="w-75 d-inline-block v-middle ps-3 ms-1">
                            <h5
                              class="
                                message-title
                                mb-0
                                mt-1
                                fs-4
                                font-weight-medium
                              "
                            >
                              New Payment received
                            </h5>
                            <span
                              class="
                                fs-3
                                text-nowrap
                                d-block
                                time
                                text-truncate
                                fw-normal
                                mt-1
                                text-muted
                              "
                              >Check your earnings</span
                            >
                          </div>
                        </a>
                        <!-- Message -->
                        <a
                          href="javascript:void(0)"
                          class="
                            message-item
                            px-2
                            d-flex
                            align-items-center
                            py-3
                          "
                        >
                          <span
                            class="user-img position-relative d-inline-block"
                          >
                            <img
                              src="../../assets/images/users/4.jpg"
                              alt="user"
                              class="rounded-circle w-100"
                            />
                          </span>
                          <div class="w-75 d-inline-block v-middle ps-3 ms-1">
                            <h5
                              class="
                                message-title
                                mb-0
                                mt-1
                                fs-4
                                font-weight-medium
                              "
                            >
                              Jolly completed tasks
                            </h5>
                            <span
                              class="
                                fs-3
                                text-nowrap
                                d-block
                                time
                                text-truncate
                                fw-normal
                                mt-1
                                text-muted
                              "
                              >Assign her new tasks</span
                            >
                          </div>
                        </a>
                        <!-- Message -->
                        <a
                          href="javascript:void(0)"
                          class="
                            message-item
                            px-2
                            d-flex
                            align-items-center
                            py-3
                          "
                        >
                          <span
                            class="btn btn-light-danger text-danger btn-circle"
                          >
                            <i
                              data-feather="credit-card"
                              class="feather-sm fill-white"
                            ></i>
                          </span>
                          <div class="w-75 d-inline-block v-middle ps-3 ms-1">
                            <h5
                              class="
                                message-title
                                mb-0
                                mt-1
                                fs-4
                                font-weight-medium
                              "
                            >
                              Payment deducted
                            </h5>
                            <span
                              class="
                                fs-3
                                text-nowrap
                                d-block
                                time
                                text-truncate
                                fw-normal
                                mt-1
                                text-muted
                              "
                              >$230 deducted from account</span
                            >
                          </div>
                        </a>
                      </div>
                      <div class="mt-4">
                        <a
                          class="btn btn-info text-white"
                          href="javascript:void(0);"
                        >
                          See all notifications
                        </a>
                      </div>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- ============================================================== -->
              <!-- End Comment -->
              <!-- ============================================================== -->

              <!-- ============================================================== -->
              <!-- Profile -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown profile-dropdown">
                <a
                  class="nav-link dropdown-toggle d-flex align-items-center"
                  href="#"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <img
                    src="../../assets/images/users/user.jpg"
                    alt="user"
                    width="30"
                    class="profile-pic rounded-circle"
                  />
                  <div class="d-none d-md-flex">
                    <span class="ms-2"
                      >Hi,
                      <span class="text-dark fw-bold">Johnathan</span></span
                    >
                    <span>
                      <i data-feather="chevron-down" class="feather-sm"></i>
                    </span>
                  </div>
                </a>
                <div
                  class="
                    dropdown-menu dropdown-menu-end
                    mailbox
                    dropdown-menu-animate-up
                  "
                >
                  <ul class="list-style-none">
                    <li class="p-30 pb-2">
                      <div class="rounded-top d-flex align-items-center">
                        <h3 class="card-title mb-0">User Profile</h3>
                        <div class="ms-auto">
                          <a href="javascript:void(0)" class="link py-0">
                            <i data-feather="x-circle"></i>
                          </a>
                        </div>
                      </div>
                      <div
                        class="
                          d-flex
                          align-items-center
                          mt-4
                          pt-3
                          pb-4
                          border-bottom
                        "
                      >
                        <img
                          src="../../assets/images/users/user.jpg"
                          alt="user"
                          width="90"
                          class="rounded-circle"
                        />
                        <div class="ms-4">
                          <h4 class="mb-0">Johnathan Doe</h4>
                          <span class="text-muted">Administrator</span>
                          <p class="text-muted mb-0 mt-1">
                            <i data-feather="mail" class="feather-sm me-1"></i>
                            info@flexiledash.com
                          </p>
                        </div>
                      </div>
                    </li>
                    <li class="p-30 pt-0">
                      <div
                        class="message-center message-body position-relative"
                        style="height: 210px"
                      >
                        <!-- Message -->
                        <a
                          href="javascript:void(0)"
                          class="
                            message-item
                            px-2
                            d-flex
                            align-items-center
                            border-bottom
                            py-3
                          "
                        >
                          <span
                            class="btn btn-light-info btn-rounded-lg text-info"
                          >
                            <i
                              data-feather="dollar-sign"
                              class="feather-sm fill-white"
                            ></i>
                          </span>
                          <div class="w-75 d-inline-block v-middle ps-3 ms-1">
                            <h5
                              class="
                                message-title
                                mb-0
                                mt-1
                                fs-4
                                font-weight-medium
                              "
                            >
                              My Profile
                            </h5>
                            <span
                              class="
                                fs-3
                                text-nowrap
                                d-block
                                time
                                text-truncate
                                fw-normal
                                mt-1
                                text-muted
                              "
                              >Account Settings</span
                            >
                          </div>
                        </a>
                        <!-- Message -->
                        <a
                          href="javascript:void(0)"
                          class="
                            message-item
                            px-2
                            d-flex
                            align-items-center
                            border-bottom
                            py-3
                          "
                        >
                          <span
                            class="
                              btn btn-light-success btn-rounded-lg
                              text-success
                            "
                          >
                            <i
                              data-feather="shield"
                              class="feather-sm fill-white"
                            ></i>
                          </span>
                          <div class="w-75 d-inline-block v-middle ps-3 ms-1">
                            <h5
                              class="
                                message-title
                                mb-0
                                mt-1
                                fs-4
                                font-weight-medium
                                d-flex
                                align-items-center
                              "
                            >
                              My Inbox
                              <span class="mt-n2 ms-1"
                                ><i
                                  class="
                                    mdi mdi-checkbox-blank-circle
                                    fs-1
                                    text-success
                                  "
                                ></i
                              ></span>
                            </h5>
                            <span
                              class="
                                fs-3
                                text-nowrap
                                d-block
                                time
                                text-truncate
                                fw-normal
                                mt-1
                                text-muted
                              "
                              >Messages & Emails</span
                            >
                          </div>
                        </a>
                        <!-- Message -->
                        <a
                          href="javascript:void(0)"
                          class="
                            message-item
                            px-2
                            d-flex
                            align-items-center
                            border-bottom
                            py-3
                          "
                        >
                          <span
                            class="
                              btn btn-light-danger btn-rounded-lg
                              text-danger
                            "
                          >
                            <i
                              data-feather="credit-card"
                              class="feather-sm fill-white"
                            ></i>
                          </span>
                          <div class="w-75 d-inline-block v-middle ps-3 ms-1">
                            <h5
                              class="
                                message-title
                                mb-0
                                mt-1
                                fs-4
                                font-weight-medium
                              "
                            >
                              My Tasks
                            </h5>
                            <span
                              class="
                                fs-3
                                text-nowrap
                                d-block
                                time
                                text-truncate
                                fw-normal
                                mt-1
                                text-muted
                              "
                              >To-do and Daily Tasks</span
                            >
                          </div>
                        </a>
                        <div class="mt-4">
                          <a
                            href="javascript:void(0)"
                            class="
                              text-dark
                              fs-3
                              font-weight-medium
                              hover-primary
                            "
                          >
                            Account Settings
                          </a>
                          <a
                            href="javascript:void(0)"
                            class="
                              text-dark
                              fs-3
                              font-weight-medium
                              hover-primary
                            "
                          >
                            Frequently Asked Questions
                          </a>
                          <a
                            href="javascript:void(0)"
                            class="
                              text-dark
                              fs-3
                              font-weight-medium
                              hover-primary
                            "
                          >
                            Pricing
                          </a>
                        </div>
                      </div>
                      <div class="mt-4">
                        <a
                          class="btn btn-info text-white"
                          href="javascript:void(0);"
                        >
                          Logout
                        </a>
                      </div>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- ============================================================= -->
      <!-- End Topbar header -->
      <!-- ============================================================= -->
      <!-- ============================================================= -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================= -->
      <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav">
              <li class="nav-small-cap">
                <i class="nav-small-line"></i>
                <span class="hide-menu">Dashboards</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="index.html"
                  aria-expanded="false"
                >
                  <i data-feather="pie-chart"></i
                  ><span class="hide-menu">Analytical</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="index2.html"
                  aria-expanded="false"
                >
                  <i data-feather="shopping-bag"></i
                  ><span class="hide-menu">eCommerce</span>
                </a>
              </li>

              <li class="nav-small-cap">
                <i class="nav-small-line"></i>
                <span class="hide-menu">Apps</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="app-calendar.html"
                  aria-expanded="false"
                  ><i data-feather="calendar"></i
                  ><span class="hide-menu">Calendar</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="app-chats.html"
                  aria-expanded="false"
                  ><i data-feather="message-circle"></i
                  ><span class="hide-menu">Chat Apps</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="app-contacts.html"
                  aria-expanded="false"
                  ><i data-feather="phone"></i
                  ><span class="hide-menu">Contact</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="app-invoice.html"
                  aria-expanded="false"
                  ><i data-feather="file-text"></i
                  ><span class="hide-menu">Invoice</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="app-notes.html"
                  aria-expanded="false"
                  ><i data-feather="copy"></i
                  ><span class="hide-menu">Notes</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="app-todo.html"
                  aria-expanded="false"
                  ><i data-feather="trello"></i
                  ><span class="hide-menu">Todo</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="app-taskboard.html"
                  aria-expanded="false"
                  ><i data-feather="check-square"></i
                  ><span class="hide-menu">Taskboard</span></a
                >
              </li>

              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="inbox"></i
                  ><span class="hide-menu">Inbox </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="inbox-email.html" class="sidebar-link"
                      ><i class="ri-mail-line"></i
                      ><span class="hide-menu"> Email </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="inbox-email-detail.html" class="sidebar-link"
                      ><i class="ri-mail-open-line"></i
                      ><span class="hide-menu"> Email Detail </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="inbox-email-compose.html" class="sidebar-link"
                      ><i class="ri-mail-add-line"></i
                      ><span class="hide-menu"> Email Compose </span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="bookmark"></i
                  ><span class="hide-menu">Ticket </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="ticket-list.html" class="sidebar-link"
                      ><i class="ri-ticket-line"></i
                      ><span class="hide-menu"> Ticket List </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ticket-detail.html" class="sidebar-link"
                      ><i class="ri-coupon-line"></i
                      ><span class="hide-menu"> Ticket Detail </span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-small-cap">
                <i class="nav-small-line"></i> <span class="hide-menu">UI</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="toggle-right"></i
                  ><span class="hide-menu">Ui Elements </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="ui-notification.html" class="sidebar-link"
                      ><i class="ri-notification-3-line"></i
                      ><span class="hide-menu"> Alert</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-accordian.html" class="sidebar-link"
                      ><i class="ri-window-2-fill"></i
                      ><span class="hide-menu"> Accordian</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-badge.html" class="sidebar-link"
                      ><i class="ri-coupon-2-line"></i
                      ><span class="hide-menu"> Badge</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-buttons.html" class="sidebar-link"
                      ><i class="ri-switch-line"></i
                      ><span class="hide-menu"> Buttons</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-dropdowns.html" class="sidebar-link"
                      ><i class="ri-align-bottom"></i
                      ><span class="hide-menu"> Dropdowns</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-modals.html" class="sidebar-link"
                      ><i class="ri-window-line"></i
                      ><span class="hide-menu"> Modals</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-tab.html" class="sidebar-link"
                      ><i class="ri-repeat-2-fill"></i
                      ><span class="hide-menu"> Tab</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-tooltip-popover.html" class="sidebar-link"
                      ><i class="ri-settings-2-line"></i
                      ><span class="hide-menu"> Tooltip &amp; Popover</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-pagination.html" class="sidebar-link"
                      ><i class="ri-shuffle-line"></i
                      ><span class="hide-menu"> Pagination</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-progressbar.html" class="sidebar-link"
                      ><i class="ri-menu-4-line"></i
                      ><span class="hide-menu"> Progressbar</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-typography.html" class="sidebar-link"
                      ><i class="ri-pen-nib-line"></i
                      ><span class="hide-menu"> Typography</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-bootstrap.html" class="sidebar-link"
                      ><i class="ri-image-line"></i
                      ><span class="hide-menu">Image</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-breadcrumb.html" class="sidebar-link"
                      ><i class="ri-route-line"></i
                      ><span class="hide-menu"> Breadcrumb</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-lists.html" class="sidebar-link"
                      ><i class="ri-list-check-2"></i
                      ><span class="hide-menu"> List Media</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-grid.html" class="sidebar-link"
                      ><i class="ri-layout-grid-line"></i
                      ><span class="hide-menu"> Grid</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-carousel.html" class="sidebar-link"
                      ><i class="ri-clapperboard-line"></i
                      ><span class="hide-menu"> Carousel</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-offcanvas.html" class="sidebar-link"
                      ><i class="ri-artboard-2-line"></i
                      ><span class="hide-menu"> Offcanvas</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-scrollspy.html" class="sidebar-link"
                      ><i class="ri-order-play-line"></i
                      ><span class="hide-menu"> Scrollspy</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-toasts.html" class="sidebar-link"
                      ><i class="ri-chat-smile-2-line"></i
                      ><span class="hide-menu"> Toasts</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-spinner.html" class="sidebar-link"
                      ><i class="ri-loader-2-line"></i
                      ><span class="hide-menu"> Spinner</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="layers"></i
                  ><span class="hide-menu">Cards</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="ui-cards.html" class="sidebar-link"
                      ><i class="ri-layout-top-2-line"></i
                      ><span class="hide-menu"> Basic Cards</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-card-customs.html" class="sidebar-link"
                      ><i class="ri-layout-right-2-line"></i
                      ><span class="hide-menu">Custom Cards</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-card-weather.html" class="sidebar-link"
                      ><i class="ri-cloud-line"></i
                      ><span class="hide-menu">Weather Cards</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-card-draggable.html" class="sidebar-link"
                      ><i class="ri-drag-drop-line"></i
                      ><span class="hide-menu">Draggable Cards</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="box"></i
                  ><span class="hide-menu">Components</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="component-sweetalert.html" class="sidebar-link"
                      ><i class="ri-alarm-warning-line"></i
                      ><span class="hide-menu"> Sweet Alert</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="component-nestable.html" class="sidebar-link"
                      ><i class="ri-git-merge-fill"></i
                      ><span class="hide-menu">Nestable</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="component-noui-slider.html" class="sidebar-link"
                      ><i class="ri-slideshow-4-line"></i
                      ><span class="hide-menu">Noui slider</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="component-rating.html" class="sidebar-link"
                      ><i class="ri-star-smile-line"></i
                      ><span class="hide-menu">Rating</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="component-toastr.html" class="sidebar-link"
                      ><i class="ri-notification-badge-line"></i
                      ><span class="hide-menu">Toastr</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="grid"></i
                  ><span class="hide-menu">Widgets </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="widgets-feeds.html" class="sidebar-link"
                      ><i class="ri-chat-1-line"></i
                      ><span class="hide-menu"> Feed Widgets </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="widgets-apps.html" class="sidebar-link"
                      ><i class="ri-apps-line"></i
                      ><span class="hide-menu"> Apps Widgets </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="widgets-data.html" class="sidebar-link"
                      ><i class="ri-database-line"></i
                      ><span class="hide-menu"> Data Widgets </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="widgets-charts.html" class="sidebar-link"
                      ><i class="ri-pie-chart-box-line"></i
                      ><span class="hide-menu"> Charts Widgets</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-small-cap">
                <i class="nav-small-line"></i>
                <span class="hide-menu">Forms</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="file"></i
                  ><span class="hide-menu">Form Elements</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="form-inputs.html" class="sidebar-link"
                      ><i class="ri-text-wrap"></i
                      ><span class="hide-menu"> Forms Input</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-input-groups.html" class="sidebar-link"
                      ><i class="ri-indent-increase"></i
                      ><span class="hide-menu"> Input Groups</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-input-grid.html" class="sidebar-link"
                      ><i class="ri-table-2"></i
                      ><span class="hide-menu"> Input Grid</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="form-custom-checkbox-radio.html"
                      class="sidebar-link"
                      ><i class="ri-checkbox-line"></i
                      ><span class="hide-menu">
                        Custom Checkboxes &amp; Radios</span
                      ></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-checkbox-radio.html" class="sidebar-link"
                      ><i class="ri-checkbox-line"></i
                      ><span class="hide-menu">
                        Checkboxes &amp; Radios</span
                      ></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-bootstrap-touchspin.html" class="sidebar-link"
                      ><i class="ri-refresh-line"></i
                      ><span class="hide-menu"> Bootstrap Touchspin</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-bootstrap-switch.html" class="sidebar-link"
                      ><i class="ri-toggle-line"></i
                      ><span class="hide-menu"> Bootstrap Switch</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-select2.html" class="sidebar-link"
                      ><i class="ri-contrast-line"></i
                      ><span class="hide-menu"> Select2</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-dual-listbox.html" class="sidebar-link"
                      ><i class="ri-file-list-3-line"></i
                      ><span class="hide-menu"> Dual Listbox</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="layout"></i
                  ><span class="hide-menu">Form Layouts</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="form-basic.html" class="sidebar-link"
                      ><i class="ri-file-list-line"></i
                      ><span class="hide-menu"> Basic Forms</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-horizontal.html" class="sidebar-link"
                      ><i class="ri-file-list-2-line"></i
                      ><span class="hide-menu"> Form Horizontal</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-actions.html" class="sidebar-link"
                      ><i class="ri-file-code-line"></i
                      ><span class="hide-menu"> Form Actions</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-row-separator.html" class="sidebar-link"
                      ><i class="ri-file-transfer-line"></i
                      ><span class="hide-menu"> Row Separator</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-bordered.html" class="sidebar-link"
                      ><i class="ri-file-copy-2-line"></i
                      ><span class="hide-menu"> Form Bordered</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-striped-row.html" class="sidebar-link"
                      ><i class="ri-file-upload-line"></i
                      ><span class="hide-menu"> Striped Rows</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-detail.html" class="sidebar-link"
                      ><i class="ri-file-history-line"></i
                      ><span class="hide-menu"> Form Detail</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-material.html" class="sidebar-link"
                      ><i class="ri-file-shield-line"></i
                      ><span class="hide-menu"> Form Material</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-floating-input.html" class="sidebar-link"
                      ><i class="ri-file-cloud-line"></i
                      ><span class="hide-menu"> Form Floating Input</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="file-plus"></i
                  ><span class="hide-menu">Form Addons</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="form-paginator.html" class="sidebar-link"
                      ><i class="ri-shuffle-line"></i
                      ><span class="hide-menu"> Paginator</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-img-cropper.html" class="sidebar-link"
                      ><i class="ri-crop-2-line"></i
                      ><span class="hide-menu"> Image Cropper</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-dropzone.html" class="sidebar-link"
                      ><i class="ri-drag-move-line"></i
                      ><span class="hide-menu"> Dropzone</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-mask.html" class="sidebar-link"
                      ><i class="ri-file-hwp-line"></i
                      ><span class="hide-menu"> Form Mask</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-typeahead.html" class="sidebar-link"
                      ><i class="ri-text-spacing"></i
                      ><span class="hide-menu"> Form Typehead</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="alert-triangle"></i
                  ><span class="hide-menu">Form Validation</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a
                      href="form-bootstrap-validation.html"
                      class="sidebar-link"
                      ><i class="ri-picture-in-picture-2-line"></i
                      ><span class="hide-menu"> Bootstrap Validation</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-custom-validation.html" class="sidebar-link"
                      ><i class="ri-picture-in-picture-exit-line"></i
                      ><span class="hide-menu"> Custom Validation</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="aperture"></i
                  ><span class="hide-menu">Form Pickers</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="form-picker-colorpicker.html" class="sidebar-link"
                      ><i class="ri-palette-line"></i
                      ><span class="hide-menu"> Form Colorpicker</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="form-picker-datetimepicker.html"
                      class="sidebar-link"
                      ><i class="ri-calendar-2-line"></i
                      ><span class="hide-menu"> Form Datetimepicker</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="form-picker-bootstrap-rangepicker.html"
                      class="sidebar-link"
                      ><i class="ri-calendar-check-line"></i
                      ><span class="hide-menu">
                        Form Bootstrap Rangepicker</span
                      ></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="form-picker-bootstrap-datepicker.html"
                      class="sidebar-link"
                      ><i class="ri-calendar-event-line"></i
                      ><span class="hide-menu">
                        Form Bootstrap Datepicker</span
                      ></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="form-picker-material-datepicker.html"
                      class="sidebar-link"
                      ><i class="ri-calendar-todo-line"></i
                      ><span class="hide-menu">
                        Form Material Datepicker</span
                      ></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="edit"></i
                  ><span class="hide-menu">Form Editor</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="form-editor-ckeditor.html" class="sidebar-link"
                      ><i class="ri-file-edit-line"></i
                      ><span class="hide-menu">Ck Editor</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-editor-quill.html" class="sidebar-link"
                      ><i class="ri-image-edit-line"></i
                      ><span class="hide-menu">Quill Editor</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-editor-summernote.html" class="sidebar-link"
                      ><i class="ri-contrast-2-line"></i
                      ><span class="hide-menu">Summernote Editor</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-editor-tinymce.html" class="sidebar-link"
                      ><i class="ri-contrast-drop-2-line"></i
                      ><span class="hide-menu">Tinymce Edtor</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="form-wizard.html"
                  aria-expanded="false"
                  ><i data-feather="archive"></i
                  ><span class="hide-menu">Form Wizard</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="form-repeater.html"
                  aria-expanded="false"
                  ><i data-feather="cpu"></i
                  ><span class="hide-menu">Form Repeater</span></a
                >
              </li>
              <li class="nav-small-cap">
                <i class="nav-small-line"></i>
                <span class="hide-menu">Tables</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="sidebar"></i
                  ><span class="hide-menu">Bootstrap Tables</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="table-basic.html" class="sidebar-link"
                      ><i class="ri-layout-line"></i
                      ><span class="hide-menu">Basic Table </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="table-dark-basic.html" class="sidebar-link"
                      ><i class="ri-layout-2-line"></i
                      ><span class="hide-menu">Dark Basic Table </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="table-sizing.html" class="sidebar-link"
                      ><i class="ri-layout-3-line"></i
                      ><span class="hide-menu">Sizing Table </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="table-layout-coloured.html" class="sidebar-link"
                      ><i class="ri-layout-4-line"></i
                      ><span class="hide-menu">Coloured Table Layout</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="hard-drive"></i
                  ><span class="hide-menu">Datatables</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="table-datatable-basic.html" class="sidebar-link"
                      ><i class="ri-layout-5-line"></i
                      ><span class="hide-menu"> Basic Initialisation</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="table-datatable-api.html" class="sidebar-link"
                      ><i class="ri-layout-column-line"></i
                      ><span class="hide-menu"> API</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="table-datatable-advanced.html" class="sidebar-link"
                      ><i class="ri-layout-row-line"></i
                      ><span class="hide-menu">
                        Advanced Initialisation</span
                      ></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="table-jsgrid.html"
                  aria-expanded="false"
                  ><i data-feather="server"></i
                  ><span class="hide-menu">Table Jsgrid</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="table-responsive.html"
                  aria-expanded="false"
                  ><i data-feather="minimize"></i
                  ><span class="hide-menu">Table Responsive</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="table-footable.html"
                  aria-expanded="false"
                  ><i data-feather="maximize"></i
                  ><span class="hide-menu">Table Footable</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="table-editable.html"
                  aria-expanded="false"
                  ><i data-feather="edit-3"></i
                  ><span class="hide-menu">Table Editable</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="table-bootstrap.html"
                  aria-expanded="false"
                  ><i data-feather="octagon"></i
                  ><span class="hide-menu">Table Bootstrap</span></a
                >
              </li>

              <li class="nav-small-cap">
                <i class="nav-small-line"></i>
                <span class="hide-menu">Charts</span>
              </li>

              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="chart-morris.html"
                  aria-expanded="false"
                  ><i data-feather="activity"></i
                  ><span class="hide-menu"> Morris Chart</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="chart-chart-js.html"
                  aria-expanded="false"
                  ><i data-feather="bar-chart-2"></i
                  ><span class="hide-menu">Chartjs</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="chart-sparkline.html"
                  aria-expanded="false"
                  ><i data-feather="bar-chart"></i
                  ><span class="hide-menu">Sparkline Chart</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="chart-chartist.html"
                  aria-expanded="false"
                  ><i data-feather="disc"></i
                  ><span class="hide-menu">Chartist Chart</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="command"></i
                  ><span class="hide-menu">Apex Charts</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="chart-apex-line.html" class="sidebar-link"
                      ><i class="ri-bar-chart-horizontal-line"></i>
                      <span class="hide-menu">Line Chart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-apex-area.html" class="sidebar-link"
                      ><i class="ri-donut-chart-line"></i>
                      <span class="hide-menu">Area Chart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-apex-bar.html" class="sidebar-link"
                      ><i class="ri-bar-chart-line"></i>
                      <span class="hide-menu">Bar Chart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-apex-pie.html" class="sidebar-link"
                      ><i class="ri-pie-chart-line"></i>
                      <span class="hide-menu">Pie Chart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-apex-radial.html" class="sidebar-link"
                      ><i class="ri-line-chart-line"></i>
                      <span class="hide-menu">Radial Chart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-apex-radar.html" class="sidebar-link"
                      ><i class="ri-bubble-chart-line"></i>
                      <span class="hide-menu">Radar Chart</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="life-buoy"></i
                  ><span class="hide-menu">C3 Charts</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="chart-c3-axis.html" class="sidebar-link"
                      ><i class="ri-bubble-chart-line"></i>
                      <span class="hide-menu">Axis Chart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-c3-bar.html" class="sidebar-link"
                      ><i class="ri-bar-chart-grouped-line"></i>
                      <span class="hide-menu">Bar Chart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-c3-data.html" class="sidebar-link"
                      ><i class="ri-donut-chart-line"></i>
                      <span class="hide-menu">Data Chart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-c3-line.html" class="sidebar-link"
                      ><i class="ri-line-chart-line"></i>
                      <span class="hide-menu">Line Chart</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="sliders"></i
                  ><span class="hide-menu">Echarts</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="chart-echart-basic.html" class="sidebar-link"
                      ><i class="ri-line-chart-line"></i>
                      <span class="hide-menu">Basic Charts</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-echart-bar.html" class="sidebar-link"
                      ><i class="ri-bar-chart-horizontal-line"></i>
                      <span class="hide-menu">Bar Chart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="chart-echart-pie-doughnut.html"
                      class="sidebar-link"
                      ><i class="ri-pie-chart-line"></i>
                      <span class="hide-menu">Pie &amp; Doughnut Chart</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-small-cap">
                <i class="nav-small-line"></i>
                <span class="hide-menu">Sample Pages</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="shopping-bag"></i
                  ><span class="hide-menu">Ecommerce</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="eco-products.html" class="sidebar-link"
                      ><i class="ri-stock-line"></i>
                      <span class="hide-menu">Products</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="eco-products-cart.html" class="sidebar-link"
                      ><i class="ri-shopping-cart-line"></i>
                      <span class="hide-menu">Products Cart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="eco-products-edit.html" class="sidebar-link"
                      ><i class="ri-file-edit-line"></i>
                      <span class="hide-menu">Products Edit</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="eco-products-detail.html" class="sidebar-link"
                      ><i class="ri-file-list-line"></i>
                      <span class="hide-menu">Product Details</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="eco-products-orders.html" class="sidebar-link"
                      ><i class="ri-file-list-3-line"></i>
                      <span class="hide-menu">Product Orders</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="eco-products-checkout.html" class="sidebar-link"
                      ><i class="ri-currency-line"></i>
                      <span class="hide-menu">Products Checkout</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="book-open"></i
                  ><span class="hide-menu">Sample Pages </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="starter-kit.html" class="sidebar-link"
                      ><i class="ri-artboard-2-line"></i>
                      <span class="hide-menu">Starter Kit</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-animation.html" class="sidebar-link"
                      ><i class="ri-shape-2-line"></i>
                      <span class="hide-menu">Animation</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-search-result.html" class="sidebar-link"
                      ><i class="ri-file-search-line"></i>
                      <span class="hide-menu">Search Result</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-gallery.html" class="sidebar-link"
                      ><i class="ri-gallery-line"></i>
                      <span class="hide-menu">Gallery</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-treeview.html" class="sidebar-link"
                      ><i class="ri-git-branch-line"></i>
                      <span class="hide-menu">Treeview</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-block-ui.html" class="sidebar-link"
                      ><i class="ri-clockwise-2-line"></i>
                      <span class="hide-menu">Block UI</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-session-timeout.html" class="sidebar-link"
                      ><i class="ri-timer-flash-line"></i>
                      <span class="hide-menu">Session Timeout</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="pages-session-idle-timeout.html"
                      class="sidebar-link"
                      ><i class="ri-timer-line"></i>
                      <span class="hide-menu">Session Idle Timeout</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-utility-classes.html" class="sidebar-link"
                      ><i class="ri-question-line"></i>
                      <span class="hide-menu">Helper Classes</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-maintenance.html" class="sidebar-link"
                      ><i class="ri-tools-line"></i>
                      <span class="hide-menu">Maintenance Page</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="clipboard"></i
                  ><span class="hide-menu">Page Layouts </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a
                      href="layout-inner-fixed-left-sidebar.html"
                      class="sidebar-link"
                      ><i class="ri-layout-left-2-line"></i
                      ><span class="hide-menu">
                        Inner Fixed Left Sidebar
                      </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="layout-inner-fixed-right-sidebar.html"
                      class="sidebar-link"
                      ><i class="ri-layout-right-2-line"></i
                      ><span class="hide-menu">
                        Inner Fixed Right Sidebar
                      </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="layout-inner-left-sidebar.html"
                      class="sidebar-link"
                      ><i class="ri-layout-left-line"></i
                      ><span class="hide-menu"> Inner Left Sidebar </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="layout-inner-right-sidebar.html"
                      class="sidebar-link"
                      ><i class="ri-layout-right-line"></i
                      ><span class="hide-menu"> Inner Right Sidebar </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="page-layout-fixed-header.html" class="sidebar-link"
                      ><i class="ri-layout-top-line"></i
                      ><span class="hide-menu"> Fixed Header </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="page-layout-fixed-sidebar.html"
                      class="sidebar-link"
                      ><i class="ri-layout-left-line"></i
                      ><span class="hide-menu"> Fixed Sidebar </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="page-layout-fixed-header-sidebar.html"
                      class="sidebar-link"
                      ><i class="ri-layout-5-line"></i
                      ><span class="hide-menu">
                        Fixed Header &amp; Sidebar
                      </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="page-layout-boxed-layout.html" class="sidebar-link"
                      ><i class="ri-layout-bottom-line"></i
                      ><span class="hide-menu"> Box Layout </span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="user-check"></i
                  ><span class="hide-menu">Authentication</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="authentication-login1.html" class="sidebar-link"
                      ><i class="ri-lock-line"></i
                      ><span class="hide-menu"> Login </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="authentication-login2.html" class="sidebar-link"
                      ><i class="ri-lock-2-line"></i
                      ><span class="hide-menu"> Login 2 </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="authentication-login3.html" class="sidebar-link"
                      ><i class="ri-lock-password-line"></i
                      ><span class="hide-menu"> Login 3 </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="authentication-register1.html" class="sidebar-link"
                      ><i class="ri-user-add-line"></i
                      ><span class="hide-menu"> Register</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="authentication-register2.html" class="sidebar-link"
                      ><i class="ri-admin-line"></i
                      ><span class="hide-menu"> Register 2</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="authentication-lockscreen.html"
                      class="sidebar-link"
                      ><i class="ri-door-lock-box-line"></i
                      ><span class="hide-menu"> Lockscreen</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="authentication-recover-password.html"
                      class="sidebar-link"
                      ><i class="ri-lock-password-line"></i
                      ><span class="hide-menu"> Recover password</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="users"></i
                  ><span class="hide-menu">Users</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="ui-user-card.html" class="sidebar-link"
                      ><i class="ri-account-box-line"></i>
                      <span class="hide-menu"> User Card </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-profile.html" class="sidebar-link"
                      ><i class="ri-account-pin-box-line"></i
                      ><span class="hide-menu"> User Profile</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-user-contacts.html" class="sidebar-link"
                      ><i class="ri-contacts-line"></i
                      ><span class="hide-menu"> User Contact</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="file-text"></i
                  ><span class="hide-menu">Invoice</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="pages-invoice.html" class="sidebar-link"
                      ><i class="ri-profile-line"></i
                      ><span class="hide-menu"> Invoice Layout </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-invoice-list.html" class="sidebar-link"
                      ><i class="ri-file-list-line"></i
                      ><span class="hide-menu"> Invoice List</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="map-pin"></i
                  ><span class="hide-menu">Maps</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="map-google.html" class="sidebar-link"
                      ><i class="ri-map-pin-line"></i
                      ><span class="hide-menu"> Google Map </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="map-vector.html" class="sidebar-link"
                      ><i class="ri-map-pin-5-line"></i
                      ><span class="hide-menu"> Vector Map</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="target"></i
                  ><span class="hide-menu">Icons</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="icon-feather.html" class="sidebar-link"
                      ><i class="ri-emotion-2-line"></i>
                      <span class="hide-menu"> Feather Icons </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="icon-remix.html" class="sidebar-link"
                      ><i class="ri-emotion-2-line"></i>
                      <span class="hide-menu"> Remix Icons </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="icon-material.html" class="sidebar-link"
                      ><i class="ri-user-smile-line"></i>
                      <span class="hide-menu"> Material Icons </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="icon-fontawesome.html" class="sidebar-link"
                      ><i class="ri-emotion-line"></i
                      ><span class="hide-menu"> Fontawesome Icons</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="icon-bootstrap.html" class="sidebar-link"
                      ><i class="ri-emotion-happy-line"></i
                      ><span class="hide-menu"> Bootstrap Icons</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="clock"></i
                  ><span class="hide-menu">Timeline</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="timeline-center.html" class="sidebar-link"
                      ><i class="ri-clockwise-line"></i>
                      <span class="hide-menu"> Center Timeline </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="timeline-horizontal.html" class="sidebar-link"
                      ><i class="ri-clockwise-2-line"></i
                      ><span class="hide-menu"> Horizontal Timeline</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="timeline-left.html" class="sidebar-link"
                      ><i class="ri-anticlockwise-line"></i
                      ><span class="hide-menu"> Left Timeline</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="timeline-right.html" class="sidebar-link"
                      ><i class="ri-anticlockwise-2-line"></i
                      ><span class="hide-menu"> Right Timeline</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="mail"></i
                  ><span class="hide-menu">Email Template</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="email-templete-alert.html" class="sidebar-link"
                      ><i class="ri-mail-unread-line"></i>
                      <span class="hide-menu"> Alert </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="email-templete-basic.html" class="sidebar-link"
                      ><i class="ri-mail-line"></i
                      ><span class="hide-menu"> Basic</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="email-templete-billing.html" class="sidebar-link"
                      ><i class="ri-mail-send-line"></i
                      ><span class="hide-menu"> Billing</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="email-templete-password-reset.html"
                      class="sidebar-link"
                      ><i class="ri-mail-lock-line"></i
                      ><span class="hide-menu"> Password-Reset</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="alert-circle"></i
                  ><span class="hide-menu">Error Pages</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="error-400.html" class="sidebar-link"
                      ><i class="ri-file-warning-line"></i>
                      <span class="hide-menu"> Error 400 </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="error-403.html" class="sidebar-link"
                      ><i class="ri-file-warning-line"></i
                      ><span class="hide-menu"> Error 403</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="error-404.html" class="sidebar-link"
                      ><i class="ri-file-warning-line"></i
                      ><span class="hide-menu"> Error 404</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="error-500.html" class="sidebar-link"
                      ><i class="ri-file-warning-line"></i
                      ><span class="hide-menu"> Error 500</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="error-503.html" class="sidebar-link"
                      ><i class="ri-file-warning-line"></i
                      ><span class="hide-menu"> Error 503</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="corner-down-right"></i
                  ><span class="hide-menu">Multi level dd</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="javascript:void(0)" class="sidebar-link"
                      ><i class="ri-logout-circle-r-line"></i
                      ><span class="hide-menu"> item 1.1</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="javascript:void(0)" class="sidebar-link"
                      ><i class="ri-logout-circle-r-line"></i
                      ><span class="hide-menu"> item 1.2</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      class="has-arrow sidebar-link"
                      href="javascript:void(0)"
                      aria-expanded="false"
                      ><i class="ri-play-list-add-line"></i>
                      <span class="hide-menu">Menu 1.3</span></a
                    >
                    <ul aria-expanded="false" class="collapse second-level">
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link"
                          ><i class="ri-logout-circle-line"></i
                          ><span class="hide-menu"> item 1.3.1</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link"
                          ><i class="ri-logout-circle-line"></i
                          ><span class="hide-menu"> item 1.3.2</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link"
                          ><i class="ri-logout-circle-line"></i
                          ><span class="hide-menu"> item 1.3.3</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link"
                          ><i class="ri-logout-circle-line"></i
                          ><span class="hide-menu"> item 1.3.4</span></a
                        >
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-item">
                    <a href="javascript:void(0)" class="sidebar-link"
                      ><i class="ri-list-settings-line"></i
                      ><span class="hide-menu"> item 1.4</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-small-cap">
                <i class="nav-small-line"></i>
                <span class="hide-menu">Extra</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="../../../docs/document.html"
                  aria-expanded="false"
                  ><i data-feather="clipboard"></i
                  ><span class="hide-menu">Documentation</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="authentication-login1.html"
                  aria-expanded="false"
                  ><i data-feather="log-out"></i
                  ><span class="hide-menu">Log Out</span></a
                >
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
        <!-- Bottom points-->
        <div class="sidebar-footer px-3 py-4">
          <div class="bg-light-info buynow-card mb-0 mt-3 w-100">
            <img
              src="../../assets/images/background/sidebar-buynow.png"
              class="mt-n5 buynow-img"
              alt="flexy"
            />
            <div class="sidebar-footer-text">
              <h4 class="fw-bold">Upgrade to</h4>
              <h4 class="fw-bold">Premium</h4>
              <a href="#" class="btn btn-primary mt-2">Upgrade</a>
            </div>
          </div>
        </div>
        <!-- End Bottom points-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-titles">
          <div class="row">
            <div class="col-lg-8 col-md-6 col-12 align-self-center">
              <h4 class="text-muted mb-0 fw-normal">Welcome Johnathan</h4>
              <h1 class="mb-0 fw-bold">eCommerce Dashboard</h1>
            </div>
            <div
              class="
                col-lg-4 col-md-6
                d-none d-md-flex
                align-items-center
                justify-content-end
              "
            >
              <select
                class="form-select theme-select border-0"
                aria-label="Default select example"
              >
                <option value="1">Today 23 March</option>
                <option value="2">Today 24 March</option>
                <option value="3">Today 25 March</option>
              </select>
              <a
                href="javascript:void(0)"
                class="btn btn-info d-flex align-items-center ms-2"
              >
                <i class="ri-add-line me-1"></i>
                Add New
              </a>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- row -->
          <div class="row">
            <div class="col-lg-4">
              <div
                class="
                  card
                  welcome-card2
                  overflow-hidden
                  bg-light-info
                  border-0
                "
              >
                <div class="card-body">
                  <div class="d-flex align-items-start position-relative">
                    <div>
                      <h4 class="fw-bold">Earnings</h4>
                      <h2 class="text-primary">$63,438.78</h2>
                    </div>
                    <div class="ms-auto">
                      <span
                        class="
                          btn btn-lg btn-primary btn-circle
                          d-flex
                          align-items-center
                          justify-content-center
                        "
                      >
                        <i data-feather="dollar-sign"></i>
                      </span>
                    </div>
                  </div>
                  <a href="#" class="btn btn-info position-relative mt-2"
                    >Download</a
                  >
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card-group">
                <div class="card">
                  <div class="card-body">
                    <span
                      class="
                        btn btn-xl btn-light-info
                        text-info
                        btn-circle
                        d-flex
                        align-items-center
                        justify-content-center
                      "
                    >
                      <i data-feather="users"></i>
                    </span>
                    <h3 class="mt-3 pt-1 mb-0">
                      39,354
                      <span class="fs-2 ms-1 text-danger font-weight-medium"
                        >-9%</span
                      >
                    </h3>
                    <h6 class="text-muted mb-0 fw-normal">Customers</h6>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <span
                      class="
                        btn btn-xl btn-light-warning
                        text-warning
                        btn-circle
                        d-flex
                        align-items-center
                        justify-content-center
                      "
                    >
                      <i data-feather="package"></i>
                    </span>
                    <h3 class="mt-3 pt-1 mb-0">
                      4396
                      <span class="fs-2 ms-1 text-success font-weight-medium"
                        >+23%</span
                      >
                    </h3>
                    <h6 class="text-muted mb-0 fw-normal">Products</h6>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <span
                      class="
                        btn btn-xl btn-light-danger
                        text-danger
                        btn-circle
                        d-flex
                        align-items-center
                        justify-content-center
                      "
                    >
                      <i data-feather="bar-chart"></i>
                    </span>
                    <h3 class="mt-3 pt-1 mb-0 d-flex align-items-center">
                      423,39
                      <span class="fs-2 ms-1 text-success font-weight-medium"
                        >+38%</span
                      >
                    </h3>
                    <h6 class="text-muted mb-0 fw-normal">Sales</h6>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <span
                      class="
                        btn btn-xl btn-light-success
                        text-success
                        btn-circle
                        d-flex
                        align-items-center
                        justify-content-center
                      "
                    >
                      <i data-feather="refresh-cw"></i>
                    </span>
                    <h3 class="mt-3 pt-1 mb-0">
                      835
                      <span class="fs-2 ms-1 text-danger font-weight-medium"
                        >-12%</span
                      >
                    </h3>
                    <h6 class="text-muted mb-0 fw-normal">Refunds</h6>
                  </div>
                </div>
              </div>
            </div>
            <!-- column -->
            <div class="col-lg-8">
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-md-flex align-items-center">
                    <div>
                      <h3 class="card-title">Products Performance</h3>
                      <h6 class="card-subtitle">Latest new products</h6>
                    </div>
                    <div class="ms-auto">
                      <ul class="list-style-none">
                        <li class="list-inline-item">
                          <i
                            class="
                              ri-checkbox-blank-circle-fill
                              text-primary
                              fs-1
                              me-1
                            "
                          ></i>
                          Expence
                        </li>
                        <li class="list-inline-item">
                          <i
                            class="
                              ri-checkbox-blank-circle-fill
                              text-warning
                              fs-1
                              me-1
                            "
                          ></i>
                          Budget
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col-md-5 border-end">
                      <div class="pe-4">
                        <h3 class="fs-8 d-flex align-items-center mb-0">
                          $93,438.78
                          <span
                            class="
                              btn btn-circle btn-sm btn-success
                              fs-1
                              ms-2
                              d-flex
                              align-items-center
                              justify-content-center
                            "
                            >23%</span
                          >
                        </h3>
                        <h6 class="fw-normal text-muted mb-0">Budget</h6>
                        <h3 class="fs-8 d-flex align-items-center mb-0 mt-4">
                          $32,839.00
                        </h3>
                        <h6 class="fw-normal text-muted mb-0">Expence</h6>
                        <div class="mt-3 mb-4">
                          <div id="budget-expence-side-chart"></div>
                        </div>
                        <a href="#" class="btn btn-info">Download Report</a>
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div id="product-performance" class="ps-3"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- column -->
            <div class="col-lg-4">
              <!-- earnings card -->
              <div class="card bg-primary w-100">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <h4 class="card-title text-white">Earnings</h4>
                    <div class="ms-auto">
                      <span
                        class="
                          btn btn-lg btn-info btn-circle
                          d-flex
                          align-items-center
                          justify-content-center
                        "
                      >
                        <i data-feather="dollar-sign"></i>
                      </span>
                    </div>
                  </div>
                  <div class="mt-3">
                    <h2 class="fs-8 text-white mb-0">$93,438.78</h2>
                    <span class="text-white op-5">Monthly revenue</span>
                  </div>
                </div>
              </div>
              <!-- yearly sales -->
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-6 col-xl-9">
                      <h3 class="fs-8 mb-0">43,246</h3>
                      <h6 class="text-muted fw-normal">Yearly sales</h6>
                      <div class="row mt-4 pt-2 gx-0">
                        <div class="col-6">
                          <i
                            class="
                              ri-checkbox-blank-circle-fill
                              text-info
                              fs-1
                              me-1
                            "
                          ></i>
                          2021
                        </div>
                        <div class="col-6">
                          <i
                            class="
                              ri-checkbox-blank-circle-fill
                              text-primary
                              fs-1
                              me-1
                            "
                          ></i>
                          2020
                        </div>
                        <div class="col-6 mt-2">
                          <i
                            class="
                              ri-checkbox-blank-circle-fill
                              text-warning
                              fs-1
                              me-1
                            "
                          ></i>
                          2019
                        </div>
                        <div class="col-6 mt-2">
                          <i
                            class="
                              ri-checkbox-blank-circle-fill
                              text-muted-lite
                              fs-1
                              me-1
                            "
                          ></i>
                          2018
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-xl-3 d-flex align-items-center">
                      <div id="yearly-sales"></div>
                      <i
                        data-feather="shopping-cart"
                        class="
                          total-sales-icon
                          text-muted-lite
                          feather-md
                          mt-n2
                        "
                      ></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- column -->
            <div class="col-lg-4 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <h3 class="card-title">Recent Transactions</h3>
                  <h6 class="card-subtitle">List of payments</h6>
                  <div class="d-flex align-items-center mt-4 mb-3 pb-1">
                    <a
                      href="#"
                      class="
                        btn btn-rounded-lg btn-light-info
                        text-info
                        round
                        d-flex
                        align-items-center
                        justify-content-center
                      "
                    >
                      <i
                        data-feather="dollar-sign"
                        class="flex-shrink-0 feather-sm"
                      ></i>
                    </a>
                    <div class="ms-3 ps-1">
                      <h5 class="mb-1">PayPal Transfer</h5>
                      <h6 class="text-muted fw-normal mb-0">Money Added</h6>
                    </div>
                    <h6 class="ms-auto text-success">+$350</h6>
                  </div>
                  <div class="d-flex align-items-center my-3 py-1">
                    <a
                      href="#"
                      class="
                        btn btn-rounded-lg btn-light-success
                        text-success
                        round
                        d-flex
                        align-items-center
                        justify-content-center
                      "
                    >
                      <i
                        data-feather="shield"
                        class="flex-shrink-0 feather-sm"
                      ></i>
                    </a>
                    <div class="ms-3 ps-1">
                      <h5 class="mb-1">Wallet</h5>
                      <h6 class="text-muted fw-normal mb-0">Bill payment</h6>
                    </div>
                    <h6 class="ms-auto text-danger">-$560</h6>
                  </div>
                  <div class="d-flex align-items-center my-3 py-1">
                    <a
                      href="#"
                      class="
                        btn btn-rounded-lg btn-light-danger
                        text-danger
                        round
                        d-flex
                        align-items-center
                        justify-content-center
                      "
                    >
                      <i
                        data-feather="credit-card"
                        class="flex-shrink-0 feather-sm"
                      ></i>
                    </a>
                    <div class="ms-3 ps-1">
                      <h5 class="mb-1">Credit Card</h5>
                      <h6 class="text-muted fw-normal mb-0">Money reversed</h6>
                    </div>
                    <h6 class="ms-auto text-success">+$350</h6>
                  </div>
                  <div class="d-flex align-items-center my-3 py-1">
                    <a
                      href="#"
                      class="
                        btn btn-rounded-lg btn-light-warning
                        text-warning
                        round
                        d-flex
                        align-items-center
                        justify-content-center
                      "
                    >
                      <i
                        data-feather="check"
                        class="flex-shrink-0 feather-sm"
                      ></i>
                    </a>
                    <div class="ms-3 ps-1">
                      <h5 class="mb-1">Bank Transfer</h5>
                      <h6 class="text-muted fw-normal mb-0">Money Added</h6>
                    </div>
                    <h6 class="ms-auto text-success">+$350</h6>
                  </div>
                  <div
                    class="d-flex align-items-center my-3 pb-4 border-bottom"
                  >
                    <a
                      href="#"
                      class="
                        btn btn-rounded-lg btn-light-primary
                        text-primary
                        round
                        d-flex
                        align-items-center
                        justify-content-center
                      "
                    >
                      <i
                        data-feather="refresh-ccw"
                        class="flex-shrink-0 feather-sm"
                      ></i>
                    </a>
                    <div class="ms-3 ps-1">
                      <h5 class="mb-1">Refund</h5>
                      <h6 class="text-muted fw-normal mb-0">Payment Sent</h6>
                    </div>
                    <h6 class="ms-auto text-danger">-$50</h6>
                  </div>
                  <div class="d-flex align-items-center">
                    <a href="#" class="btn btn-info">Add</a>
                    <div class="ms-auto">
                      <span class="fs-3 text-muted"
                        >36 Recent Transactions
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- column -->
            <div class="col-lg-8 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <h3 class="card-title">Products Performance</h3>
                  <h6 class="card-subtitle">Latest new products</h6>
                  <!-- Nav tabs -->
                  <ul
                    class="nav nav-pills justify-content-end mt-md-n5"
                    role="tablist"
                  >
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        data-bs-toggle="tab"
                        href="#navpill-11"
                        role="tab"
                      >
                        <span>Pending</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a
                        class="nav-link active"
                        data-bs-toggle="tab"
                        href="#navpill-22"
                        role="tab"
                      >
                        <span>Active</span>
                      </a>
                    </li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div class="tab-pane" id="navpill-11" role="tabpanel">
                      <div class="table-responsive mt-3">
                        <table
                          class="table mb-0 align-middle text-sm-nowrap fs-3"
                        >
                          <tbody>
                            <tr>
                              <td class="px-0">
                                <div class="d-flex align-items-center">
                                  <img
                                    src="../../assets/images/product/s-prd2.jpg"
                                    class="btn-rounded-lg"
                                    alt="product"
                                  />
                                  <div class="ms-4">
                                    <h5 class="mb-0">
                                      Supreme toys presents best gift
                                    </h5>
                                    <span class="text-muted fs-3 mt-2"
                                      >Angular, React</span
                                    >
                                  </div>
                                </div>
                              </td>
                              <td>
                                <span class="text-dark font-weight-medium fs-3"
                                  >Excellent</span
                                >
                                <div class="progress mt-2">
                                  <div
                                    class="progress-bar bg-success"
                                    role="progressbar"
                                    style="width: 98%"
                                    aria-valuenow="98"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                  ></div>
                                </div>
                                <h6 class="text-muted fw-normal mt-2">
                                  98% Sold
                                </h6>
                              </td>
                              <td>
                                <span class="fs-3 text-muted fw-normal"
                                  >Earnings</span
                                >
                                <h5 class="mb-0">$546,000</h5>
                              </td>
                              <td class="pe-0 text-end">
                                <div class="d-flex align-items-center">
                                  <a href="#" class="text-muted me-3">
                                    <i
                                      data-feather="edit"
                                      class="feather-sm"
                                    ></i>
                                  </a>
                                  <a href="#" class="text-muted">
                                    <i
                                      data-feather="trash"
                                      class="feather-sm"
                                    ></i>
                                  </a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td class="px-0">
                                <div class="d-flex align-items-center">
                                  <img
                                    src="../../assets/images/product/s-prd3.jpg"
                                    class="btn-rounded-lg"
                                    alt="product"
                                  />
                                  <div class="ms-4">
                                    <h5 class="mb-0">
                                      Red color shoes from Gucci
                                    </h5>
                                    <span class="text-muted fs-3 mt-2"
                                      >Bootstrap, React</span
                                    >
                                  </div>
                                </div>
                              </td>
                              <td>
                                <span class="text-dark font-weight-medium fs-3"
                                  >Average</span
                                >
                                <div class="progress mt-2">
                                  <div
                                    class="progress-bar bg-warning"
                                    role="progressbar"
                                    style="width: 46%"
                                    aria-valuenow="46"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                  ></div>
                                </div>
                                <h6 class="text-muted fw-normal mt-2">
                                  46% Sold
                                </h6>
                              </td>
                              <td>
                                <span class="fs-3 text-muted fw-normal"
                                  >Earnings</span
                                >
                                <h5 class="mb-0">$546,000</h5>
                              </td>
                              <td class="pe-0 text-end">
                                <div class="d-flex align-items-center">
                                  <a href="#" class="text-muted me-3">
                                    <i
                                      data-feather="edit"
                                      class="feather-sm"
                                    ></i>
                                  </a>
                                  <a href="#" class="text-muted">
                                    <i
                                      data-feather="trash"
                                      class="feather-sm"
                                    ></i>
                                  </a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td class="px-0">
                                <div class="d-flex align-items-center">
                                  <img
                                    src="../../assets/images/product/s-prd1.jpg"
                                    class="btn-rounded-lg"
                                    alt="product"
                                  />
                                  <div class="ms-4">
                                    <h5 class="mb-0">
                                      Nike branding shoes for Men and Women
                                    </h5>
                                    <span class="text-muted fs-3 mt-2"
                                      >Bootstrap, Angular, React</span
                                    >
                                  </div>
                                </div>
                              </td>
                              <td>
                                <span class="text-dark font-weight-medium fs-3"
                                  >Good</span
                                >
                                <div class="progress mt-2">
                                  <div
                                    class="progress-bar bg-info"
                                    role="progressbar"
                                    style="width: 65%"
                                    aria-valuenow="65"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                  ></div>
                                </div>
                                <h6 class="text-muted fw-normal mt-2">
                                  65% Sold
                                </h6>
                              </td>
                              <td>
                                <span class="fs-3 text-muted fw-normal"
                                  >Earnings</span
                                >
                                <h5 class="mb-0">$546,000</h5>
                              </td>
                              <td class="pe-0 text-end">
                                <div class="d-flex align-items-center">
                                  <a href="#" class="text-muted me-3">
                                    <i
                                      data-feather="edit"
                                      class="feather-sm"
                                    ></i>
                                  </a>
                                  <a href="#" class="text-muted">
                                    <i
                                      data-feather="trash"
                                      class="feather-sm"
                                    ></i>
                                  </a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td class="px-0 pb-0">
                                <div class="d-flex align-items-center">
                                  <img
                                    src="../../assets/images/product/s-prd4.jpg"
                                    class="btn-rounded-lg"
                                    alt="product"
                                  />
                                  <div class="ms-4">
                                    <h5 class="mb-0">
                                      Stylish sneakers for men and women
                                    </h5>
                                    <span class="text-muted fs-3 mt-2"
                                      >Bootstrap, Angular, React</span
                                    >
                                  </div>
                                </div>
                              </td>
                              <td class="pb-0">
                                <span class="text-dark font-weight-medium fs-3"
                                  >Bad</span
                                >
                                <div class="progress mt-2">
                                  <div
                                    class="progress-bar bg-danger"
                                    role="progressbar"
                                    style="width: 23%"
                                    aria-valuenow="23"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                  ></div>
                                </div>
                                <h6 class="text-muted fw-normal mt-2">
                                  23% Sold
                                </h6>
                              </td>
                              <td class="pb-0">
                                <span class="fs-3 text-muted fw-normal"
                                  >Earnings</span
                                >
                                <h5 class="mb-0">$546,000</h5>
                              </td>
                              <td class="pe-0 pb-0 text-end">
                                <div class="d-flex align-items-center">
                                  <a href="#" class="text-muted me-3">
                                    <i
                                      data-feather="edit"
                                      class="feather-sm"
                                    ></i>
                                  </a>
                                  <a href="#" class="text-muted">
                                    <i
                                      data-feather="trash"
                                      class="feather-sm"
                                    ></i>
                                  </a>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div
                      class="tab-pane active"
                      id="navpill-22"
                      role="tabpanel"
                    >
                      <div class="table-responsive mt-3">
                        <table
                          class="table mb-0 align-middle text-sm-nowrap fs-3"
                        >
                          <tbody>
                            <tr>
                              <td class="px-0">
                                <div class="d-flex align-items-center">
                                  <img
                                    src="../../assets/images/product/s-prd1.jpg"
                                    class="btn-rounded-lg"
                                    alt="product"
                                  />
                                  <div class="ms-4">
                                    <h5 class="mb-0">
                                      Nike branding shoes for Men and Women
                                    </h5>
                                    <span class="text-muted fs-3 mt-2"
                                      >Bootstrap, Angular, React</span
                                    >
                                  </div>
                                </div>
                              </td>
                              <td>
                                <span class="text-dark font-weight-medium fs-3"
                                  >Good</span
                                >
                                <div class="progress mt-2">
                                  <div
                                    class="progress-bar bg-info"
                                    role="progressbar"
                                    style="width: 65%"
                                    aria-valuenow="65"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                  ></div>
                                </div>
                                <h6 class="text-muted fw-normal mt-2">
                                  65% Sold
                                </h6>
                              </td>
                              <td>
                                <span class="fs-3 text-muted fw-normal"
                                  >Earnings</span
                                >
                                <h5 class="mb-0">$546,000</h5>
                              </td>
                              <td class="pe-0 text-end">
                                <div class="d-flex align-items-center">
                                  <a href="#" class="text-muted me-3">
                                    <i
                                      data-feather="edit"
                                      class="feather-sm"
                                    ></i>
                                  </a>
                                  <a href="#" class="text-muted">
                                    <i
                                      data-feather="trash"
                                      class="feather-sm"
                                    ></i>
                                  </a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td class="px-0">
                                <div class="d-flex align-items-center">
                                  <img
                                    src="../../assets/images/product/s-prd2.jpg"
                                    class="btn-rounded-lg"
                                    alt="product"
                                  />
                                  <div class="ms-4">
                                    <h5 class="mb-0">
                                      Supreme toys presents best gift
                                    </h5>
                                    <span class="text-muted fs-3 mt-2"
                                      >Angular, React</span
                                    >
                                  </div>
                                </div>
                              </td>
                              <td>
                                <span class="text-dark font-weight-medium fs-3"
                                  >Excellent</span
                                >
                                <div class="progress mt-2">
                                  <div
                                    class="progress-bar bg-success"
                                    role="progressbar"
                                    style="width: 98%"
                                    aria-valuenow="98"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                  ></div>
                                </div>
                                <h6 class="text-muted fw-normal mt-2">
                                  98% Sold
                                </h6>
                              </td>
                              <td>
                                <span class="fs-3 text-muted fw-normal"
                                  >Earnings</span
                                >
                                <h5 class="mb-0">$546,000</h5>
                              </td>
                              <td class="pe-0 text-end">
                                <div class="d-flex align-items-center">
                                  <a href="#" class="text-muted me-3">
                                    <i
                                      data-feather="edit"
                                      class="feather-sm"
                                    ></i>
                                  </a>
                                  <a href="#" class="text-muted">
                                    <i
                                      data-feather="trash"
                                      class="feather-sm"
                                    ></i>
                                  </a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td class="px-0">
                                <div class="d-flex align-items-center">
                                  <img
                                    src="../../assets/images/product/s-prd3.jpg"
                                    class="btn-rounded-lg"
                                    alt="product"
                                  />
                                  <div class="ms-4">
                                    <h5 class="mb-0">
                                      Red color shoes from Gucci
                                    </h5>
                                    <span class="text-muted fs-3 mt-2"
                                      >Bootstrap, React</span
                                    >
                                  </div>
                                </div>
                              </td>
                              <td>
                                <span class="text-dark font-weight-medium fs-3"
                                  >Average</span
                                >
                                <div class="progress mt-2">
                                  <div
                                    class="progress-bar bg-warning"
                                    role="progressbar"
                                    style="width: 46%"
                                    aria-valuenow="46"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                  ></div>
                                </div>
                                <h6 class="text-muted fw-normal mt-2">
                                  46% Sold
                                </h6>
                              </td>
                              <td>
                                <span class="fs-3 text-muted fw-normal"
                                  >Earnings</span
                                >
                                <h5 class="mb-0">$546,000</h5>
                              </td>
                              <td class="pe-0 text-end">
                                <div class="d-flex align-items-center">
                                  <a href="#" class="text-muted me-3">
                                    <i
                                      data-feather="edit"
                                      class="feather-sm"
                                    ></i>
                                  </a>
                                  <a href="#" class="text-muted">
                                    <i
                                      data-feather="trash"
                                      class="feather-sm"
                                    ></i>
                                  </a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td class="px-0 pb-0">
                                <div class="d-flex align-items-center">
                                  <img
                                    src="../../assets/images/product/s-prd4.jpg"
                                    class="btn-rounded-lg"
                                    alt="product"
                                  />
                                  <div class="ms-4">
                                    <h5 class="mb-0">
                                      Stylish sneakers for men and women
                                    </h5>
                                    <span class="text-muted fs-3 mt-2"
                                      >Bootstrap, Angular, React</span
                                    >
                                  </div>
                                </div>
                              </td>
                              <td class="pb-0">
                                <span class="text-dark font-weight-medium fs-3"
                                  >Bad</span
                                >
                                <div class="progress mt-2">
                                  <div
                                    class="progress-bar bg-danger"
                                    role="progressbar"
                                    style="width: 23%"
                                    aria-valuenow="23"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                  ></div>
                                </div>
                                <h6 class="text-muted fw-normal mt-2">
                                  23% Sold
                                </h6>
                              </td>
                              <td class="pb-0">
                                <span class="fs-3 text-muted fw-normal"
                                  >Earnings</span
                                >
                                <h5 class="mb-0">$546,000</h5>
                              </td>
                              <td class="pe-0 pb-0 text-end">
                                <div class="d-flex align-items-center">
                                  <a href="#" class="text-muted me-3">
                                    <i
                                      data-feather="edit"
                                      class="feather-sm"
                                    ></i>
                                  </a>
                                  <a href="#" class="text-muted">
                                    <i
                                      data-feather="trash"
                                      class="feather-sm"
                                    ></i>
                                  </a>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- column -->
            <div class="col-lg-4 d-flex align-items-stretch">
              <div class="card w-100 overflow-hidden">
                <div class="card-body pb-0">
                  <div class="d-flex align-items-start">
                    <div>
                      <h3 class="card-title">Weekly Stats</h3>
                      <h6 class="card-subtitle mb-0">Average sales</h6>
                    </div>
                    <div class="ms-auto">
                      <div class="dropdown">
                        <a
                          href="#"
                          class="text-muted-lite"
                          id="year1-dropdown"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          <i data-feather="more-horizontal"></i>
                        </a>
                        <ul
                          class="dropdown-menu"
                          aria-labelledby="year1-dropdown"
                        >
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li>
                            <a class="dropdown-item" href="#">Another action</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#"
                              >Something else here</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="mt-5 pb-3 d-flex align-items-center">
                    <span class="btn btn-primary btn-circle">
                      <i data-feather="shopping-cart"></i>
                    </span>
                    <div class="ms-3">
                      <h5 class="mb-0 fw-bold">Top Sales</h5>
                      <span class="text-muted fs-9">Johnathan Doe</span>
                    </div>
                    <div class="ms-auto">
                      <span class="badge bg-light-secondary text-muted"
                        >+68%</span
                      >
                    </div>
                  </div>
                  <div class="py-3 d-flex align-items-center">
                    <span class="btn btn-warning btn-circle">
                      <i data-feather="star"></i>
                    </span>
                    <div class="ms-3">
                      <h5 class="mb-0 fw-bold">Best Seller</h5>
                      <span class="text-muted fs-9">MaterialPro Admin</span>
                    </div>
                    <div class="ms-auto">
                      <span class="badge bg-light-secondary text-muted"
                        >+68%</span
                      >
                    </div>
                  </div>
                  <div class="pt-3 d-flex align-items-center">
                    <span class="btn btn-success btn-circle">
                      <i data-feather="message-square"></i>
                    </span>
                    <div class="ms-3">
                      <h5 class="mb-0 fw-bold">Most Commented</h5>
                      <span class="text-muted fs-9">Ample Admin</span>
                    </div>
                    <div class="ms-auto">
                      <span class="badge bg-light-secondary text-muted"
                        >+68%</span
                      >
                    </div>
                  </div>
                </div>
                <div id="weekly-stats"></div>
              </div>
            </div>
            <!-- column -->
            <div class="col-lg-4 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex align-items-start">
                    <div>
                      <h3 class="card-title">MedicalPro Branding</h3>
                      <h6 class="card-subtitle mb-0">Branding & Website</h6>
                    </div>
                    <div class="ms-auto">
                      <div class="dropdown">
                        <a
                          href="#"
                          class="text-muted-lite"
                          id="medical-dropdown"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          <i data-feather="more-horizontal"></i>
                        </a>
                        <ul
                          class="dropdown-menu"
                          aria-labelledby="medical-dropdown"
                        >
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li>
                            <a class="dropdown-item" href="#">Another action</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#"
                              >Something else here</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="mt-4">
                    <span class="badge bg-light-primary text-primary"
                      >16 APR, 2021</span
                    >
                    <div class="row border-bottom mt-4 gx-0">
                      <div class="col-4 pb-3 border-end">
                        <h6 class="fw-normal text-muted mb-0">Due Date</h6>
                        <span class="fs-3 font-weight-medium text-dark"
                          >Oct 23, 2021</span
                        >
                      </div>
                      <div class="col-4 pb-3 border-end ps-3">
                        <h6 class="fw-normal text-muted mb-0">Budget</h6>
                        <span class="fs-3 font-weight-medium text-dark"
                          >$98,500</span
                        >
                      </div>
                      <div class="col-4 pb-3 ps-3">
                        <h6 class="fw-normal text-muted mb-0">Expense</h6>
                        <span class="fs-3 font-weight-medium text-dark"
                          >$63,000</span
                        >
                      </div>
                    </div>
                    <div class="mt-4 pb-4 border-bottom">
                      <h4>Teams</h4>
                      <div class="mt-2 pt-1 mb-2">
                        <span class="badge bg-warning">Bootstrap</span>
                        <span class="badge bg-danger">Angular</span>
                      </div>
                    </div>
                    <div class="mt-4 pb-4 border-bottom">
                      <h4>Leaders</h4>
                      <div class="mt-2 pt-1 mb-2">
                        <a href="#" class="me-1">
                          <img
                            src="../../assets/images/users/1.jpg"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="John"
                            class="rounded-circle"
                            width="35"
                          />
                        </a>
                        <a href="#" class="me-1">
                          <img
                            src="../../assets/images/users/2.jpg"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="Nirav"
                            class="rounded-circle"
                            width="35"
                          />
                        </a>
                        <a href="#" class="me-1">
                          <img
                            src="../../assets/images/users/3.jpg"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="Sunil"
                            class="rounded-circle"
                            width="35"
                          />
                        </a>
                        <a href="#">
                          <img
                            src="../../assets/images/users/4.jpg"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="Maruti"
                            class="rounded-circle"
                            width="35"
                          />
                        </a>
                      </div>
                    </div>
                    <div class="d-flex align-items-center mt-3">
                      <a href="#" class="btn btn-info">Add</a>
                      <div class="ms-auto">
                        <span class="fs-3 text-muted"
                          >28 Team Members, 268 Tasks
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- column -->
            <div class="col-lg-4 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex align-items-start">
                    <div>
                      <h3 class="card-title">Daily Activities</h3>
                      <h6 class="card-subtitle mb-0">Overview of Years</h6>
                    </div>
                    <div class="ms-auto">
                      <div class="dropdown">
                        <a
                          href="#"
                          class="text-muted-lite"
                          id="daily-dropdown"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          <i data-feather="more-horizontal"></i>
                        </a>
                        <ul
                          class="dropdown-menu"
                          aria-labelledby="daily-dropdown"
                        >
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li>
                            <a class="dropdown-item" href="#">Another action</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#"
                              >Something else here</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="mt-4 pt-2">
                    <img
                      src="../../assets/images/background/blog-bg2.jpg"
                      class="blog-img btn-rounded-lg img-fluid w-100"
                      alt="flexy"
                    />
                    <h3 class="card-title mt-4 mb-1">
                      Angular 12 coming soon!
                    </h3>
                    <span class="text-muted">
                      By
                      <a href="#" class="text-primary">Johnathan Doe</a>
                    </span>
                    <p class="fs-3 mt-4 text-muted">
                      This will be the small description for the news you have
                      shown here. There could be some great info.
                    </p>
                    <a href="#" class="btn btn-info mt-3">Read more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">2022© All Rights Reserved by Wrappixel</footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <aside class="nav-customizer" id="shopping-cart">
      <div class="nav-customizer-body">
        <div class="rounded-top d-flex p-30 bg-white pb-3 align-items-center">
          <h3 class="card-title mb-0">Shopping Cart</h3>
          <div class="ms-auto">
            <a href="javascript:void(0)" class="nav-sidebar text-muted py-0">
              <i data-feather="x-circle"></i>
            </a>
          </div>
        </div>
        <!-- items -->
        <div
          class="p-30 pt-0 bg-white scrollable position-relative"
          style="height: calc(100vh - 245px)"
        >
          <ul class="list-style-none">
            <li class="py-4 border-bottom">
              <div class="d-flex align-items-center">
                <div>
                  <img
                    src="../../assets/images/product/s-prd1.jpg"
                    class="btn-rounded-lg"
                    alt="product"
                  />
                </div>
                <div class="ms-3 ps-1">
                  <h5 class="mb-0">Supreme toys cooker</h5>
                  <span class="text-muted fs-3">Kitchenware Item</span>
                  <div class="d-flex align-items-center">
                    <h5 class="mb-0">$250</h5>
                    <!-- widget -->
                    <div class="shopping-widget ms-2">
                      <div class="form-group mb-0 pt-1">
                        <input
                          type="text"
                          value="1"
                          name="qtyspin1"
                          id="qtyspin1"
                          onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                          class="
                            form-control
                            text-center
                            border-0
                            bg-transparent
                            counter
                            fs-4
                            text-dark
                            font-weight-medium
                          "
                        />
                      </div>
                      <div class="decrease-btn">
                        <button
                          type="button"
                          class="
                            btn btn-sm btn-light-success
                            text-success
                            decrease
                            waves-effect waves-light
                          "
                        >
                          <i data-feather="minus" class="feather-xs"></i>
                        </button>
                      </div>
                      <div class="increase-btn">
                        <button
                          type="button"
                          class="
                            btn btn-sm btn-light-success
                            text-success
                            increase
                            waves-effect waves-light
                          "
                        >
                          <i data-feather="plus" class="feather-xs"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="py-4 border-bottom">
              <div class="d-flex align-items-center">
                <div>
                  <img
                    src="../../assets/images/product/s-prd2.jpg"
                    class="btn-rounded-lg"
                    alt="product"
                  />
                </div>
                <div class="ms-3 ps-1">
                  <h5 class="mb-0">Supreme toys cooker</h5>
                  <span class="text-muted fs-3">Kitchenware Item</span>
                  <div class="d-flex align-items-center">
                    <h5 class="mb-0">$250</h5>
                    <!-- widget -->
                    <div class="shopping-widget ms-2">
                      <div class="form-group mb-0 pt-1">
                        <input
                          type="text"
                          value="1"
                          name="qtyspin2"
                          id="qtyspin2"
                          onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                          class="
                            form-control
                            text-center
                            border-0
                            bg-transparent
                            counter
                            fs-4
                            text-dark
                            font-weight-medium
                          "
                        />
                      </div>
                      <div class="decrease-btn">
                        <button
                          type="button"
                          class="
                            btn btn-sm btn-light-success
                            text-success
                            decrease
                            waves-effect waves-light
                          "
                        >
                          <i data-feather="minus" class="feather-xs"></i>
                        </button>
                      </div>
                      <div class="increase-btn">
                        <button
                          type="button"
                          class="
                            btn btn-sm btn-light-success
                            text-success
                            increase
                            waves-effect waves-light
                          "
                        >
                          <i data-feather="plus" class="feather-xs"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="py-4 border-bottom">
              <div class="d-flex align-items-center">
                <div>
                  <img
                    src="../../assets/images/product/s-prd3.jpg"
                    class="btn-rounded-lg"
                    alt="product"
                  />
                </div>
                <div class="ms-3 ps-1">
                  <h5 class="mb-0">Supreme toys cooker</h5>
                  <span class="text-muted fs-3">Kitchenware Item</span>
                  <div class="d-flex align-items-center">
                    <h5 class="mb-0">$250</h5>
                    <!-- widget -->
                    <div class="shopping-widget ms-2">
                      <div class="form-group mb-0 pt-1">
                        <input
                          type="text"
                          value="1"
                          name="qtyspin3"
                          id="qtyspin3"
                          onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                          class="
                            form-control
                            text-center
                            border-0
                            bg-transparent
                            counter
                            fs-4
                            text-dark
                            font-weight-medium
                          "
                        />
                      </div>
                      <div class="decrease-btn">
                        <button
                          type="button"
                          class="
                            btn btn-sm btn-light-success
                            text-success
                            decrease
                            waves-effect waves-light
                          "
                        >
                          <i data-feather="minus" class="feather-xs"></i>
                        </button>
                      </div>
                      <div class="increase-btn">
                        <button
                          type="button"
                          class="
                            btn btn-sm btn-light-success
                            text-success
                            increase
                            waves-effect waves-light
                          "
                        >
                          <i data-feather="plus" class="feather-xs"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="py-4 border-bottom">
              <div class="d-flex align-items-center">
                <div>
                  <img
                    src="../../assets/images/product/s-prd4.jpg"
                    class="btn-rounded-lg"
                    alt="product"
                  />
                </div>
                <div class="ms-3 ps-1">
                  <h5 class="mb-0">Supreme toys cooker</h5>
                  <span class="text-muted fs-3">Kitchenware Item</span>
                  <div class="d-flex align-items-center">
                    <h5 class="mb-0">$250</h5>
                    <!-- widget -->
                    <div class="shopping-widget ms-2">
                      <div class="form-group mb-0 pt-1">
                        <input
                          type="text"
                          value="1"
                          name="qtyspin"
                          id="qtyspin"
                          onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                          class="
                            form-control
                            text-center
                            border-0
                            bg-transparent
                            counter
                            fs-4
                            text-dark
                            font-weight-medium
                          "
                        />
                      </div>
                      <div class="decrease-btn">
                        <button
                          type="button"
                          class="
                            btn btn-sm btn-light-success
                            text-success
                            decrease
                            waves-effect waves-light
                          "
                        >
                          <i data-feather="minus" class="feather-xs"></i>
                        </button>
                      </div>
                      <div class="increase-btn">
                        <button
                          type="button"
                          class="
                            btn btn-sm btn-light-success
                            text-success
                            increase
                            waves-effect waves-light
                          "
                        >
                          <i data-feather="plus" class="feather-xs"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="p-30 bg-white">
          <div class="d-flex align-items-center py-2">
            <span class="text-muted fs-3">Sub Total</span>
            <div class="ms-auto">
              <span class="text-dark font-weight-medium fs-3">$2530</span>
            </div>
          </div>
          <div class="d-flex align-items-center py-2">
            <span class="text-muted fs-3">Total</span>
            <div class="ms-auto">
              <span class="text-dark font-weight-medium fs-3">$6830</span>
            </div>
          </div>
          <a
            class="btn btn-info text-white w-100 d-block"
            href="javascript:void(0);"
          >
            Place order
          </a>
        </div>
      </div>
    </aside>
    <!-- ============================================================= -->
    <!-- customizer Panel -->
    <!-- ============================================================= -->
    <aside class="customizer">
      <a href="javascript:void(0)" class="service-panel-toggle"
        ><i class="fa fa-spin ri-settings-3-line fs-7"></i
      ></a>
      <div class="customizer-body">
        <ul class="nav customizer-tab" role="tablist">
          <li class="nav-item">
            <a
              class="nav-link active"
              id="pills-home-tab"
              data-bs-toggle="pill"
              href="#pills-home"
              role="tab"
              aria-controls="pills-home"
              aria-selected="true"
              ><i class="ri-tools-fill fs-6"></i
            ></a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="pills-profile-tab"
              data-bs-toggle="pill"
              href="#chat"
              role="tab"
              aria-controls="chat"
              aria-selected="false"
              ><i class="ri-message-3-line fs-6"></i
            ></a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="pills-contact-tab"
              data-bs-toggle="pill"
              href="#pills-contact"
              role="tab"
              aria-controls="pills-contact"
              aria-selected="false"
              ><i class="ri-timer-line fs-6"></i
            ></a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <!-- Tab 1 -->
          <div
            class="tab-pane fade show active"
            id="pills-home"
            role="tabpanel"
            aria-labelledby="pills-home-tab"
          >
            <div class="p-3 border-bottom">
              <!-- Sidebar -->
              <h5 class="font-weight-medium mb-2 mt-2">Layout Settings</h5>
              <div class="form-check mt-3">
                <input
                  type="checkbox"
                  name="theme-view"
                  class="form-check-input"
                  id="theme-view"
                />
                <label class="form-check-label" for="theme-view">
                  <span>Dark Theme</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  class="sidebartoggler form-check-input"
                  name="collapssidebar"
                  id="collapssidebar"
                />
                <label class="form-check-label" for="collapssidebar">
                  <span>Collapse Sidebar</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  name="sidebar-position"
                  class="form-check-input"
                  id="sidebar-position"
                />
                <label class="form-check-label" for="sidebar-position">
                  <span>Fixed Sidebar</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  name="header-position"
                  class="form-check-input"
                  id="header-position"
                />
                <label class="form-check-label" for="header-position">
                  <span>Fixed Header</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  name="boxed-layout"
                  class="form-check-input"
                  id="boxed-layout"
                />
                <label class="form-check-label" for="boxed-layout">
                  <span>Boxed Layout</span>
                </label>
              </div>
            </div>
            <div class="p-3 border-bottom">
              <!-- Logo BG -->
              <h5 class="font-weight-medium mb-2 mt-2">Logo Backgrounds</h5>
              <ul class="theme-color m-0 p-0">
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin1"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin2"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin3"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin4"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin5"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin6"
                  ></a>
                </li>
              </ul>
              <!-- Logo BG -->
            </div>
            <div class="p-3 border-bottom">
              <!-- Navbar BG -->
              <h5 class="font-weight-medium mb-2 mt-2">Navbar Backgrounds</h5>
              <ul class="theme-color m-0 p-0">
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin1"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin2"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin3"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin4"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin5"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin6"
                  ></a>
                </li>
              </ul>
              <!-- Navbar BG -->
            </div>
            <div class="p-3 border-bottom">
              <!-- Logo BG -->
              <h5 class="font-weight-medium mb-2 mt-2">Sidebar Backgrounds</h5>
              <ul class="theme-color m-0 p-0">
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin1"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin2"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin3"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin4"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin5"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin6"
                  ></a>
                </li>
              </ul>
              <!-- Logo BG -->
            </div>
          </div>
          <!-- End Tab 1 -->
          <!-- Tab 2 -->
          <div
            class="tab-pane fade"
            id="chat"
            role="tabpanel"
            aria-labelledby="pills-profile-tab"
          >
            <ul class="mailbox list-style-none mt-3">
              <li>
                <div class="message-center chat-scroll position-relative">
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_1"
                    data-user-id="1"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="../../assets/images/users/1.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span class="profile-status rounded-circle online"></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Pavan kumar</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:30 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_2"
                    data-user-id="2"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="../../assets/images/users/2.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span class="profile-status rounded-circle busy"></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Sonu Nigam</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >I've sung a song! See you at</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:10 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_3"
                    data-user-id="3"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="../../assets/images/users/3.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span class="profile-status rounded-circle away"></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Arijit Sinh</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >I am a singer!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:08 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_4"
                    data-user-id="4"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="../../assets/images/users/4.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Nirav Joshi</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_5"
                    data-user-id="5"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="../../assets/images/users/5.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Sunil Joshi</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_6"
                    data-user-id="6"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="../../assets/images/users/6.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Akshay Kumar</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_7"
                    data-user-id="7"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="../../assets/images/users/7.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Pavan kumar</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_8"
                    data-user-id="8"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="../../assets/images/users/8.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Varun Dhavan</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                </div>
              </li>
            </ul>
          </div>
          <!-- End Tab 2 -->
          <!-- Tab 3 -->
          <div
            class="tab-pane fade p-3"
            id="pills-contact"
            role="tabpanel"
            aria-labelledby="pills-contact-tab"
          >
            <h6 class="mt-3 mb-3">Activity Timeline</h6>
            <div class="steamline">
              <div class="sl-item">
                <div class="sl-left bg-light-success text-success">
                  <i data-feather="user" class="feather-sm fill-white"></i>
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">
                    Meeting today <span class="sl-date"> 5pm</span>
                  </div>
                  <div class="desc">you can write anything</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left bg-light-info text-info">
                  <i data-feather="camera" class="feather-sm fill-white"></i>
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">Send documents to Clark</div>
                  <div class="desc">Lorem Ipsum is simply</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img
                    class="rounded-circle"
                    alt="user"
                    src="../../assets/images/users/2.jpg"
                  />
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">
                    Go to the Doctor <span class="sl-date">5 minutes ago</span>
                  </div>
                  <div class="desc">Contrary to popular belief</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img
                    class="rounded-circle"
                    alt="user"
                    src="../../assets/images/users/1.jpg"
                  />
                </div>
                <div class="sl-right">
                  <div>
                    <a href="javascript:void(0)">Stephen</a>
                    <span class="sl-date">5 minutes ago</span>
                  </div>
                  <div class="desc">Approve meeting with tiger</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left bg-light-primary text-primary">
                  <i data-feather="user" class="feather-sm fill-white"></i>
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">
                    Meeting today <span class="sl-date"> 5pm</span>
                  </div>
                  <div class="desc">you can write anything</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left bg-light-info text-info">
                  <i data-feather="send" class="feather-sm fill-white"></i>
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">Send documents to Clark</div>
                  <div class="desc">Lorem Ipsum is simply</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img
                    class="rounded-circle"
                    alt="user"
                    src="../../assets/images/users/4.jpg"
                  />
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">
                    Go to the Doctor <span class="sl-date">5 minutes ago</span>
                  </div>
                  <div class="desc">Contrary to popular belief</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img
                    class="rounded-circle"
                    alt="user"
                    src="../../assets/images/users/6.jpg"
                  />
                </div>
                <div class="sl-right">
                  <div>
                    <a href="javascript:void(0)">Stephen</a>
                    <span class="sl-date">5 minutes ago</span>
                  </div>
                  <div class="desc">Approve meeting with tiger</div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Tab 3 -->
        </div>
      </div>
    </aside>
    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
  {{-- JS --}}
  @vite('resources/js/app.js')
  @vite('resources/js/app.min.js')
  @vite('resources/js/sidebarmenu.js')
  @vite('resources/js/waves.js')
  @vite('resources/js/app-style-switcher.js')
  @vite('resources/js/app-init-stylish.js')
  @vite('resources/js/custom.min.js')
  @vite('resources/js/feather.min.js')
  </body>
</html>
