<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>Blog App</title>
   <!-- css bootstrap -->
   <link rel="stylesheet" href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('blog/blog.css') }}">

   <!-- Styles -->
   <style>
      /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
      html {
         line-height: 1.15;
         -webkit-text-size-adjust: 100%
      }

      body {
         margin: 0
      }

      a {
         background-color: transparent
      }

      [hidden] {
         display: none
      }

      html {
         font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
         line-height: 1.5
      }

      *,
      :after,
      :before {
         box-sizing: border-box;
         border: 0 solid #e2e8f0
      }

      a {
         color: inherit;
         text-decoration: inherit
      }

      svg,
      video {
         display: block;
         vertical-align: middle
      }

      video {
         max-width: 100%;
         height: auto
      }

      .bg-white {
         --bg-opacity: 1;
         background-color: #fff;
         background-color: rgba(255, 255, 255, var(--bg-opacity))
      }

      .bg-gray-100 {
         --bg-opacity: 1;
         background-color: #f7fafc;
         background-color: rgba(247, 250, 252, var(--bg-opacity))
      }

      .border-gray-200 {
         --border-opacity: 1;
         border-color: #edf2f7;
         border-color: rgba(237, 242, 247, var(--border-opacity))
      }

      .border-t {
         border-top-width: 1px
      }

      .flex {
         display: flex
      }

      .grid {
         display: grid
      }

      .hidden {
         display: none
      }

      .items-center {
         align-items: center
      }

      .justify-center {
         justify-content: center
      }

      .font-semibold {
         font-weight: 600
      }

      .h-5 {
         height: 1.25rem
      }

      .h-8 {
         height: 2rem
      }

      .h-16 {
         height: 4rem
      }

      .text-sm {
         font-size: .875rem
      }

      .text-lg {
         font-size: 1.125rem
      }

      .leading-7 {
         line-height: 1.75rem
      }

      .mx-auto {
         margin-left: auto;
         margin-right: auto
      }

      .ml-1 {
         margin-left: .25rem
      }

      .mt-2 {
         margin-top: .5rem
      }

      .mr-2 {
         margin-right: .5rem
      }

      .ml-2 {
         margin-left: .5rem
      }

      .mt-4 {
         margin-top: 1rem
      }

      .ml-4 {
         margin-left: 1rem
      }

      .mt-8 {
         margin-top: 2rem
      }

      .ml-12 {
         margin-left: 3rem
      }

      .-mt-px {
         margin-top: -1px
      }

      .max-w-6xl {
         max-width: 72rem
      }

      .min-h-screen {
         min-height: 100vh
      }

      .overflow-hidden {
         overflow: hidden
      }

      .p-6 {
         padding: 1.5rem
      }

      .py-4 {
         padding-top: 1rem;
         padding-bottom: 1rem
      }

      .px-6 {
         padding-left: 1.5rem;
         padding-right: 1.5rem
      }

      .pt-8 {
         padding-top: 2rem
      }

      .fixed {
         position: fixed
      }

      .relative {
         position: relative
      }

      .top-0 {
         top: 0
      }

      .right-0 {
         right: 0
      }

      .shadow {
         box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
      }

      .text-center {
         text-align: center
      }

      .text-gray-200 {
         --text-opacity: 1;
         color: #edf2f7;
         color: rgba(237, 242, 247, var(--text-opacity))
      }

      .text-gray-300 {
         --text-opacity: 1;
         color: #e2e8f0;
         color: rgba(226, 232, 240, var(--text-opacity))
      }

      .text-gray-400 {
         --text-opacity: 1;
         color: #cbd5e0;
         color: rgba(203, 213, 224, var(--text-opacity))
      }

      .text-gray-500 {
         --text-opacity: 1;
         color: #a0aec0;
         color: rgba(160, 174, 192, var(--text-opacity))
      }

      .text-gray-600 {
         --text-opacity: 1;
         color: #718096;
         color: rgba(113, 128, 150, var(--text-opacity))
      }

      .text-gray-700 {
         --text-opacity: 1;
         color: #4a5568;
         color: rgba(74, 85, 104, var(--text-opacity))
      }

      .text-gray-900 {
         --text-opacity: 1;
         color: #1a202c;
         color: rgba(26, 32, 44, var(--text-opacity))
      }

      .underline {
         text-decoration: underline
      }

      .antialiased {
         -webkit-font-smoothing: antialiased;
         -moz-osx-font-smoothing: grayscale
      }

      .w-5 {
         width: 1.25rem
      }

      .w-8 {
         width: 2rem
      }

      .w-auto {
         width: auto
      }

      .grid-cols-1 {
         grid-template-columns: repeat(1, minmax(0, 1fr))
      }

      @media (min-width:640px) {
         .sm\:rounded-lg {
            border-radius: .5rem
         }

         .sm\:block {
            display: block
         }

         .sm\:items-center {
            align-items: center
         }

         .sm\:justify-start {
            justify-content: flex-start
         }

         .sm\:justify-between {
            justify-content: space-between
         }

         .sm\:h-20 {
            height: 5rem
         }

         .sm\:ml-0 {
            margin-left: 0
         }

         .sm\:px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
         }

         .sm\:pt-0 {
            padding-top: 0
         }

         .sm\:text-left {
            text-align: left
         }

         .sm\:text-right {
            text-align: right
         }
      }

      @media (min-width:768px) {
         .md\:border-t-0 {
            border-top-width: 0
         }

         .md\:border-l {
            border-left-width: 1px
         }

         .md\:grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
         }
      }

      @media (min-width:1024px) {
         .lg\:px-8 {
            padding-left: 2rem;
            padding-right: 2rem
         }
      }

      @media (prefers-color-scheme:dark) {
         .dark\:bg-gray-800 {
            --bg-opacity: 1;
            background-color: #2d3748;
            background-color: rgba(45, 55, 72, var(--bg-opacity))
         }

         .dark\:bg-gray-900 {
            --bg-opacity: 1;
            background-color: #1a202c;
            background-color: rgba(26, 32, 44, var(--bg-opacity))
         }

         .dark\:border-gray-700 {
            --border-opacity: 1;
            border-color: #4a5568;
            border-color: rgba(74, 85, 104, var(--border-opacity))
         }

         .dark\:text-white {
            --text-opacity: 1;
            color: #fff;
            color: rgba(255, 255, 255, var(--text-opacity))
         }

         .dark\:text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
         }

         .dark\:text-gray-500 {
            --tw-text-opacity: 1;
            color: #6b7280;
            color: rgba(107, 114, 128, var(--tw-text-opacity))
         }
      }
   </style>

   <style>
      .bd-placeholder-img {
         font-size: 1.125rem;
         text-anchor: middle;
         -webkit-user-select: none;
         -moz-user-select: none;
         user-select: none;
      }

      @media (min-width: 768px) {
         .bd-placeholder-img-lg {
            font-size: 3.5rem;
         }
      }

      .b-example-divider {
         width: 100%;
         height: 3rem;
         background-color: rgba(0, 0, 0, .1);
         border: solid rgba(0, 0, 0, .15);
         border-width: 1px 0;
         box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
         flex-shrink: 0;
         width: 1.5rem;
         height: 100vh;
      }

      .bi {
         vertical-align: -.125em;
         fill: currentColor;
      }

      .nav-scroller {
         position: relative;
         z-index: 2;
         height: 2.75rem;
         overflow-y: hidden;
      }

      .nav-scroller .nav {
         display: flex;
         flex-wrap: nowrap;
         padding-bottom: 1rem;
         margin-top: -1px;
         overflow-x: auto;
         text-align: center;
         white-space: nowrap;
         -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
         --bd-violet-bg: #712cf9;
         --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

         --bs-btn-font-weight: 600;
         --bs-btn-color: var(--bs-white);
         --bs-btn-bg: var(--bd-violet-bg);
         --bs-btn-border-color: var(--bd-violet-bg);
         --bs-btn-hover-color: var(--bs-white);
         --bs-btn-hover-bg: #6528e0;
         --bs-btn-hover-border-color: #6528e0;
         --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
         --bs-btn-active-color: var(--bs-btn-hover-color);
         --bs-btn-active-bg: #5a23c8;
         --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
         z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
         display: block !important;
      }
   </style>
</head>

<body>

   <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
         <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
         <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
         <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
         <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
         <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
      </symbol>
   </svg>

   <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
         <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
            <use href="#circle-half"></use>
         </svg>
         <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
         <li>
            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
               <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                  <use href="#sun-fill"></use>
               </svg>
               Light
               <svg class="bi ms-auto d-none" width="1em" height="1em">
                  <use href="#check2"></use>
               </svg>
            </button>
         </li>
         <li>
            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
               <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                  <use href="#moon-stars-fill"></use>
               </svg>
               Dark
               <svg class="bi ms-auto d-none" width="1em" height="1em">
                  <use href="#check2"></use>
               </svg>
            </button>
         </li>
         <li>
            <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
               <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                  <use href="#circle-half"></use>
               </svg>
               Auto
               <svg class="bi ms-auto d-none" width="1em" height="1em">
                  <use href="#check2"></use>
               </svg>
            </button>
         </li>
      </ul>
   </div>


   <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="aperture" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
         <circle cx="12" cy="12" r="10" />
         <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94" />
      </symbol>
      <symbol id="cart" viewBox="0 0 16 16">
         <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
      </symbol>
      <symbol id="chevron-right" viewBox="0 0 16 16">
         <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
      </symbol>
   </svg>

   <div class="container">
      <header class="border-bottom lh-1 py-3">
         <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
               <a class="link-secondary" href="#">Welcome MyBlog</a>
            </div>
            <div class="col-4 text-center">
               <a class="blog-header-logo text-body-emphasis text-decoration-none" href="#">Feb Blog</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
               <a href="{{ url('create') }}" class="btn btn-primary">Buat Post</a>
            </div>
         </div>
      </header>

      <div class="nav-scroller py-1 mb-3 border-bottom">
         <nav class="nav nav-underline justify-content-between">
            <a class="nav-item nav-link link-body-emphasis active" href="#">World</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">U.S.</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Technology</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Design</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Culture</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Business</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Politics</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Opinion</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Science</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Health</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Style</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Travel</a>
         </nav>
      </div>
   </div>

   <main class="container">
      <div class="p-4 p-md-5 mb-4 rounded" style="background-image: url('https://images.unsplash.com/photo-1480714378408-67cf0d13bc1b?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8Y2l0eXxlbnwwfHwwfHx8MA%3D%3D'); background-size: cover; background-position: center; position: relative;">
         <div class="">

         </div>
         <div class="col-lg-6 px-0 background-overlay">
            <h1 class="display-4 fst-italic">My First Blog App</h1>
            <p class="lead my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias consectetur sit aut suscipit quaerat quo consequatur optio tenetur temporibus rem!</p>
         </div>
      </div>


      <div class="row mb-2">
         @foreach(collect($posts)->slice(0, 2) as $post) <!-- Mengonversi array ke koleksi dan kemudian menampilkan 2 posting pertama -->

         <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
               <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-primary-emphasis">{{ $post[2] }}</strong>
                  <h3 class="mb-0">{{$post[1]}}</h3>
                  <div class="mb-1 text-body-secondary">{{ date('d M Y H:i', strtotime($post[5])) }}</div>
                  <p class="card-text mb-auto">{{ $post[3] }}</p>
                  <a href="detail/{{$post[0]}}" class="icon-link gap-1 icon-link-hover stretched-link">
                     Continue reading
                     <svg class="bi">
                        <use xlink:href="#chevron-right" />
                     </svg>
                  </a>

               </div>

               <div class="col-auto d-none d-lg-block">
                  <img src="{{ $post[4] }}" alt="Thumbnail" width="200" height="250" class="bd-placeholder-img" />
               </div>

            </div>
         </div>
         @endforeach
      </div>

      <div class="row g-5">
         <div class="col-md-8">
            <h3 class="pb-4 mb-4 fst-italic border-bottom">
               All Post
            </h3>

            <article class="blog-post">
               <h2 class="display-5 link-body-emphasis mb-1">{{$post[1]}}</h2>
               <p class="blog-post-meta">{{ date('d M Y H:i', strtotime($post[5])) }}</p>


               <p>{{$post[3]}}</p>




            </article>

            <article class="blog-post">
               <h1 class="text-secondary">Newest Post</h1>
               @foreach($posts as $post)
               <div class="card mb-3">
                  <img src="{{ $post[4] }}" class="card-img-top img-fluid" alt="Image">
                  <div class="card-body">
                     <h5 class="card-title font-weight-bold">{{$post[1]}}</h5>
                     <p class="card-text">{{$post[3]}}</p>
                     <small class="text-muted">Last updated {{ date('d M Y', strtotime($post[5])) }}</small><br>
                     <a href="detail/{{ $post[0] }}" class="icon-link gap-1 icon-link-hover stretched-link mt-3">
                        Lanjutkan membaca
                        <svg class="bi">
                           <use xlink:href="#chevron-right" />
                        </svg>
                     </a>

                  </div>
               </div>
               @endforeach

            </article>

            <article class="blog-post">
               <h1 class="text-secondary">Old Post</h1>
               @foreach($posts as $post)
               @php
               $postYear = date('Y', strtotime($post[5]));
               @endphp

               @if ($postYear == 2022)
               <div class="card mb-3">
                  <img src="{{ $post[4] }}" class="card-img-top img-fluid" alt="Image">
                  <div class="card-body">
                     <h5 class="card-title font-weight-bold">{{ $post[1] }}</h5>
                     <p class="card-text">{{ $post[3] }}</p>
                     <small class="text-muted">Last updated {{ date('d M Y', strtotime($post[5])) }}</small>
                     <a href="detail/{{ $post[0] }}" class="icon-link gap-1 icon-link-hover stretched-link mt-3">
                        Lanjutkan membaca
                        <svg class="bi">
                           <use xlink:href="#chevron-right" />
                        </svg>
                     </a>
                  </div>
               </div>
               @endif
               @endforeach
            </article>





         </div>

         <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
               <div class="p-4 mb-3 bg-body-tertiary rounded">
                  <h4 class="fst-italic">About</h4>
                  <p class="mb-0">Selamat datang di website kami! Kami dengan bangga mempersembahkan platform blog sederhana kami yang dirancang untuk membagikan ide, cerita, dan wawasan. Di sini, Anda akan menemukan beragam artikel yang mencakup berbagai topik, mulai dari pemikiran mendalam hingga tips praktis. </p>
               </div>

               <div>
                  <h4 class="fst-italic">Recent posts</h4>
                  <ul class="list-unstyled">
                     @foreach(collect($posts)->slice(0, 3) as $post)
                     <li>
                        <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="detail/{{$post[0]}}">
                           <img src="{{ $post[4] }}" alt="{{ $post[1] }}" width="100%" height="96" class="bd-placeholder-img" />
                           <div class="col-lg-8">
                              <h6 class="mb-0">{{ $post[1] }}</h6>
                              <small class="text-body-secondary">{{ date('d M Y H:i', strtotime($post[5])) }}</small>
                           </div>
                        </a>
                     </li>
                     @endforeach
                  </ul>
               </div>




            </div>
         </div>
      </div>

   </main>

   <footer class="py-5 text-center text-body-secondary bg-body-tertiary">
      <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/admin">admin</a>.</p>
      <p class="mb-0">
         <a href="#" class="text-body-emphasis">Back to top</a>
      </p>
   </footer>

   <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>