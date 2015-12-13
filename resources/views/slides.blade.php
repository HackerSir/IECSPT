@extends('app')

@section('body_javascript')
    @if(App::environment('production'))
        {!! HTML::script("js/downloadCounter.js") !!}
    @endif
@endsection

@section('content')
    <div class="header sub-page" id="header">
        <div class="navigation">
            <a class="w-inline-block logo-link" href="index.html">
                <img src="images/SlideLogo.png" alt="541d3dd8e589397129f1d791_SlideLogo.png">
            </a>
            <strong>{!! HTML::linkRoute('Home', '&lt;&lt; 回首頁', NULL, ["class" => "nav-link"]) !!}</strong>
        </div>
    </div>
    @foreach($classList as $key => $value)
        <div class="section @if($yearList[$key]%2 == 0)green @endif">
            <div class="w-container">
                <div class="w-row">
                    <div class="w-col w-col-4 align-right">
                        <h2>{!! $yearList[$key] !!}學年</h2>
                    </div>
                    <div class="w-col w-col-8" id="{!! $yearList[$key] !!}slides">
                        {!! File::get($value) !!}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="footer">Copyright (c) 2014-2015&nbsp;&nbsp;Vongola | 逢甲大學資訊工程學系程式設計小隊 |&nbsp;Programming Team, IECS, FCU</div>
@endsection
