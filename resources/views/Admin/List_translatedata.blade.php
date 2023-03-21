@extends('layouts.master2')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>List Language</h5>

            <div class="card-header-right">
                <ul class="list-unstyled card-option">
                    <li><i class="icofont icofont-simple-left "></i></li>
                    <li><i class="icofont icofont-maximize full-card"></i></li>
                    <li><i class="icofont icofont-minus minimize-card"></i></li>
                    <li><i class="icofont icofont-refresh reload-card"></i></li>
                    <li><i class="icofont icofont-error close-card"></i></li>
                </ul>
            </div>
        </div>
        <div class="card-block table-border-style">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>@php echo trans('translate_view.group') @endphp</th>
                            <th>@php echo trans('translate_view.key') @endphp</th>
                            <th>@php echo trans('translate_view.text') @endphp</th>
                            <th>@php echo trans('translate_view.text') @endphp</th>
                            <th>@php echo trans('translate_view.text') @endphp</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $item)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $item->group }}</td>
                                <td>{{ $item->key }}</td>
                                <td>{{ $item->text['en'] }} </td>
                                <td>{{ $item->text['hi'] }}</td>
                                <td>{{ $item->text['gu'] }} </td>


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
