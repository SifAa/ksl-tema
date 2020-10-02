
<?php
/**
 * Tema shortcodes
*/

function ksl_function() {
    return 'Kulturstedet Lindegaarden';
}
add_shortcode('ksl', 'ksl_function');

function adresse_function() {
    return 'Peter Lunds Vej 8';
}
add_shortcode('adresse', 'adresse_function');

function postnr_function() {
    return '2800 Kongens Lyngby';
}
add_shortcode('postnr', 'postnr_function');

function tlf_function() {
    return '31 13 31 90';
}
add_shortcode('tlf', 'tlf_function');

function bookmail_function() {
    return 'book@kulturstedetlindegaarden.dk';
}
add_shortcode('book', 'bookmail_function');

function infomail_function() {
    return 'info@kulturstedetlindegaarden.dk';
}
add_shortcode('info', 'infomail_function');

function fblink_function() {
    return 'www.facebook.com/Kulturstedet.Lindegaarden/';
}
add_shortcode('fb', 'fblink_function');

?>