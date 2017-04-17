$('#ondev').css('height',parseInt(document.body.scrollHeight)-271);
$("#uploadForm").on("change", function() {
    $.ajax({
        url: 'upload.php',
        type: 'POST',
        cache: false,
        data: new FormData($('#uploadForm')[0]),
        processData: false,
        contentType: false
    }).done(function(res) {
    }).fail(function(res) {});
});