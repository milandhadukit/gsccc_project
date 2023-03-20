@extends('layouts.master')
@section('content')


    <strong>Select Language: </strong>


    <select class="form-control changeLang">
        <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
        <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>France</option>
        <option value="sp" {{ session()->get('locale') == 'sp' ? 'selected' : '' }}>Spanish</option>
    </select>


@endsection