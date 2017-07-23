$(document).ready(function(){
    $('#maindiv').load('new.php');

    $('ul#lis li a').click(function(){
        var page = $(this).attr('href');
        $('#maindiv').load( page + '.php');
    return false;
    });
});



/*WORKING*/
