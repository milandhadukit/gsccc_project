<!DOCTYPE html>
<html lang="en">

<head>
    <title>GSCCC</title>
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
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    @include('includes.left-nav')
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    @include('includes.breadcrumbs')
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
    @yield('script')


    {{-- delete sweet alert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        $(function() {
            $(document).on('click', '#delete', function(e) {
                e.preventDefault();
                var link = $(this).attr("href");
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Delete this data ?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = link
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })
            });
        });
    </script>
    <script>

$(".hBack").on("click", function(e){
    e.preventDefault();
    window.history.back();
});
    </script>
{{-- delete sweet alert end  --}}





</body>

</html>
