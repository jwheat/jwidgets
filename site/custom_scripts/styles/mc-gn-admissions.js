$('#ug-admissions-btn').click(function(){
    $('.graduate-container').addClass('hidden');
    $('.undergraduate-container').addClass('active');
    $('#ug-sidenav').addClass('active');
    $('#ug-admissions-btn').addClass('active');

    admission = 1;
    Cookies.set('mc_student_type', '0');
});

$('#g-admissions-btn').click(function(){
    $('.undergraduate-container').addClass('hidden');
    $('.graduate-container').addClass('active');
    $('#g-sidenav').addClass('active');
    $('#g-admissions-btn').addClass('active'); 

    admission = 2;
    Cookies.set('mc_student_type', '1');
});

$('.switch-program-btn').click(function(){
    if(admission == 1){
        $('.graduate-container').removeClass('hidden');
        $('.undergraduate-container').removeClass('active');
        $('#ug-sidenav').removeClass('active');
        $('#ug-admissions-btn').removeClass('active');

        $('.undergraduate-container').addClass('hidden');
        $('.graduate-container').addClass('active');
        $('#g-sidenav').addClass('active');
        $('#g-admissions-btn').addClass('active');

        admission = 2;
        Cookies.set('mc_student_type', '1');
    }
    else{
        $('.undergraduate-container').removeClass('hidden');
        $('.graduate-container').removeClass('active');
        $('#g-sidenav').removeClass('active');
        $('#g-admissions-btn').removeClass('active');

        $('.graduate-container').addClass('hidden');
        $('.undergraduate-container').addClass('active');
        $('#ug-sidenav').addClass('active');
        $('#ug-admissions-btn').addClass('active');

        admission = 1;
        Cookies.set('mc_student_type', '0');
    }
});

$(function(){

    var admission = null;
    var pageVersion = Cookies.get('mc_student_type'); // => 'cookie value'

    if (pageVersion == 1){
        $('#g-admissions-btn').trigger('click');
    }
    if (pageVersion == 0){
        $('#ug-admissions-btn').trigger('click');
    }

});