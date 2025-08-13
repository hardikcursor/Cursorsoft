<!DOCTYPE html>
<html lang="en">
@include('Include.head')

<body>
    <header class="navigation">
        @include('Include.header')
    </header>

    @yield('content')

    @include('Include.footer')
    @include('Include.scrollbar')
    @include('Include.script')
</body>

</html>
