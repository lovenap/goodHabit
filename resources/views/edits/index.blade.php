<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>habit</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>シート情報</h1>
        <div class='sheets'>
            @foreach ($sheets as $sheet)
                <div class='post'>
                    <h2 class='id'>{{ $sheet->id }}</h2> 
                    <p class='period_from'>{{ $sheet->period_from }}</p>
                    <p class='period_until'>{{ $sheet->period_until }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>
@endsection