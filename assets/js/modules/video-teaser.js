document.getElementById('icon-test')?.addEventListener('click', (event) => {
    event.preventDefault();
    var videoCover = document.querySelector('.video-cover');
    var video = document.getElementById('video-teaser');

    videoCover.classList.add('hidden');

    video.play();
});
