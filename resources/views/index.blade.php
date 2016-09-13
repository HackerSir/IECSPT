@extends('app')

@section('title', '首頁')

@section('css')
    <style>
        .cyseg {
            background-color: #f2f7f6 !important;
        }

        .cgseg {
            background-color: #f0f0f0 !important;
        }

        h2 {
            margin-bottom: 10px;
            font-family: Roboto, sans-serif !important;
            font-size: 32px !important;
            line-height: 36px;
            font-weight: 300 !important;
        }

        h3 {
            font-size: 24px !important;
            font-weight: 300 !important;
        }

        .heilimit {
            padding-top: 50px !important;
            padding-bottom: 50px !important;
        }

        p {
            font-size: 15px !important;
        }

        .darkblue {
            color: #0618ba !important;
        }

        .darkred {
            color: #750000 !important;
        }
    </style>
@endsection

@section('content')
    <div class="ui top attached segment" style="min-height: 100vh;padding-left: 0;padding-right: 0;background: none !important;">
        <div class="ui center aligned segment" style="padding: 10px;margin-top: 35vh; background-color: rgba(255,255,255,0.3);">
            <img src="{{ asset('img/index-header.png') }}" alt="{{ config('site.name') }}" class="ui middle aligned image">
        </div>
    </div>
    <div class="ui attached cyseg heilimit segment">
        <div class="ui container">
            <div class="ui grid">
                <div class="six wide right aligned column">
                    <h2 class="ui darkblue header">{{ $year }}上學期課程</h2>
                </div>
                <div class="ten wide column">
                    <h3 class="ui darkred header">上課資訊</h3>
                    <p>
                        上課時間：每周三晚上 6:30 – 8:30 &nbsp;(期中考周、期末考周、國定假日除外)
                        <br>上課地點：資電235 (資電館2F)
                    </p>

                    <h3 class="ui darkred header">預備知識</h3>
                    <p>不屈不饒、勇於嘗試的精神</p>

                    <h3 class="ui darkred header">程式設計競賽</h3>
                    <ul>
                        <li>全國大專電腦軟體設計競賽(NCPC)(2014)(2015)</li>
                        <li>全國私立大專院校程式競賽(NCPU)(2014)(2015)</li>
                        <li>ACM International Collegiate Programming Contest (ACM-ICPC)(2014TW)(2015TW)</li>
                        <li>ITSA(ITSA月賽)</li>
                        <li>PTC</li>
                        <li>CPE(檢定)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="ui attached cgseg heilimit segment">
        <div class="ui container">
            <div class="ui grid">
                <div class="six wide right aligned column">
                    <h2 class="ui darkblue header">關於系程</h2>
                </div>
                <div class="ten wide column">
                    <p><strong>系程</strong>，簡單的來說是一個提供給每一位資工學生學習程式的良好環境；或許你會因為課堂上聽不懂導致寫Code有困難，那麼系程將會是解決你困難的好地方之一；同時系程也有許多「前輩」，可以提供各位寫程式的經驗或是建議。</p>
                    <h3 class="ui darkred header">加入資格</h3>
                    <p>
                        完全沒這檔事情！
                        <br>我們都是從「0」開始，只要你有<strong>熱忱</strong>，既使沒有基礎我們也相當歡迎各位！
                    </p>
                    <h3 class="ui darkred header">教學內容</h3>
                    <p>
                        上學期主要課程還是以<strong>C語言</strong>為主，我們希望能夠在上學期就讓大多數新生熟悉這個程式語言；而下學期開始則可能會有許多<strong>神秘課程</strong>，請大家期待一下吧！
                        <br>
                        <br>除了程式語言教學，我們也會輔導各位去比CPE、ITSA等競賽，希望各位能夠學以致用，利用所學的知識換取<strong>獎狀與證照</strong>。
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="ui attached segment">

    </div>
    <div class="ui attached segment">

    </div>
    <div class="ui bottom attached segment">

    </div>
@endsection
