@extends('layouts.master2')

@section('content')
    <a href="{{route('sub.menus.add')}}" class="btn btn-outline-warning"> Add Sub Menu </a>
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



                            <form action="{{route('menus.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Title English</label>
                                    <input type="text" class="form-control" placeholder="Enter Title English"
                                        name="title_en">
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
