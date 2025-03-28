document.addEventListener('DOMContentLoaded', () => {

    const button = document.getElementsByTagName('button').item(0),
        background = document.body;

    function getRandomColour() {
        const colourSigns = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F'];
        let colour = '#';

        for (let i = 0; i < 6; i++) {
            colour += colourSigns[Math.floor(Math.random() * 16)];
        }

        return colour;
    }

    function setRandomBodyColour() {
        background.style.backgroundColor = getRandomColour();
    }

    button.addEventListener('click', setRandomBodyColour);

    setRandomBodyColour();

});