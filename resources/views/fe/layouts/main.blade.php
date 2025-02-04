@include('fe.template.script_top') 

<body>
    
    @include('fe.components.header')
    <main class="main">
        @yield('content')
    </main>
    @include('fe.components.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

@include('fe.template.script_bot') 