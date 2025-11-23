@extends('layout')

@section('content')

<div class="body px-4 mx-auto w-50">
    <div class="d-flex justify-content-center py-4">
        <button type="button" class="btn btn-dark" onclick="getElementById('update').submit()">
            Update Kelas
        </button> 
        <form id="update" action="{{route('UpdateKelas')}}"> 
            @csrf
            <input type="hidden" name="kelas" value="{{$k->id}}">
        </form>
    </div>
    <div class="my-4">
        <h4>Nama Kelas</h4>
        <p>{{$k->name}}</p>
    </div>
    <div class="my-4">
        <h4>Nama Instruktor</h4>
        <p>{{$k->instructor}}</p>
    </div>

    <div class="my-4">
        <h4>Deskripsi Singkat</h4>
        <p>{{$k->description}}</p>
    </div>
</div>
@endsection