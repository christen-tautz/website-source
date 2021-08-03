var request = new XMLHttpRequest()

request.open('GET', 'https://api.christen-tautz.de/v2/media/tree', true)
request.send()

request.addEventListener("readystatechange", response, false);

function response(i) {
    if (request.readyState == 4 && request.status == 200) {
        var res = JSON.parse(request.responseText);

        var image_payload = document.createElement("img");
        image_payload.src = res.image;
        image_payload.setAttribute("style", 'display: block; text-align: center; margin: 0 auto; width: 100%; max-width: 550px ')

        var append = document.getElementById("tree_image")
        append.appendChild(image_payload)
    }
}
