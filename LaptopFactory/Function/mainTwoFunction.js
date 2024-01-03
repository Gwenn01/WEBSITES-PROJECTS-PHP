// varibales
// images
let images = [
  'NITRO.jpg',
  'PREDATOR.jpg',
  'ROG.jpg',
  'TUF.jpg',
]
const arrowLeftbtn = document.getElementById('left');
const arrowRightbtn = document.getElementById('right');
const pictureEl = document.getElementById('picture');
let index = 0;
display();
// functionality
// AUTO scroll
setInterval(autoSlide, 3000);
function autoSlide(){
  if (index == images.length-1){
    index = 0;
  }
  index++;
  display();
}
arrowLeftbtn.addEventListener('click', () => {
    if (index == 0){
      index = images.length;
    }
    index--;
    display();
})
arrowRightbtn.addEventListener('click', () => {
    if (index == images.length-1){
      index = -1;
    }
    index++;
    display();
});
// function for displaying the image 
function display(){
    pictureEl.innerHTML = `
    <img src="IMAGES/SlideImage/SLIDING/${images[index]}" alt="picture">
`;
}