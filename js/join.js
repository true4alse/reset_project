$(document).ready(function() {
    $('dt .more').click(function() {
        // 클릭한 dt 요소의 형제인 dd를 토글
        $(this).parent().next('dd').toggleClass('active');

        // 클릭한 dt 요소의 텍스트를 변경
        if ($(this).text() === '보기') {
            $(this).text('닫기');
        } else {
            $(this).text('보기');
        }
    });
});
