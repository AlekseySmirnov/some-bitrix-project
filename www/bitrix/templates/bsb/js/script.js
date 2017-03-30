$(document).ready(function () {
    $('.hide-bx-panel').on('click', function () {
        var btnText = $(this).text();
        $('#panel').toggle('drop', function () {
            if (btnText == 'скрыть битрикс панель') {
                $('.hide-bx-panel').text('показать битрикс панель');
            } else {
                $('.hide-bx-panel').text('скрыть битрикс панель');
            }
        });
    });
});
