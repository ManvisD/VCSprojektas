$(document).ready( function() {

    $(".mid-contact").find('button').click(showContacts);
    // $(".mid-contact").find('button').click(hideMessage);
    // $(".forma").find('button').click(showMessage);




} )

function showContacts() {
    $(this).closest('.mid-contact').find('.forma').toggle(750);
    $(this).closest('.mid-contact').find('.b3').toggle(750);
    
}

// function showMessage() {
//     $(this).closest('.mid-contact').find('.s1').toggle(100);
// }

// function hideMessage() {
//     $(this).closest('.mid-contact').find('.s1').hide(100);
// }