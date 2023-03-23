@extends('layouts.master2')

@section('content')
    <div class="card">
        <div class="card-header" style=" display: flex;
        justify-content: space-between;
        width: 200px;
        align-items: center;">
            
           
            <h4>Image Video</h4>

            <a href="{{route('filmvideo.add')}}" class="btn btn-outline-success" > Add</a>
            <div class="card-header-right">
                <ul class="list-unstyled card-option">
                    <li><i class="icofont icofont-simple-left "></i></li>
                    <li><i class="icofont icofont-maximize full-card"></i></li>
                    <li><i class="icofont icofont-minus minimize-card"></i></li>
                    <li><i class="icofont icofont-refresh reload-card"></i></li>
                    <li><i class="icofont icofont-error close-card"></i></li>
                </ul>
            </div>

            @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        </div>
        <div class="card-block table-border-style">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                          
                           <th>Images</th>
                           <th>Links</th>
                           <th>Action</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $item)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                               
                                <td><img src="{{asset('Home_Images/'.$item->image)}}" alt="Slider " height="150px" width="200px"></td>
                                <td>
                                    <a href="{{$item->video_link}}">{{$item->video_link}}</a>
                                    
                                </td>
                           
                                <td>
                                    <a href="{{route('filmvideo.edit',$item->id)}}" class="btn btn-info btn-sm btn-skew">Update</a>
                                    <a href="{{route('filmvideo.delete',$item->id)}}" class="btn btn-danger btn-sm btn-skew" id="delete">Delete</a>
                                  
                               </td>
                            </tr>
                    </tbody>
                    @endforeach
                </table>

            </div>
        </div>
    </div>

   




@endsection
