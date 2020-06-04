<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--end::Base Path -->
    <meta charset="utf-8" />
    <title>{{$setting->site_name}} | Card system</title>
    <meta name="description" content="Real Estate Loans">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{asset('public/logo.ico')}}" />
    @yield('custom-css')
    @yield('custom-js')
</head>
<body>
    <div class="">
        <article>
            {{-- Begin: header --}}
            @include('f_layout.header')
            {{-- End: header --}}
            
            @yield('main-content')
            
            
           
        </article>

        {{-- Begin: footer --}}
        @include('f_layout.footer')
        {{-- End: footer --}}

        <!-- Start : modal -->
        @yield('modal')
        
        {{-- End: modal --}}
    </div>
    @yield('footer-js')
</body>
</html>
