@extends ('frame')

@section ('content')
    <section id="content">
        <div class="container cent-p">
            <div class="panel panel-default col-md-4 col-sm-6 col-xs-12 cent">     
                    <h5>{!! $title !!}</h5>
                <div class="panel-body">
                    {!! form($form) !!}
                </div>
            </div>
        </div>
    </section>

    <section id="content">
        <div class="pad-top"></div>
    </section>
@endsection