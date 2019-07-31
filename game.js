var word = "Remonty";
var randomWord;
window.onload = loadGame;

words = new Array("Bejca", "Beton", "Celuloza", "Cement", "Chłonność", "Emulsja", "Farba", "Fugowanie", "Fundament", "Gęstość", "Gips", "Glazura", "Grunt", "Hydratacja", "Impregnacja", "Impregnat", "Intarsja", "Izolacja", "Jedwabistość", "Kamień", "Karbonatyzacja", "Kawitacja", "Keramzyt", "Klej", "Klinkier", "Kohezja", "Kołkowanie", "Konwekcja", "Korozja", "Lakier", "Lakierowanie", "Lazura", "Lepkość", "Malowanie", "Odkształcenie", "Odbarwienie", "Paroizolacja", "Pędzel", "Pigment", "Plastyczność", "Płyta", "Podkład", "Podłoże", "Polimery", "Politura", "Połysk", "Popiół", "Posadzka", "Powłoka", "Proces", "Przyczepność", "Rozcieńczalnik", "Rozwarstwienie", "Silikon", "Spoinowanie", "Styropian", "Szpachla", "Szpachlowanie", "Terakota", "Trwałość", "Tynk", "Wodochłonność", "Wodoodporność", "Woskowanie", "Zaprawa", "Żużel", "Żywica", "Żywotność")

function loadGame() {
    let container = document.getElementById("container");

    let number = parseInt(Math.random() * 1000) % words.length;
    word = words[number].toUpperCase();
    randomWord = randomLetters(word);
    var content = createCanvases(word.length);
    container.innerHTML = content;
    for (let i = 0; i < word.length; i++) {
        editCanvas(i + 1);
    }
}

function createCanvases(wordLength) {
    let content = '<div class="word">';
    for (let i = 0; i < wordLength; i++) {
        content += generateDiv(i + 1);
    }
    content += '</div>';
    content += '<div class="word">';
    for (let i = 0; i < wordLength; i++) {
        content += generateCanvas(i + 1);
    }
    content += '</div>';
    return content;
}

function generateDiv(id) {
    return '<div id="inputLetter' + id + '" class="inputLetter" ondrop="drop(event)" ondragover="allowDrop(event)"></div>';

}

function generateCanvas(id) {
    let canvas = '<canvas id="letter' + id + '" width="60" height="40" draggable="true" ondragstart="drag(event)">';
    canvas += randomWord.charAt(id - 1);
    canvas += "</canvas>";
    return canvas;
}

function editCanvas(id) {
    let letterCanvas = document.getElementById("letter" + id);
    letter = letterCanvas.getContext("2d");
    letter.fillStyle = "#534b4b";
    letter.font = "32px Arial";
    letter.fillText(randomWord.charAt(id - 1), 22, 32);

}

function randomLetters(input) {
    var str = input;
    var newArr = [];
    var neww = '';
    var text = input.replace(/[\r\n]/g, '').split(' ');

    text.map(function (v) {
        v.split('').map(function () {
            var hash = Math.floor(Math.random() * v.length);
            neww += v[hash];
            v = v.replace(v.charAt(hash), '');
        });
        newArr.push(neww);
        neww = '';
    });
    var x = newArr.map(v => v.split('').join('')).join('\n');
    str.value = x.split('').map(v => v.toUpperCase()).join('');
    return x;
}

function allowDrop(ev) {    //Zezwolenie na upuszczenie obrazka
    ev.preventDefault();
}

function drag(ev) { //Złapanie obrazka
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) { //Upuszczenie obrazka
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
    checkWord();
}

function checkWord() {
    let win = false;
    let allLetters = true;
    for (let i = 0; i < word.length; i++) {
        let letterDiv = document.getElementById("inputLetter" + (i + 1));
        if (letterDiv.querySelector('canvas') != null) {
            let canvasLetter = letterDiv.querySelector('canvas').textContent;
            if (canvasLetter == word.charAt(i))
                win = true;
            else
                win = false;
        } else {
            win = false;
            allLetters = false;
        }
    }
    let container = document.getElementById("answer");

    if (win && allLetters)
        container.innerHTML += '<h2 style="color:green">Wygrana!</h2>'
    else if (allLetters)
        container.innerHTML += '<h2 style="color:red">Przegrana! Odpowiedź to: '+word+'</h2>'
}
