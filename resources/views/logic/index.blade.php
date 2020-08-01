@extends('layouts.app')

@section('title', 'Logic')


@section('content')
<form class="form-inline" method="POST" action="/logic/proses">
    @csrf {{ method_field('POST') }}
    <div class="form-group mx-sm-3 mb-3">
        <label for="inputNumb" class="sm-2">Input Numbers </label>
        <input type="number" class="form-control" name="inputNumb" min="1" id="inputNumb" placeholder="fill must number">
    </div>
    <button type="submit" name="view" class="btn btn-primary mb-2">View result</button>
</form>

<div class="row">
    @if($view != "")
    Nilai Bilangan {{$nilai}}
    <br>
    Hasilnya;<br>
    @foreach($view as $rows)
    {{$rows}}<br>

    @endforeach
    @endif
</div>

@endsection