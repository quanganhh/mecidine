$(document).ready(function(){
    var orderIdStock    = $('#orderIdStock').val();
    var orderIdExternal = $('#orderIdExternal').val();
    $('.btn-payment-stock').html('<a class="button" onclick="javascript: paymentCall(\'stock\', '+ orderIdStock +');">Thanh toán</a>');
    $('.btn-payment-external').html('<a class="button" onclick="javascript: paymentCall(\'external\', '+ orderIdExternal +');">Thanh toán</a>');

    contExpand = $('.content-expand');
    $('.grid').each(function(){
        var radio = $(this).children('input');
        $(this).click(function(e){
            radio.attr('checked','checked');
            if($(this).find('.content-expand').css('display') == 'none'){
                contExpand.slideUp();
                $(this).find('.content-expand').slideDown();
            }
        });
    });

    $('a.logoBank, input[name="rd-bank"]').each(function(){
        var li_bank        = $(this).closest('li'),
            rd_bank         = li_bank.find('input[name="rd-bank"]');
        $(this).click(function(){
            $('.listBank').find('li').removeClass('active');
            li_bank.addClass('active');
            rd_bank.attr('checked','checked');
            if($(this).closest('.content-expand').find('.button-control').css('display') == 'none'){
                $('.button-control').hide('');
                $(this).parents('.content-expand').find('.button-control').slideDown('');
            }
        });
    });
});
