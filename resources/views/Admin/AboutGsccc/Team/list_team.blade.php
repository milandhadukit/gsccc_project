@extends('layouts.master2')

@section('content')
    <div class="card">
        <div class="card-header"
            style=" display: flex;
        justify-content: space-between;
        width: 200px;
        align-items: center;">


            <h4>About Gsccc Team </h4>&nbsp;&nbsp;

            <a href="{{ route('about.team.add') }}" class="btn btn-outline-success"> Add New</a>&nbsp;&nbsp;


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
                            <th>Title English</th>
                            <th>Title Hindi</th>
                            <th>Title Gujrati</th>
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

                                <td><img src="{{ asset('AboutGsccc/' . $item->image) }}" alt="Image " height="100px"
                                        width="150px">
                                </td>

                                <td>{{ $item->title_en }}</td>
                                <td>{{ $item->title_hi }}</td>
                                <td>{{ $item->title_gu }}</td>
                                <td  >{{$item->content_en }}</td>
                                <td>{{$item->content_hi}}</td>
                                <td>{{$item->content_gu }}</td>
                             
                                <td>
                                    <a href="{{ route('about-edit', $item->id) }}"
                                        class="btn btn-info btn-sm btn-skew">Update</a>
                                    <a href="{{ route('about-delete', $item->id) }}"
                                        class="btn btn-danger btn-sm btn-skew" id="delete">Delete</a>

                                </td>
                            </tr>
                    </tbody>
                    @endforeach
                </table>

            </div>
        </div>
    </div>


    @if ($data->hasPages())
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                @if ($data->onFirstPage())
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                @else
                    <li class="page-item"><a class="page-link" href="{{ $data->previousPageUrl() }}">
                            Previous</a>
                    </li>
                @endif


                @if ($data->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $data->nextPageUrl() }}" rel="next">Next</a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <a class="page-link" href="#">Next</a>
                    </li>
                @endif
            </ul>
        </nav>
    @endif


@endsection
