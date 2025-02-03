<!-- Page Title -->
<div class="page-title" data-aos="fade">
    <div class="heading">
    <div class="container">
        <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-8">
            <h1>@yield('page-title')<br></h1>
            <p class="mb-0">@yield('page-description')</p>
        </div>
        </div>
    </div>
    </div>
    <nav class="breadcrumbs">
    <div class="container">
        <ol>
        <li><a href="@yield('prev-page-link')">@yield('prev-page-title')</a></li>
        <li class="current">@yield('page-title')</li>
        </ol>
    </div>
    </nav>
</div><!-- End Page Title -->