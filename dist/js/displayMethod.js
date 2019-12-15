<script>
let regBox = $('.regBox');
let prefBox = $('.prefBox');
let prefBlock = $('.prefDiv');

prefBox.each(function(){
    // console.log($(this).data());
});

$(regBox).on('change', function(){
    if (!$(this).is(':checked')) {
    rData = $(this).data('rid');
        rIdCheck('display:none');
    } else {
    rData = $(this).data('rid');
        rIdCheck('display:true');
    };
});

function rIdCheck(i){
    prefBox.each(function(){
        pData = $(this).data('rid');
        if (pData == rData){
            $(this).parent().attr('style', i);
        };
    });
};
</script>