const myCarouselElement = document.querySelector('.carousel')
Object.values(myCarouselElement).forEach(carousel => {
    new bootstrap.Carousel(carousel, {
        interval: false
    })
})

const scrollPosition = Object.values(document.getElementsByClassName("carousel")).reduce((acc, element) => {
    acc[element.id] = 0;
    return acc;
},{})

console.log(scrollPosition)

$('.carousel-control-next').on('click', function(){
    const innerCarousel = $(this.parentElement.getElementsByClassName("carousel-inner"))
    var carouselWidth = innerCarousel[0].scrollWidth;
    var cardWidth = $(this.parentElement.getElementsByClassName("carousel-item")).width();
    if(scrollPosition[this.parentElement.id] < (carouselWidth - (cardWidth * 4))){
        scrollPosition[this.parentElement.id] = scrollPosition[this.parentElement.id] + cardWidth;
        innerCarousel.animate({scrollLeft:
            scrollPosition[this.parentElement.id]}, 600)
    }

});
// if(window.matchMedia("min-width:576px").matches){
$('.carousel-control-prev').on('click', function(){
    const innerCarousel = $(this.parentElement.getElementsByClassName("carousel-inner"))
    var carouselWidth = innerCarousel[0].scrollWidth;
    var cardWidth = $(this.parentElement.getElementsByClassName("carousel-item")).width();
    
    if(scrollPosition[this.parentElement.id] > 0){
        console.log('prev');
        scrollPosition[this.parentElement.id] = scrollPosition[this.parentElement.id] - cardWidth;
        innerCarousel.animate({scrollLeft:
            scrollPosition[this.parentElement.id]}, 600)
    }

});
// }else{
// $(myCarouselElement).addClass('slide');
// }
