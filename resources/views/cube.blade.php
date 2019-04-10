
<?php
  $r = new App\Helpers\Role;
?>

@extends('frame')

@section('content')

<img src="{{ URL::asset('img/cube.jpg') }}" class="img-responsive">

<div class="row brand">
    <div class="container">
        <h4>机柜系列</h4>
    </div>
</div>


<div class="container">
@if(isset($records))
    @if(count($records))

        @foreach($records as $record)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <img class="img-responsive" src="{{URL::asset('storage/app/img/'.$record->id.'.jpg')}}" alt="{{ $r->show($record->info, 'content') }}">
                    <h5>{{ $record->name }}</h5>
                    <p class="product">型号: {{ $r->show($record->info, 'model') }}</p>
                    <p class="product">简介: {{ $r->show($record->info, 'description') }}</p>
                    @if(Auth::check())
                    <p><a class="btn btn-sm btn-danger" href="/delete/{{ $record->id }}">删除!</a></p>
                    @endif
                </div>
        @endforeach
    @else
    <div class="alert alert-info">尚无产品发布</div>
    @endif
@endif
    </div>

@endsection