@extends('layouts.master2')

@section('content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="row">
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                  @endif

                <div class="page-wrapper">

                    <div class="page-body">
                        
                            
                            <form action="{{route('translate.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Group</label>
                                    <input type="text" class="form-control" placeholder="Enter  Group"
                                        name="group">
                                    @error('group')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror
    
    
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Key</label>
                                    <input type="text" class="form-control" placeholder="Enter  Key "
                                        name="key">
                                    @error('key')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror
    
    
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Message Gujrati</label>
                                    <input type="text" class="form-control" placeholder="Enter Message Gujrati"
                                        name="text_gu">
                                    @error('title_gu')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror
    
                                </div>
    

                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Enter Message English</label>
                                      <input type="text" class="form-control" placeholder="Enter Message English"
                                          name="text_en">
                                      @error('text_en')
                                          <span class="error" style="color: red">{{ $message }}</span>
                                      @enderror
      
      
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Enter Message hindi</label>
                                      <input type="text" class="form-control" placeholder="Enter Message Hindi"
                                          name="text_hi">
                                      @error('text_hi')
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
