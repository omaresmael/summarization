$(document).ready(function () {
    $('#test-form').submit(function(){
        return false;

    })
    $('#form-submit').click(function () {
        var sample = $('#form-sample').val();
        var summarization_result = $('#form-result');

        $.post('api/summarization/test', {text:sample}, function(response){
            summarization_result.val(response);
        });

    })

})


