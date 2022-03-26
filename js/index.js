// autor vokevoke
const buttonElement = document.querySelector('#search');
const inputElement = document.querySelector('#inputValue');







buttonElement.onclick = function(event) {
    event.preventDefault();
    const value = inputElement.value;
    console.log('Value: ', value);
  
}

var scrollDistance = function (callback) {

	
	if (!callback || typeof callback !== 'function') return;

};
var videoPlayer = function(){
  "use strict";

  function el(id) {
      return document.getElementById(id);
  }

  var vid = el("video"),

      btnState = el("btnState"),
      btnReplay = el("btnReplay"),
      btnSound = el("btnSound"),
      sliderVolume = el("sliderVolume"),

      barSeeker = el("barSeeker"),
      barBuffer = el("barBuffer"),
      barProgress = el("barProgress"),

      timePlayed = el("timePlayed"),
      timeDuration = el("timeDuration"),
      timeBubble = el("timeBubble"),

      thePosition,
      theMinutes,
      theSeconds,
      theTime;

  var readableTime = function(t) {
      theMinutes = "0" + Math.floor(t / 60); 
      theSeconds = "0" + parseInt(t % 60); 
      theTime = theMinutes.slice(-2) + ":" + theSeconds.slice(-2); 
      return theTime;
  };

  /* Video controls */

  var togglePlay = function(){
      if(vid.paused) {
          vid.play();
          btnState.firstElementChild.className = "fontawesome-pause";
          btnReplay.style.display = "none";
          vid.style.opacity = 1;
      } else {
          vid.pause();
          btnState.firstElementChild.className = "fontawesome-play";
      }
  };

  var toggleSound = function(){
      if(vid.muted) {
          vid.muted = false;
          sliderVolume.value = 10;
          btnSound.firstElementChild.className = "fontawesome-volume-up";
      } else {
          vid.muted = true;
          sliderVolume.value = 0;
          btnSound.firstElementChild.className = "fontawesome-volume-off";
      }
  };

  
  var updateTimeDisplay = function() {
      var timePercent = (100 / vid.duration) * vid.currentTime;
      barSeeker.value = timePercent;
      barProgress.value = timePercent;
      timePlayed.innerHTML = readableTime(vid.currentTime);
  };

  var replayVideo = function() {
      vid.currentTime = 0;
      btnState.firstElementChild.className = "fontawesome-pause";
      btnReplay.style.display = "none";
      vid.play();
  };

  
  vid.addEventListener("click",togglePlay);
  btnState.addEventListener("click",togglePlay);
  btnSound.addEventListener("click",toggleSound);

  sliderVolume.addEventListener("change", function() {
      var theVolume = sliderVolume.value / 10;
      vid.volume = theVolume;

      if(theVolume === 0) {
          btnSound.firstElementChild.className = "fontawesome-volume-off";
      } else if (theVolume === 1) {
          btnSound.firstElementChild.className = "fontawesome-volume-up";
      } else {
          btnSound.firstElementChild.className = "fontawesome-volume-down";
      }
  });

  
  vid.addEventListener("timeupdate",updateTimeDisplay);

  
  barSeeker.addEventListener("change", function() {
      thePosition = vid.duration * (barSeeker.value / 100);
      vid.currentTime = thePosition;
  });

 
  barSeeker.addEventListener("mousedown",function(){
      vid.pause();
      vid.removeEventListener("timeupdate",updateTimeDisplay);
  });

  barSeeker.addEventListener("mouseup",function(){
      vid.play();
      btnState.firstElementChild.className = "fontawesome-pause";
      vid.addEventListener("timeupdate",updateTimeDisplay);
  });

 
  vid.addEventListener("timeupdate", function() {
      var bufferPercent = (100 / vid.duration) * vid.buffered.end(vid.buffered.length - 1);
      barBuffer.value = bufferPercent;
  });

 
  vid.addEventListener('loadeddata', function(){
      timeDuration.innerHTML = readableTime(vid.duration);
  });


  var bubblePop = function(e){
      var cursorPos = (e.clientX - (barSeeker.getBoundingClientRect().left)) / (barSeeker.offsetWidth);
      var seekTime = cursorPos * vid.duration;

      if(seekTime) {
          timeBubble.innerHTML = readableTime(seekTime);
          timeBubble.style.left = (e.clientX - barSeeker.getBoundingClientRect().left + 78) + "px";
          timeBubble.style.display = "block";
      }
  };

  barSeeker.addEventListener("mousemove", bubblePop);

  barSeeker.addEventListener("mouseout", function(){
      timeBubble.style.display = "none";
  });


var playlistAnchor = document.querySelectorAll(".next-video"),
  imageURL = document.querySelectorAll(".next-video img");

var prevTitle = document.querySelector(".video-title"),
  prevDescription = document.querySelector(".description");

  for (var i = 0; i < 4; i++) {
      (function(){
          var k = i;

          playlistAnchor[i].addEventListener("click", function(e){
              e.preventDefault();

              var playedVideo = document.querySelector(".played-video");
              playedVideo.classList.remove("slide");
              playedVideo.classList.remove("played-video");

              vid.poster = imageURL[k].src;
              vid.src = playlistAnchor[k].href;

              prevTitle.innerHTML = this.querySelector(".single-video-title").textContent;
              prevDescription.innerHTML = this.querySelector(".single-video-des").textContent;

            
              replayVideo();

              this.classList.add("played-video");
              playedVideo.classList.add("slide");

              setTimeout(function(){
                  playlistAnchor[k].parentNode.appendChild(playlistAnchor[k]);
              }, 500);
          });

      }());
  }

}();


























































