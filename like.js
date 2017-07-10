function addLike(product_id) {

    jQuery.ajax({
        url: "/magedoclike/AddLike/likeResult",
        type: "POST",
        data: {product_id: product_id},
        success: function (data) {
            if(data == '')
            {
                alert("You pressed the button like");
            }
            else
            {
                jQuery('.page').find('button#count_like_'+ product_id).each(function () {
                    jQuery(this).prop( "disabled", true );
                    jQuery(this).attr("num",data);
                });
            }
        }
    });
}
function Likes(rewiew_id) {
//console.log(rewiew_id);
    jQuery.ajax({
        url: "/magedoc_advancedreview/Review/likeResult",
        type: "POST",
        data: {rewiew_id: rewiew_id},
        success: function (data) {
            console.log(data);
            if(data == '')
            {
                alert("You pressed the button like");
            }
            else
            {
                jQuery('.page').find('button#count_like_'+ rewiew_id).each(function () {
                    jQuery(this).prop( "disabled", true );
                    jQuery(this).attr("num",data);
                });
            }
        }
    });
}
function showPopup(sUrl) {

    oPopup = new Window({
        id:'popup_window',
        className: 'magento',
        url: sUrl,
        width: 820,
        height: 600,
        minimizable: false,
        maximizable: false,
        showEffectOptions: {
            duration: 0.4
        },
        hideEffectOptions:{
            duration: 0.4
        },
        destroyOnClose: true
    });
    oPopup.setZIndex(100);
    oPopup.showCenter(true);
}

function closeIFrame(){
    Windows.close('popup_window');
}
