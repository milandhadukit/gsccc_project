{{-- @extends('layouts.master2')

@section('content') --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <title>menu</title>
</head>

<body>

  @if(session()->has('message'))
  <div class="alert alert-success">
      {{ session()->get('message') }}
  </div>
@endif


    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">

                    <div class="page-body">
                        

                        <a href="{{route('index.deshboard')}}">Back</a>


                        <form action="{{route('sub.menus.store')}}" method="POST" enctype="multipart/form-data">
                          @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter Title English</label>
                                <input type="text" class="form-control" placeholder="Enter Title English"
                                    name="title_en">
                                    {{-- @php
                                       echo trans('menu.title');
                                    @endphp  --}}
                                @error('title_en')
                                    <span class="error" style="color: red">{{ $message }}</span>
                                @enderror


                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter Title hindi</label>
                                <input type="text" class="form-control" placeholder="Enter Title Hindi"
                                    name="title_hi">
                                @error('title_hi')
                                    <span class="error" style="color: red">{{ $message }}</span>
                                @enderror


                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter Title Gujrati</label>
                                <input type="text" class="form-control" placeholder="Enter Title Gujrati"
                                    name="title_gu">
                                @error('title_gu')
                                    <span class="error" style="color: red">{{ $message }}</span>
                                @enderror

                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter Descreption English</label>
                                <textarea class="summernote" name="description_en"></textarea>
                                @error('description_en')
                                <span class="error" style="color: red">{{ $message }}</span>
                            @enderror
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter Descreption hindi</label>
                                <textarea class="summernote2" name="description_hi"></textarea>
                                @error('description_hi')
                                <span class="error" style="color: red">{{ $message }}</span>
                            @enderror
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter Descreption Gujrati</label>
                                <textarea class="summernote3" name="description_gu"></textarea>
                                @error('description_gu')
                                <span class="error" style="color: red">{{ $message }}</span>
                            @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>




                    </div>
                </div>


            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.summernote').summernote();
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.summernote2').summernote();
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.summernote3').summernote();
        });
    </script>


<script type="text/javascript">
    var url = "{{ url('lang') }}";
    $(".changeLang").on('change', function() {
        window.location.href = url + "/" + $(this).val();
    });
</script>



</body>

</html>
{{-- @endsection --}}
