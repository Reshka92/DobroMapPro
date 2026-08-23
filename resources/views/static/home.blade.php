@extends('layouts.main')
@section('content')
<div>
    <div id="map" class="fixed inset-0 w-screen h-screen -z-10"></div>
    <div id="addMarkerMenu" class="hidden fixed w-48 bg-white rounded-xl shadow-xl py-2 border border-gray-100 z-50">
    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Добавить дело</a>
</div>
</div>
@endsection