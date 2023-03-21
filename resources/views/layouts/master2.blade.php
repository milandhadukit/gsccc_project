<!DOCTYPE html>
<html lang="en">

<head>
    <title>GURU Able - Free Lite Admin Template </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CodedThemes">
    <meta name="keywords"
        content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="CodedThemes">
    <!-- Favicon icon -->
    {{-- Include Top Script --}}
    @include('includes.top-script')
</head>

<body>
    {{-- Include Pre-loader --}}
    @include('includes.preloader')
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            {{-- Include Top Nav Bar --}}
            @include('includes.top-nav')
            {{-- Include Left Nav Bar --}}
            @include('includes.left-nav')
            {{-- Give Content --}}
            @yield('content')
        </div>
    </div>
    {{-- Include Bottom Script --}}
    @include('includes.bottom-script')
    {{-- Give Script --}}

    <script type="text/javascript">
        var url = "{{ url('lang') }}";
        $(".changeLang").on('change', function() {
            window.location.href = url + "/" + $(this).val();
        });
    </script>
</body>

</html>
