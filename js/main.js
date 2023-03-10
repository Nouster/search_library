let pictures = document.querySelectorAll('div.vignette');
let submitButton = document.querySelector('input[type="submit"]');

pictures.forEach(picture => {
    picture.onmouseover = () => {
        picture.style = 'border: 2px solid white !important; cursor: pointer; transform: scale(1.08); transition-duration: 0.5s';

}

picture.onmouseout = () => {

    picture.style.transform = 'none';
    picture.style.border = 'none';

}
})

submitButton.onmouseover = ()=>{

    submitButton.style.transform = 'scale(1.1)';

}

submitButton.onmouseout = ()=>{

    submitButton.style.transform = 'none';

}

let app = document.getElementById('app');


let customNodeCreator = function(character) {
  return document.createTextNode(character);
}

let typewriter = new Typewriter(app, {
  loop: false,
  delay: 75,
  onCreateTextNode: customNodeCreator,
});

typewriter
  .typeString('Level up <span class= "bg-dark px-3 py-1 text-white rounded">your skills</span>')
  .pauseFor(100)
  .start();

typewriter.typeString('')
    .pauseFor(1000)
    .deleteAll(5)
    .typeString('with the<span class = "bg-dark px-3 py-1 text-white rounded"> power of gaming </span>')
    .pauseFor(1000)
    .deleteChars()
    .start();
  


    