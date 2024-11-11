const playSound = function() {
    let element = document.createElement('div');
    element.setAttribute('style', 'display: none');
    element.innerHTML = `
      <audio autoplay loop>
        <source src="audio/REPULSIVE 1908.mp3" type="audio/ogg">
        <source src="audio/REPULSIVE 1908.ogg" type="audio/mpeg">
      </audio>
    `;
    document.body.appendChild(element);
    document.removeEventListener('click', playSound);
}


document.addEventListener('click', playSound);