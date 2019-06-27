$('#deleteCModal').on('show.bs.modal', function(e) {
    $(this).find('#conf_delete').attr('href', $(e.relatedTarget).data('uri'));
});

$('.hide').hide();

function isNumberKey(evt)
    {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;

        return true;
    }