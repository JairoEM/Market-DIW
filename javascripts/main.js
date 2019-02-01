$( document ).ready(function() {
    // INSERT WHATEVER YOU NEED
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    });
});