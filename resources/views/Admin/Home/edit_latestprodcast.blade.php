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
                            <form action="{{ route('prodcast.imageupdate',$data->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf



                                <div class="form-group">
                                    <label for="exampleInputEmail1">Select Image </label>
                                    <input type="file" class="form-control" name="image" value="{{$data->image}}">
                                    @error('image')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Music </label>
                                    <input type="file" class="form-control" placeholder="Enter Video Link"
                                        name="music" value="{{$data->music}}">
                                    @error('music')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Content English </label>
                                    <input type="text" class="form-control" placeholder="Enter Content "
                                        name="content_en" value="{{$data->content_en}}">
                                    @error('content_en')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Content Hindi </label>
                                    <input type="text" class="form-control" placeholder="Enter Content "
                                        name="content_hi" value="{{$data->content_hi}}">
                                    @error('content_hi')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Content Gujrati </label>
                                    <input type="text" class="form-control" placeholder="Enter Content "
                                        name="content_gu" value="{{$data->content_gu}}">
                                    @error('content_gu')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Select Date </label>
                                    <input type="date" class="form-control" placeholder="Select Date "
                                        name="date" value="{{$data->date}}">
                                    @error('date')
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
