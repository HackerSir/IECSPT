@extends('app')

@section('content')

    <div class="container">
        <div class="row text-center">
            {!! HTML::image('pic/building.jpg','Website is still building......'); !!}
            <p>網頁建置中......</p>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                <span class="sr-only">30% Complete</span>
            </div>
        </div>
    </div>
@endsection
