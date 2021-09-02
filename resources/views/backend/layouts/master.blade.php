@include('backend.layouts.header')
@include('backend.layouts.sidebar')

<div class="main-panel">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between flex-wrap">
                @yield('content')
            </div>
        </div>
    </div>
</div>

@include('backend.layouts.footer')