@extends('layouts.app')

@section('content')
    <div id="main" v-on:dblclick="onmousemove">
        <img src="{{ asset('storage/colors.png') }}"><br>
        <br>
        <form action="{{ route('coordinate.store') }}" method="post">
            @csrf
            offset:<input type="text" name="posx" v-model="offsetX">/
            <input type="text" name="posy" v-model="offsetY">
            <button type="submit" name="add">{{__('登録')}}</button>
        </form>
    </div>
@endsection
