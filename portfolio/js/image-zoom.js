$(function() {
    $('img').on('click', function() {
        $('.enlargeImageModalSource').attr('src', $(this).attr('src'));
        // Change href attribute to alt text
        $('.LinkModalSource').attr('href', $(this).attr('alt'));
        // Change inner HTML to alt attribute
        $('.LinkModalSource').text($(this).attr('alt'));
        $('#enlargeImageModal').modal('show');
    });
});