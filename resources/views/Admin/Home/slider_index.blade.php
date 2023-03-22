@extends('layouts.master2')

@section('content')
    <div class="card">
        <div class="card-header" style=" display: flex;
        justify-content: space-between;
        width: 200px;
        align-items: center;">
            
           
            <h4>Slider</h4>

            <a href="{{route('slider.add')}}" class="btn btn-outline-success" > Add</a>
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
                           <th>Content English</th>
                           <th>Content Hindi</th>
                           <th>Content Gujrati</th>
                           <th>Images</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sliderData as $key => $item)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $item->content_en }}</td>
                                <td>{{ $item->content_hi }}</td>
                                <td>{{ $item->content_gu }}</td>
                           
                                <td>
                                    {{-- <a href="{{route('translate.edit',$item->id)}}" class="btn btn-info btn-sm btn-skew">Update</a> --}}
                                    {{-- <a href="{{route('translate.delete',$item->id)}}" class="btn btn-danger btn-sm btn-skew" id="delete">Delete</a> --}}
                                  
                               </td>
                            </tr>
                    </tbody>
                    @endforeach
                </table>

            </div>
        </div>
    </div>

   




@endsection
