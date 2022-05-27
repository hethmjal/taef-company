$('.nav-link').on('click',function(){
    $('.nav-link').removeClass('active')
    $('.nav-item').removeClass('active')
    $(this).addClass('active')
    $(this).parent().addClass('active')
})

