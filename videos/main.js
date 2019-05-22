window.addEventListener("load", function() {

	smplVideoPlayerVar = document.getElementById("smplVideoPlayer");

		myVideoVar = document.getElementById("myVideo");

	// myControlsContainerVar = document.getElementById("controlsContainer");

		myFullscreenButtonVar = document.getElementById("fullscreenButton");

		myDurationVar = document.getElementById("duration");

		myPlayButtonVar = document.getElementById("playButton");

		myVolumeButtonVar = document.getElementById("volumeButton");
		myVolumeContainerVar = document.getElementById("volumeContainer");
			myVolumeBarVar = document.getElementById("volumeBar");

	myStatusVar = document.getElementById("status");

	myStreamContainerVar = document.getElementById("streamContainer");
		myStreamBarVar = document.getElementById("streamBar");

	// All video functionality loads and active below...
	myVideoVar.load();
	// myVideoVar.addEventListener("canplaythrough", function() {		//To make sure, video can be played without buffering...
	// 	myPlayButtonVar.addEventListener("click", playPauseFun, false);
	// }, false)
	myVideoVar.addEventListener("canplay", function() {
		myPlayButtonVar.addEventListener("click", playPauseFun, false);	//To make sure, video can be played while buffering...

		myStreamContainerVar.addEventListener("click", jumpFun, false);	//Jumps to the clicked part on the streamBar...

		myDurationVar.innerHTML = displayDurationFun();	//This enables the duration to show when video loads...
		// streamingFun();									//This ALSO enables the duration to show when video loads...

		myVolumeButtonVar.addEventListener("click", muteUnmuteFun, false);	//Control Mute and Unmute...
		myVolumeContainerVar.addEventListener("click", changeVolFun, false);	//Change the volume via volume bar...

		myFullscreenButtonVar.addEventListener("click", screenSizeFun);	//Toggle full screen...

	}, false)

}, false);
	// All video functionality loads and active above this line...

// Function definitions below...

function playPauseFun() {		//Play and Pause button functionality...
	if (myVideoVar.paused) {
		myVideoVar.play();
		updatemyStreamBarVar = setInterval(streamingFun, 10);		//Calls streamingFun function every 10ms...
		myPlayButtonVar.className = "fa fa-pause fa-3x";	//Changes play icon to pause icon...
		myStatusVar.innerHTML = "Playing ...";
	} else {
		myVideoVar.pause();
		window.clearInterval(updatemyStreamBarVar);		//Stops running 'streamingFun' when paused... this line of code can be omitted...
		myPlayButtonVar.className = "fa fa-play fa-3x";		//Changes pause icon to play icon...
		myStatusVar.innerHTML = "Paused ...";
	}
}

function streamingFun() {			//Streaming functionality...
	var percentage = (myVideoVar.currentTime / myVideoVar.duration) * 100; //Set percentage value as the video proceeds...
	myStreamBarVar.style.width = percentage + "%";		//Changes the streamBar width...
	myDurationVar.innerHTML = displayDurationFun();		//Changes the 00:00 / 00:00 duration...
	if (myVideoVar.ended) {
		window.clearInterval(updatemyStreamBarVar);	//Stops running "streamingFun" when video ends...
		myPlayButtonVar.className = "fa fa-repeat fa-3x";	//Changes play icon to replay icon when video ends...
	}
}

function jumpFun(pos) {				//Jumping back and forth in streaming functionality...
	var mousePosX = pos.pageX - (smplVideoPlayerVar.offsetLeft - myStreamContainerVar.offsetLeft);	//gets mouse position minus the element's position relative to document left margin...
	var streamContainerWidth = window.getComputedStyle(streamContainer).getPropertyValue("width");	// get the width of streamContainer...
	streamContainerWidth = parseFloat(streamContainerWidth.substr(0, streamContainerWidth.length - 2));	//substr will trim the string... parseFloat will convert string to float...
	myVideoVar.currentTime = (mousePosX/streamContainerWidth) * myVideoVar.duration;	//set the time as per the mouse click...
	streamingFun();
	// alert(streamContainerWidth);
	// alert(mousePosX);
}

function displayDurationFun() {		//display elapsed vs duration functionality...
	var seconds = Math.round(myVideoVar.currentTime);
	var minutes = Math.floor(seconds/60);
	if (minutes > 0) {
		seconds -= minutes*60;
	}
	if (seconds.toString().length === 1) {
		seconds = "0" + seconds;
	}
	if (minutes.toString().length === 1) {
		minutes = "0" + minutes;
	}

	var totalSeconds = Math.round(myVideoVar.duration);
	var totalMinutes = Math.floor(totalSeconds/60);
	if (totalMinutes > 0) {
		totalSeconds -= totalMinutes*60;
	}
	if (totalSeconds.toString().length === 1) {
		totalSeconds = "0" + totalSeconds;
	}
	if (totalMinutes.toString().length === 1) {
		totalMinutes = "0" + totalMinutes;
	}

	return minutes + ":" + seconds + " / " + totalMinutes + ":" + totalSeconds;
}

function muteUnmuteFun() {		//mute and unmute functionality...
	if (myVideoVar.muted) {
		myVideoVar.muted = false;
		myVolumeButtonVar.className = "fa fa-volume-up fa-3x";
		myVolumeBarVar.style.display = "block";
	} else {
		myVideoVar.muted = true;
		myVolumeButtonVar.className = "fa fa-volume-off fa-3x";
		myVolumeBarVar.style.display = "none";
	}
}

function changeVolFun (pos) {		//Volume change functionality...
	var mousePosX = pos.pageX - smplVideoPlayerVar.offsetLeft - myVolumeContainerVar.offsetLeft;	//get mouse position...
	var volumeContainerWidth = window.getComputedStyle(volumeContainer).getPropertyValue("width");	//get the width of volumeContainer...
	volumeContainerWidth = parseFloat(volumeContainerWidth.substr(0, volumeContainerWidth.length - 2));	//substr will trim the string... parseFloat will convert string to float...
	myVideoVar.volume = (mousePosX/volumeContainerWidth);	//changes volume...
	myVolumeBarVar.style.width = (mousePosX/volumeContainerWidth) * 100 + "%";	//changes the volume bar...
	// alert(volumeContainerWidth);
	// alert(mousePosX);
	if (myVideoVar.muted) {		//to unmute when clicked on bar after if the volume is mute...
		myVideoVar.muted = false;
		myVolumeButtonVar.className = "fa fa-volume-up fa-3x";
		myVolumeBarVar.style.display = "block";
	}
}

function screenSizeFun() {		//Toggle full screen...
	if (myVideoVar.requestFullscreen) {
		myVideoVar.requestFullscreen();
	} else if (myVideoVar.webkitRequestFullscreen) {
		myVideoVar.webkitRequestFullscreen();
	} else if (myVideoVar.mozRequestFullscreen) {
		myVideoVar.mozRequestFullscreen();
	} else if (myVideoVar.msRequestFullscreen) {
		myVideoVar.msRequestFullscreen();
	}
}