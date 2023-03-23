@extends('layouts.master2')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Hover table</h5>
            <span>use class <code>table-hover</code> inside table element</span>
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
                            
                            <th>Last Name</th>
                            <th>Username</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($data as $val )
                           {{translation($val,'content')}}
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
