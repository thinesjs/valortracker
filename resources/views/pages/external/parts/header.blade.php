<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="valorant, valorant tracker, valortracker"
    />
    <meta
      name="description"
      content="A web-based Valorant Stat Tracker tool"
    />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'ValorTracker') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link
      rel="icon"
      sizes="16x16"
      href="{{ URL::to('/') }}/images/favicon.ico"
    />
    @vite('resources/js/app.js')
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
      <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header">
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ri-close-line ri-menu-2-line fs-6"></i
            ></a>
            <a class="navbar-brand" href="index.html">
              <b class="logo-icon">
                <img
                  src="{{ URL::to('/') }}/images/logo-icon.png"
                  alt="homepage"
                  class="dark-logo"
                />
                <img
                  src="{{ URL::to('/') }}/images/logo-light-icon.png"
                  alt="homepage"
                  class="light-logo"
                />
              </b>
              <span class="logo-text">
                <img
                  src="{{ URL::to('/') }}/images/logo-text.png"
                  alt="homepage"
                  class="dark-logo"
                />
                <img
                  src="{{ URL::to('/') }}/images/logo-light-text.png"
                  class="light-logo"
                  alt="homepage"
                />
              </span>
            </a>
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
          <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a
                  class="nav-link sidebartoggler d-none d-md-block"
                  href="javascript:void(0)"
                  ><i data-feather="menu"></i
                ></a>
              </li>
              <li class="nav-item search-box">
                <a class="nav-link">
                    {{ $playerDetails->data->name }}#{{ $playerDetails->data->tag }}
                </a>
              </li>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item dropdown profile-dropdown">
                <a
                  class="nav-link dropdown-toggle d-flex align-items-center"
                  href="#"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <img
                    src="{{ $playerDetails->data->card->small }}"
                    alt="user"
                    width="30"
                    class="profile-pic rounded-circle"
                  />
                  <div class="d-none d-md-flex">
                    <span class="ms-2"
                      >
                      <span class="text-dark fw-bold">{{ $playerDetails->data->name }}</span></span
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
                        <h3 class="card-title mb-0">Viewing Profile</h3>
                        <div class="ms-auto">
                          <a href="" class="link py-0">
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
                          src="{{ $playerDetails->data->card->small }}"
                          alt="user"
                          width="90"
                          class="rounded-circle"
                        />
                        <div class="ms-4">
                          <h4 class="mb-0">{{ $playerDetails->data->name }}</h4>
                          <span class="text-muted">#{{ $playerDetails->data->tag }}</span>
                        </div>
                      </div>
                    </li>
                    <li class="p-30 pt-0">
                      <div
                        class="message-center message-body position-relative"
                        style="height: 40px"
                      >
                        <!-- Message -->
                          <div class="form-check mt-3 mb-3">
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
                        <!-- Message -->
                      </div>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <aside class="left-sidebar">
        <div class="scroll-sidebar">
          <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                <i class="nav-small-line"></i>
                <span class="hide-menu">Dashboard</span>
                </li>
                <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{ route('dashboard') }}"
                  aria-expanded="false"
                >
                <i class="ri-dashboard-line"></i>
                    <span class="hide-menu">Account</span>
                </a>
                </li>

              <li class="nav-small-cap">
                <i class="nav-small-line"></i>
                <span class="hide-menu">In-Game Store</span>
              </li>
                <li class="sidebar-item">
                    <a
                        class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('bundle') }}"
                        aria-expanded="false"
                    >
                        <i class="ri-dropbox-line"></i><span class="hide-menu">Bundle</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="nav-small-line"></i>
                    <span class="hide-menu">Player Loadout</span>
                </li>
                <li class="sidebar-item">
                    <a
                        class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('share-account-loadout', ['id' => $playerDetails->data->puuid]) }}"
                        aria-expanded="false"
                    >
                        <i class="ri-function-line"></i><span class="hide-menu">Loadout</span>
                    </a>
                </li>


                <li class="nav-small-cap">
                    <i class="nav-small-line"></i>
                    <span class="hide-menu">Extra</span>
                </li>
                <li class="sidebar-item">
                    <a
                        class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('about') }}"
                        aria-expanded="false"
                    >
                        <i class="ri-information-line"></i><span class="hide-menu">About ValorTracker</span>
                    </a>
                </li>
            </ul>
          </nav>
        </div>
      </aside>
