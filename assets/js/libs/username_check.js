//Check if username exists
$('#username').keyup(function(){
    var username = $(this).val();

    $('#username_results').text('Validating....');

    if(username != ''){
        $.post('processes/username-check.php', {username: username}, function(data){
            $('#user_results').text('');
        });
    }else{
        $('#user_results').text('');
    }
});
