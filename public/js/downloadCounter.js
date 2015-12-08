/**
 * Created by danny50610 on 2015/4/17.
 * 檔案下載次數追蹤
 */
$(document).ready(function () {
    var divList = ['#104slides', '#103slides', '#102slides'];
    for (var i in divList) {
        //check div exist...
        if ($(divList[i]).length) {
            var aList = $(divList[i] + '>div>p>a')
                .filter('[href$=".pdf"],[href$=".zip"],[href$=".ptt"],[href$=".pttx"],[href$=".c"],[href$=".cpp"]')
                .attr("onclick", "return click_a_tag(this);");
        }
    }
});

function click_a_tag(element) {
    ga('send', 'event', 'Click_a_tag', 'FileDownload', element.getAttribute('href'));
    return true;
}
