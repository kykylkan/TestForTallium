@extends('layouts.app')
@section('content')
<p>Sectors</p>
<ul>
    @foreach($sectors AS $sector)
    <li>
        <a href="#" data-sector="{{ $sector->id }}">{{ $sector->name }}</a>
    </li>
    @endforeach
</ul>

@endsection
