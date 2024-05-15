var title = document.getElementById("title");

var typewriter = new Typewriter(title, {
  delay: 75,
});

typewriter
  .typeString(
    'De <span class="custom-text">community</span> voor software ontwikkelaars.'
  )
  .pauseFor(300)
  .start();
