function displayGalleryGrid() {
    var container = document.getElementById("content");

    let content = '<div class="row">';
    for (i = 0; i < 10; i++) {
        content += '<div class="col-md-6 col-lg-4 col-xl-3">';
        content += '<img src="images/gallery/renovation'+(i+1)+'.jpg" width="100%" height="100%" />';
        content += '</div>';
    }
    content += '</div>';
    container.innerHTML = content;
}
