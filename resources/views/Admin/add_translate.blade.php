@extends('layouts.master')

@section('content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">

                    <div class="page-body">
                        <div class="row">
                           
                            
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

                <div id="styleSelector">

                </div>
            </div>
        </div>
    </div>
@endsection
