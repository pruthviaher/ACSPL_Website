(function() {

    const scrollContent = document.getElementById("scrollImages");
    let index = 0;
    const images = scrollContent.querySelectorAll("img");
    function scrollNext() {
    index++;
    if (index >= images.length) {
    index = 0;
    }
    const scrollAmount = images[index].offsetLeft;
    scrollContent.style.transform = `translateX(-${scrollAmount}px)`;
    }
    setInterval(scrollNext, 2000); 

})();