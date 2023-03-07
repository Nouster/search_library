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

var app = document.getElementById('app');

var typewriter = new Typewriter(app, {
  loop: true,
  delay: 75,
});

typewriter
  .pauseFor(2500)
  .typeString('A simple yet powerful native javascript')
  .pauseFor(300)
  .deleteChars(10)
  .typeString('<strong>JS</strong> plugin for a cool typewriter effect and ')
  .typeString('<strong>only <span style="color: #27ae60;">5kb</span> Gzipped!</strong>')
  .pauseFor(1000)
  .start();