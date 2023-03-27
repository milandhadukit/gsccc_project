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
                        
                            
                            <form action="{{route('about.team.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Select Page :</label>
                                    <select name="page">
                                        <option value="GEER Foundation">GEER Foundation</option>
                                        <option value="IIT Gandhinagar">IIT Gandhinagar</option>
                                        
                                      </select>
                                    @error('title_en')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Select Category:</label>
                                    <select name="type">
                                        <option value="Coordinator and Co-PI">Coordinator and Co-PI</option>
                                        <option value="Research Staff"> Research Staff     
                                        </option>
                                        <option value="Other"> Other     
                                        </option>
                                        
                                      </select>
                                    @error('title_en')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>




                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Title English</label>
                                    <input type="text" class="form-control" placeholder="Enter  Group"
                                        name="title_en">
                                    @error('title_en')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Title hindi</label>
                                    <input type="text" class="form-control" placeholder="Enter  Key "
                                        name="title_hi">
                                    @error('title_hi')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror
    
    
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Title gujrati</label>
                                    <input type="text" class="form-control" placeholder="Enter  Key "
                                        name="title_gu">
                                    @error('title_gu')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror
    
    
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Select Image </label>
                                    <input type="file" class="form-control" placeholder="Enter Title Gujrati"
                                        name="image">
                                    @error('image')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter name English</label>
                                    <input type="text" class="form-control" placeholder="Enter Message Gujrati"
                                        name="name_en">
                                    @error('name_en')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror
    
                                </div>
    

                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Enter name Hindi</label>
                                      <input type="text" class="form-control" placeholder="Enter Message English"
                                          name="name_hi">
                                      @error('name_hi')
                                          <span class="error" style="color: red">{{ $message }}</span>
                                      @enderror
      
      
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Enter name Gujrati</label>
                                      <input type="text" class="form-control" placeholder="Enter Message Hindi"
                                          name="name_gu">
                                      @error('name_gu')
                                          <span class="error" style="color: red">{{ $message }}</span>
                                      @enderror
      
      
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Enter role English</label>
                                    <input type="text" class="form-control" placeholder="Enter Message Hindi"
                                        name="role_en">
                                    @error('role_en')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror
    
    
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter  role Hindi</label>
                                    <input type="text" class="form-control" placeholder="Enter Message Hindi"
                                        name="role_hi">
                                    @error('role_hi')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror
    
    
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter role Gujrati</label>
                                    <input type="text" class="form-control" placeholder="Enter Message Hindi"
                                        name="role_gu">
                                    @error('role_gu')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Address English</label>
                                    <input type="text" class="form-control" placeholder="Enter Message Hindi"
                                        name="address_en">
                                    @error('address_en')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>



                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Address Hindi</label>
                                    <input type="text" class="form-control" placeholder="Enter Message Hindi"
                                        name="address_hi">
                                    @error('address_hi')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>



                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Address Gujrati</label>
                                    <input type="text" class="form-control" placeholder="Enter Message Hindi"
                                        name="address_gu">
                                    @error('address_gu')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Mobile Number</label>
                                    <input type="text" class="form-control" placeholder="Enter Message Hindi"
                                        name="mobile_number">
                                    @error('mobile_number')
                                        <span class="error" style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Email</label>
                                    <input type="text" class="form-control" placeholder="Enter Message Hindi"
                                        name="email">
                                    @error('email')
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
