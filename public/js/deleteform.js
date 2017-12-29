function showFormDelete(action,id) {
    $("#delete-form").attr('action',action+id);
    $(".form-delete-container").slideToggle("slow");
}

function hideFormDelete() {
    $(".form-delete-container").slideToggle("slow");
}

$(':checkbox').on('click',function () {
    if($("input:checkbox:checked").length>0){
        $('.form-menu').css('display', 'block');
    }
    else{
        $('.form-menu').css('display', 'none');
    }
});