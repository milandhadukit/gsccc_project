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
                            <form action="{{route('slider.update',$slider->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Content English</label>
                                    <input type="text" class="form-control" placeholder="Enter Title English"
                                        name="content_en" value="{{$slider->content_en}}">
                                    @error('content_en')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror


                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Content hindi</label>
                                    <input type="text" class="form-control" placeholder="Enter Title Hindi"
                                        name="content_hi" value="{{$slider->content_hi}}">
                                    @error('content_hi')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror


                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Content Gujrati</label>
                                    <input type="text" class="form-control" placeholder="Enter Title Gujrati"
                                        name="content_gu" value="{{$slider->content_gu}}">
                                    @error('content_gu')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Select Image </label>
                                    <input type="file" class="form-control" placeholder="Enter Title Gujrati"
                                        name="image" value="{{$slider->image}}">
                                    @error('image')
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
