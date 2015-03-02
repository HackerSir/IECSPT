@extends('app')

@section('content')

    <div class="container">
        <div class="row text-center">
            {!! HTML::image('pic/building.jpg','Website is still building......'); !!}
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                <span class="sr-only">45% Complete</span>
            </div>
        </div>
    </div>
@endsection
