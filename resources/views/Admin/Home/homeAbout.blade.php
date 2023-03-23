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
                            <form action="{{route('homeabout')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Content English</label>
                                    <input type="text" class="form-control" placeholder="Enter Title English"
                                        name="content_en">
                                    @error('content_en')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror


                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Content hindi</label>
                                    <input type="text" class="form-control" placeholder="Enter Title Hindi"
                                        name="content_hi" >
                                    @error('content_hi')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror


                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Content Gujrati</label>
                                    <input type="text" class="form-control" placeholder="Enter Title Gujrati"
                                        name="content_gu" > 
                                    @error('content_gu')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Select Image </label>
                                    <input type="file" class="form-control" placeholder="Enter Title Gujrati"
                                        name="image"  >
                                    @error('image')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Title English</label>
                                    <input type="text" class="form-control" placeholder="Enter Title Gujrati"
                                        name="title_en" > 
                                    @error('title_en')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Title Hindi</label>
                                    <input type="text" class="form-control" placeholder="Enter Title Gujrati"
                                        name="title_hi" > 
                                    @error('title_hi')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Title Gujrati</label>
                                    <input type="text" class="form-control" placeholder="Enter Title Gujrati"
                                        name="title_gu" > 
                                    @error('title_gu')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Introduction English</label>
                                    <input type="text" class="form-control" placeholder="Enter Title Gujrati"
                                        name="introduction_en" > 
                                    @error('introduction_en')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Introduction Hindi</label>
                                    <input type="text" class="form-control" placeholder="Enter Title Gujrati"
                                        name="introduction_hi" > 
                                    @error('introduction_hi')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Introduction Gujrati</label>
                                    <input type="text" class="form-control" placeholder="Enter Title Gujrati"
                                        name="introduction_gu" > 
                                    @error('introduction_gu')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Objective English</label>
                                    <input type="text" class="form-control" placeholder="Enter Title Gujrati"
                                        name="objective_en" > 
                                    @error('objective_en')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Objective Hindi</label>
                                    <input type="text" class="form-control" placeholder="Enter Title Gujrati"
                                        name="objective_hi" > 
                                    @error('objective_hi')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Objective Gujrati</label>
                                    <input type="text" class="form-control" placeholder="Enter Title Gujrati"
                                        name="objective_gu" > 
                                    @error('objective_gu')
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
