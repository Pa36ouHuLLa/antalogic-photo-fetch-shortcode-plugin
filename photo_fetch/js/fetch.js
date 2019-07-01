var $j = jQuery.noConflict();
$j('#all').click(function() {
    $j.post({
        url: "/wp-content/plugins/photo_fetch/ajax.php",
        data: {'select': ''}
    }).done(function( data ) {
        $j("#photos-container").html(data);
    });
});
$j('.album-select').click(function() {
    let param = '?albumId=' + this.innerText.split(' ')[1];
    $j.post({
        url: "/wp-content/plugins/photo_fetch/ajax.php",
        data: {'select': param}
    }).done(function( data ) {
        $j("#photos-container").html(data);
    });
});
$j(document).ajaxStart(function () {
    $j("#photos-container").html('');
    $j("#loaderImage").show();
});

$j(document).ajaxComplete(function () {
    $j("#loaderImage").hide();
});