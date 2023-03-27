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

    <title>About</title>
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
                        

                        <a href="{{route('about-list')}}">Back</a>


                        <form action="{{route('about-update',$data->id)}}" method="POST" enctype="multipart/form-data">
                          @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter Title English</label>
                                <input type="text" class="form-control" value="{{$data->title_en}}"
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
                                <input type="text" class="form-control" value="{{$data->title_hi}}"
                                    name="title_hi">
                                @error('title_hi')
                                    <span class="error" style="color: red">{{ $message }}</span>
                                @enderror


                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter Title Gujrati</label>
                                <input type="text" class="form-control" value="{{$data->title_gu}}"
                                    name="title_gu">
                                @error('title_gu')
                                    <span class="error" style="color: red">{{ $message }}</span>
                                @enderror

                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter Content English</label>
                                <textarea class="summernote" name="content_en" >{{$data->content_en}}</textarea>
                                @error('content_en')
                                <span class="error" style="color: red">{{ $message }}</span>
                            @enderror
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter Content hindi</label>
                                <textarea class="summernote2" name="content_hi">{{$data->content_hi}}</textarea>
                                @error('content_hi')
                                <span class="error" style="color: red">{{ $message }}</span>
                            @enderror
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter Content Gujrati</label>
                                <textarea class="summernote3" name="content_gu">{{$data->content_gu}}</textarea>
                                @error('content_gu')
                                <span class="error" style="color: red">{{ $message }}</span>
                            @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Select Image </label>
                                <input type="file" class="form-control" value="{{$data->image}}"
                                    name="image">
                                @error('image')
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
