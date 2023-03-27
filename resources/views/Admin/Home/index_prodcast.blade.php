@extends('layouts.master2')

@section('content')
    <div class="card">
        <div class="card-header" style=" display: flex;
        justify-content: space-between;
        width: 200px;
        align-items: center;">
            
           
            <h4>Latest Prodcast </h4>&nbsp;&nbsp;   

            <a href="{{route('prodcast.add')}}" class="btn btn-outline-success" > Add</a>&nbsp;&nbsp;   

            <a href="{{route('prodcast.imageadd')}}" class="btn btn-outline-success" > Prodcast Image</a>
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
                           <th>Music</th>
                           <th>Date </th>
                           <th>content English</th>
                           <th>content Hindi</th>
                           <th>content Gujrati</th>

                           <th>Action</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $item)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                               
                                <td><img src="{{asset('prodcast_image/'.$item->image)}}" alt="Image " height="100px" width="150px"></td>
                                <td>
                                    <a href="{{$item->music}}" class="btn btn-out-dashed btn-primary btn-square">Play</a>
                                    
                                </td>
                          
                           <td>{{$item->date}}</td>
                           <td>{{$item->content_en}}</td>
                           <td>{{$item->content_hi}}</td>
                           <td>{{$item->content_gu}}</td>
                                <td>
                                    <a href="{{route('prodcast.imageedit',$item->id)}}" class="btn btn-info btn-sm btn-skew">Update</a>
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
