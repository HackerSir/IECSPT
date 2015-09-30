@extends('home')

@section('body_javascript')
    <script type="text/javascript">
        $(document).ready(function () {
            var $other_slide_div = $('#other_slide');
            var toShowDiv = $('#104slides > div[data-showin-index="true"]');

            var $104slides = $('#104slides');
            $104slides.empty();
            toShowDiv.each(function () {
                $104slides.prepend(this);
            });
            $104slides.append($other_slide_div);
        });
    </script>
    @if(App::environment('production'))
        {!! HTML::script("js/downloadCounter.js"); !!}
    @endif
@endsection

@section('header')
    <div class="w-clearfix header" id="header">
        <div class="navigation">
            {!! HTML::image('images/header.png',  'Logo') !!}
        </div>
        {!! html_entity_decode(HTML::link('https://www.facebook.com/groups/228847760489062/', HTML::image('images/Facebook.png', NULL, ["class" => "facbooklinklogo", "width" => "50"]), ["class" => "w-inline-block facebooklink", "target" => "_blank"])) !!}
    </div>
@endsection

@section('courseIntroduction')
    @include('course_introduction.1032')
@endsection

@section('about')
    <div class="section grey" id="About">
        <div class="w-container">
            <div class="w-row">
                <div class="w-col w-col-4 align-right">
                    <h2>關於系程</h2>
                </div>
                <div class="w-col w-col-8">
                    <p><strong>系程</strong>，簡單的來說是一個提供給每一位資工學生學習程式的良好環境；或許你會因為課堂上聽不懂導致寫Code有困難，那麼系程將會是解決你困難的好地方之一；同時系程也有許多「前輩」，可以提供各位寫程式的經驗或是建議。</p>
                    <h3 class="aboutsectitle">加入資格</h3>
                    <p>
                        完全沒這檔事情！
                        <br>我們都是從「0」開始，只要你有<strong>熱忱</strong>，既使沒有基礎我們也相當歡迎各位！
                    </p>
                    <h3 class="aboutsectitle">教學內容</h3>
                    <p>
                        上學期主要課程還是以<strong>C語言</strong>為主，我們希望能夠在上學期就讓大多數新生熟悉這個程式語言；而下學期開始則可能會有許多<strong>神秘課程</strong>，請大家期待一下吧！
                        <br>
                        <br>除了程式語言教學，我們也會輔導各位去比CPE、ITSA等競賽，希望各位能夠學以致用，利用所學的知識換取<strong>獎狀與證照</strong>。
                    </p>
                    <h3 class="aboutsectitle">上課資訊</h3>
                    <p>
                        上課時間：每周三晚上 6:30 – 8:30 &nbsp;(期中考周、期末考周、國定假日除外)
                        <br>上課地點：資電235 (資電館2F)
                    </p>
                    <br><img src="images/Map.png"></img>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('slide')
    <div class="section green" id="Slides">
        <div class="w-container">
            <div class="w-row">
                <div class="w-col w-col-4 align-right">
                    <h2>簡報下載</h2>
                </div>
                <div class="w-col w-col-8" id="104slides">
                    <div id="JS_ERROR">
                        <h3 class="slidetitle" style="color: red;">Javascript發生錯誤，無法過濾清單<br />稍等一下，按F5重新整理，或是回報錯誤給系程，謝謝</h3>
                    </div>
                    {!! $classList !!}
                    <div id="other_slide">
                        <h3 class="slidetitle">Older Slides：</h3>
                        <p>{!! HTML::linkRoute('Slides', '其他比較舊的簡報可以從這裡進去下載。', NULL, ["target" => "_blank"]) !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('tools')
    <div class="section grey" id="Tools">
        <div class="w-container">
            <div class="w-row">
                <div class="w-col w-col-4 align-right">
                    <h2>工具下載</h2>
                </div>
                <div class="w-col w-col-8">
                    <a class="w-inline-block entrybox" href="http://orwelldevcpp.blogspot.tw/" target="_blank"><h2 class="tooltitle">Orwell Dev-C++&nbsp;</h2><p class="second-heading">IDE &nbsp;•&nbsp;Freeware&nbsp;&nbsp;• &nbsp;Windows Only&nbsp;</p><p>Dev-C++是目前學校大多數助教推薦使用的IDE，不過由於4.9.9.2的Dev-C++有許多奇奇怪怪的問題，而且作者更新到4.9.9.2之後就不更新了，因此這邊推薦使用Orwell所維護的版本。</p></a>
                    <a class="w-inline-block entrybox" href="http://www.visualstudio.com/zh-tw/downloads" target="_blank">
                        <h2 class="tooltitle">Virtual Studio Express 2013</h2>
                        <p class="second-heading">IDE &nbsp;•&nbsp;Freeware&nbsp;•&nbsp;&nbsp;Windows Only</p>
                        <p>Virtual Studio是微軟推出的一款IDE，免費版本為Express版，介面親和、功能完整，適合新手使用。</p>
                    </a><a class="w-inline-block entrybox" href="http://www.codeblocks.org/downloads/binaries" target="_blank"><h2 class="tooltitle">Code::Blocks</h2><p class="second-heading">IDE&nbsp;&nbsp;•&nbsp;Freeware&nbsp;• &nbsp;MultiPlatform</p><p>Code::Blocks是另一款相當知名的IDE，支援的程式語言相當的廣泛，並且也都有良好的支援，缺點是預設只有英文介面，如果對英文不會非常苦守的人應該可以嘗試嘗試。</p></a>
                    <a class="w-inline-block entrybox" href="http://www.vim.org/download.php" target="_blank">
                        <h2 class="tooltitle">Vim</h2>
                        <p class="second-heading">Editor&nbsp;&nbsp;•&nbsp;&nbsp;Libre Software&nbsp;&nbsp;• &nbsp;MultiPlatform</p>
                        <p>Vim 是 Unix、Linux、Unix-Like、Linux-Like系統中相當知名的編輯器之一，Vim可以透過各式的外掛達到各種功能，其單純的介面深受使用者喜愛，非常推薦使用非Windows作業系統的使用者下載，並自行搭配編譯器使用。</p>
                    </a><a class="w-inline-block entrybox" href="http://atom.io" target="_blank"><h2 class="tooltitle">Atom</h2><p class="second-heading">Editor&nbsp;&nbsp;•&nbsp;&nbsp;Libre Software&nbsp;&nbsp;•&nbsp;&nbsp;MultiPlatform</p><p>Atom是由Github開發的一款編輯器，可以透過各種的Package達到功能補完的效果，Mac的使用者可以去下載，並自行搭配編譯器使用。</p></a>
                    <a class="w-inline-block entrybox" href="http://www.sublimetext.com/3" target="_blank">
                        <h2 class="tooltitle">Sublime Text</h2>
                        <p class="second-heading">Editor&nbsp;&nbsp;• &nbsp;Shareware&nbsp;&nbsp;•&nbsp;&nbsp;MultiPlatform</p>
                        <p>Sublime Text 也是眾多使用者相當推薦的一款編輯器，不過由於使用他是共享軟體（無限期試用），存檔多次後會噴是否購買的訊息，必須要支付美金70元才不會顯示，因此有興趣的使用者可以自行Google。</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('speaker')
    <div class="section green" id="Speakers">
        <div class="w-container">
            <div class="w-row">
                <div class="w-col w-col-4 align-right">
                    <h2>本屆講師介紹</h2>
                </div>
                <div class="w-col w-col-8">
                    <ul class="w-list-unstyled speaker-list">
                        <li>
                            <div class="w-row speaker">
                                <div class="w-col w-col-4 avatar-column">
                                    <img class="avatar" src="images/ChingTe.jpg" width="150" height="150" alt="ChingTe">
                                </div>
                                <div class="w-col w-col-8 biography-column">
                                    <h3 class="speaker-name"><strong>陳靖德</strong></h3>
                                    <p class="speaker-data">熟悉C、Java，略懂C++、C#，平常沒事寫些程式、開發Minecraft Mod，擅長程式解題，略一點點點遊戲設計。</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w-row speaker">
                                <div class="w-col w-col-4 avatar-column">
                                    <img class="avatar" src="images/ChunChing.jpg" width="150" height="150" alt="ChunChing">
                                </div>
                                <div class="w-col w-col-8 biography-column">
                                    <h3 class="speaker-name"><strong>侯均靜</strong></h3>
                                    <p class="speaker-data">喜歡動漫輕小說，偶爾心血來潮會寫寫Code，比較熟悉C、C++，略懂Java及HTML。</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w-row speaker">
                                <div class="w-col w-col-4 avatar-column">
                                    <img class="avatar" src="images/IGA.jpg" width="150" height="150" alt="ChunChing">
                                </div>
                                <div class="w-col w-col-8 biography-column">
                                    <h3 class="speaker-name"><strong>林柏丞</strong></h3>
                                    <p class="speaker-data">興趣是日本文化、攝影及其他與電子相關產品，極度無聊的時候才會寫Code，目前在巴哈姆特擔任特約編輯。</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('links')
    <div class="section grey" id="Links">
        <div class="w-container">
            <div class="w-row">
                <div class="w-col w-col-4 align-right">
                    <h2>推薦連結</h2>
                </div>
                <div class="w-col w-col-8">
                    <a class="w-inline-block entrybox" href="http://uva.onlinejudge.org/index.php" target="_blank">
                        <h2 class="tooltitle">Google</h2>
                        <p>Google，BJ4。</p>
                    </a>
                    <a class="w-inline-block entrybox" href="http://uva.onlinejudge.org/index.php" target="_blank">
                        <h2 class="tooltitle">Uva Online Judge</h2>
                        <p>歷史悠久的線上評測網站。</p>
                    </a>
                    <a class="w-inline-block entrybox" href="http://luckycat.kshs.kh.edu.tw/" target="_blank">
                        <h2 class="tooltitle">Lucky貓的 UVA（ACM）園地</h2>
                        <p>提供部分的Uva中譯題目，要心存感激。</p>
                    </a>
                    <a class="w-inline-block entrybox" href="http://uhunt.felix-halim.net/" target="_blank">
                        <h2 class="tooltitle">uHunt</h2>
                        <p>可以即時查詢自己在Uva的解題狀況。</p>
                    </a>
                    <a class="w-inline-block entrybox" href="http://www.cplusplus.com/reference/clibrary/" target="_blank">
                        <h2 class="tooltitle">CPlusPlus</h2>
                        <p>提供所有C語言的函式庫資料，不知道該用哪個函式到這裡就對了！</p>
                    </a>
                    <a class="w-inline-block entrybox" href="http://www.csie.ntnu.edu.tw/~u91029/" target="_blank">
                        <h2 class="tooltitle">演算法筆記</h2>
                        <p>學習演算法的好地方</p>
                    </a>
                    <a class="w-inline-block entrybox" href="http://openhome.cc/Gossip/CGossip/" target="_blank">
                        <h2 class="tooltitle">良葛格的C語言學習筆記</h2>
                        <p>當你臨時找不到人問Code的時候，良葛格是各位相當不錯的選擇之一。</p>
                    </a>
                    <a class="w-inline-block entrybox" href="http://code.org" target="_blank">
                        <h2 class="tooltitle">Anybody can learn | Code.org</h2>
                        <p>討厭黑黑的畫面嗎？讓我們從遊戲中學習程式設計吧！</p>
                    </a>
                    <a class="w-inline0block entrybox" href="http://stackoverflow.com/" target="_blank">
                        <h2 class="tooltitle">Stack Overflow</h2>
                        <p>
                            請問您今天要來點堆疊溢位嗎？<br>
                            遇到程式設計、Linux障礙時，上Stackoveflow查答案是個好選擇！
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <div class="footer">Copyright (c) 2014 - 2015&nbsp;&nbsp;Vongola | 逢甲大學資訊工程學系程式設計小隊 |&nbsp;Programming Team, IECS, FCU</div>
@endsection
