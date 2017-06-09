var audio_context;
var recorder;

function __log(e, data) {
  console.log(e);
}

function startUserMedia(stream) {
  var input = audio_context.createMediaStreamSource(stream);
  __log('Media stream created.');

  recorder = new Recorder(input);
  __log('Recorder initialised.');
}

function startRecording() {
  recorder && recorder.record();
  __log('Recording...');
}

function stopRecording() {
  recorder && recorder.stop();
  __log('Stopped recording.');
  createDownloadLink();
  recorder.clear();
}

function createDownloadLink() {
  recorder && recorder.exportWAV(function(blob) {
   var reader = new window.FileReader();
   reader.readAsDataURL(blob);
   reader.onloadend = function() {
    convert(reader.result.split(',')[1]);
  }
});
}

var record = document.getElementById("record");

record.onclick = function() {
  if(record.getAttribute("data-status") == "1"){
    startRecording();
    record.style.background = "red";
    record.style.color = "black";
    record.setAttribute("data-status","2");
    return;
  } else{
    stopRecording();
    record.style.background = "";
    record.style.color = "";
    record.setAttribute("data-status","1");
    return;
  }

}

window.onload = function init() {
  try {
    window.AudioContext = window.AudioContext || window.webkitAudioContext;
    navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia;
    window.URL = window.URL || window.webkitURL;

    audio_context = new AudioContext;
    __log('Audio context set up.');
    __log('navigator.getUserMedia ' + (navigator.getUserMedia ? 'available.' : 'not present!'));
  } catch (e) {
    alert('No web audio support in this browser!');
  }

  navigator.getUserMedia({audio: true}, startUserMedia, function(e) {
    __log('No live audio input: ' + e);
  });
};
