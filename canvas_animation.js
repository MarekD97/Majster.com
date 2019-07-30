//Odwołanie sie do canvas
const canvasElem = document.getElementById("animationCanvas");
const ctx = canvasElem.getContext("2d");

//animacja
function FpsCtrl(fps, cb) {
	const delay = 1000 / fps
	let time = null;
	let frame = -1;
	let requestId;
	let isPlaying = false;

	function loop(timestamp) {
		if (time === null) {
			time = timestamp;
		}
		let seg = Math.floor((timestamp - time) / delay);
		if (seg > frame) {
			frame = seg;
			cb({
				time: timestamp,
				frame: frame
			})
		}
		requestId = requestAnimationFrame(loop);

	}

	this.start = function () {
		if (!this.isPlaying) {
			this.isPlaying = true;
			requestId = requestAnimationFrame(loop);
		}
	};

	this.pause = function () {
		if (this.isPlaying) {
			cancelAnimationFrame(requestId);
			this.isPlaying = false;
			time = null;
			frame = -1;
		}
	};
}

function draw() {
	ctx.clearRect(0, 0, canvasElem.width, canvasElem.height);
	ctx.drawImage(image, 0, frameImage);
	if (frameImage == -4000) {
		frameImage = 0;
	}
	else {
		frameImage -= 400;
	}
}

frameImage = 0;
const image = new Image(400, 4400);
image.addEventListener("load", function () {
	animLoop = new FpsCtrl(15, draw);
	if (typeof (Storage) !== "undefined") {
		if (localStorage.getItem("animLoop") == "start")
			animLoop.start();
		else if (localStorage.getItem("animLoop") == "pause") {
			frameImage = localStorage.getItem("frameImage");
			draw();
			animLoop.pause();
		}
	} else {
		animLoop.start();
	}
});
image.src = "images/animation.png";

function startStopAnimation() {
	if (animLoop.isPlaying) {
		animLoop.pause();
		if (typeof (Storage) !== "undefined") {
			localStorage.setItem("animLoop", "pause");
			localStorage.setItem("frameImage", frameImage);
		}
	}
	else {
		animLoop.start();
		if (typeof (Storage) !== "undefined") {
			localStorage.setItem("animLoop", "start");
		}
	}
}