<!DOCTYPE html>
<html lang="en">
@include('frontend.templates.partials.head')
<body>

    {{-- navbar --}}
    @include('frontend.templates.partials.navbar')

    
      {{-- konten --}}
      @yield('content')

     
     @include('frontend.templates.partials.scripts')
     @include('frontend.templates.partials.toast')
    </body>
</html>