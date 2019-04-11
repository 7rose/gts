
<?php
  $r = new App\Helpers\Role;
?>

@extends('frame')

@section('content')

<img src="{{ URL::asset('img/'.$array['type'].'.jpg') }}" class="img-responsive">

<div class="container brand">
    <h4>- {{ $array['text'] }}</h4>
</div>

<section id="content"> 
    <div class="container">
@if(isset($records))
    @if(count($records))

        @foreach($records as $record)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <img class="img-responsive" src="{{URL::asset('storage/app/img/'.$record->id.'.jpg')}}" alt="{{ $r->show($record->info, 'content') }}">
                    <h5>{{ $record->name }}</h5>
                    <p class="product">No. {{ $r->show($record->info, 'model') }}</p>
                    <p class="product">{{ $r->show($record->info, 'description') }}</p>
                    @if(Auth::check())
                    <p>
                        <a class="btn btn-sm btn-danger" href="/delete/{{ $record->id }}">删除!</a>
                        <a class="btn btn-sm btn-info" href="javascript:sort({{ $record->id }})">排序</a>
                    </p>
                    @endif
                </div>
        @endforeach
    @else
    <div class="alert alert-info">尚无产品发布</div>
    @endif
@endif
    </div>
</section>

<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    排序
                </h4>
            </div>
            <div class="modal-body">
                <input type="hidden" id="target_id">
                <input type="number" id="order" placeholder="请输入位置">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                </button>
                <button type="button" class="btn btn-primary" onclick="javascript:do_sort()">
                    排序
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>

<script>
    function sort(id) {
        $("#target_id").val(id);
        $("#myModal").modal();
    }

    function do_sort() {
        var id = $("#target_id").val();
        var order = $("#order").val();

        var url = '/sort/'+ id + '/' + order;

        window.location.href = url;
    }
</script>

@endsection


















