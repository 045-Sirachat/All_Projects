function playSong(song) {
    var audioPlayer = document.getElementById('audio-player');
    audioPlayer.src = 'music/' + song;
    audioPlayer.play();
}