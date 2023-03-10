jQuery(document).ready(function () {
    jQuery('#frm-phone').on('keypress', function(e) {
        if (e.which == 32)
            return false;
    });

    $("#upload-avatar").change(function () {
        jQuery('#req-avatar .alert-danger').addClass('hidden');
        if(this.files[0].size > geckoso.maxSize) {
            jQuery('#req-avatar .alert-danger').removeClass('hidden');

            jQuery(this).val("");
            jQuery('#avatar-preview').empty();
            return false;
        }

        var input = this;
        var url = $(this).val();
        var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
        if (input.files && input.files[0] && (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#avatar-preview').empty().append("<div class='img-preview'><img src='" + e.target.result + "' ></div>");
                }
                reader.readAsDataURL(input.files[i]);
            }
        }
    });
});

function submitFrm() {
    if (isValidFrm()) {
        jQuery('#frm-add').removeAttr('onsubmit').submit();

        jQuery('#frm-add .card-footer').hide().after(geckoso.loadingIMG);
    }
    return false;
}

function isValidFrm() {
    var frmName = jQuery('#frm-name').val().trim();
    var frmPhone = jQuery('#frm-phone').val().trim();
    var valid = true;

    jQuery('#frm-add .alert-danger').addClass('hidden');

    if (!frmName) {
        jQuery('#req-name .alert-danger').removeClass('hidden');
        valid = false;
    }
    if (!frmPhone) {
        jQuery('#req-phone .alert-danger').removeClass('hidden');
        valid = false;
    }

    return valid;
}
