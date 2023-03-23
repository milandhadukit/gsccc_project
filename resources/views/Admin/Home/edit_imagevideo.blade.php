@extends('layouts.master2')

@section('content')
    <div class="pcoded-content">

        <div class="pcoded-inner-content">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="main-body">
                <div class="row">
                    <div class="page-wrapper">
                        <div class="page-body">
                            <form action="{{ route('filmvideo.update',$data->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf



                                <div class="form-group">
                                    <label for="exampleInputEmail1">Select Image </label>
                                    <input type="file" class="form-control" name="image">
                                    @error('image')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Video Link </label>
                                    <input type="text" class="form-control" placeholder="Enter Video Link"
                                        name="video_link" value="{{$data->video_link}}">
                                    @error('video_link')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror

                                </div>



                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>





                        </div>
                    </div>
                </div>

                <div id="styleSelector">

                </div>
            </div>
        </div>
    </div>
@endsection
