function loadGallery() {
    var container = document.getElementById("content");

    let content = '<div class="row">';
    for (i = 0; i < 10; i++) {
        content += '<div class="col-6 col-xl-4">';
        content += '<img src="images/gallery/renovation'+(i+1)+'.jpg" width="100%" height="100%" onClick="onImageClick('+(i+1)+')" />';
        content += '</div>';
    }
    content += '</div>';
    container.innerHTML = content;
}

function onImageClick(number) {
    var container = document.getElementById("content-fullscreen");
    container.style.visibility = "visible";
    let content = '<div onClick="closeClick()">';
    content += '<img src="images/gallery/renovation'+number+'.jpg" width="100%" height="100%">';
    content += '</div>';
    container.innerHTML = content;
}

function closeClick() {
    document.getElementById("content-fullscreen").style.visibility = "collapse";
}
