import Flickity from "flickity";

function init() {
    var elem = document.querySelector(".main-carousel");
    if (elem) {
        var flkty = new Flickity(elem, {
            // options
            cellAlign: "left",
            contain: true,
        });
    }
}

export { init as default };
