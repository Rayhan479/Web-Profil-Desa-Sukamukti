// Get the modal
var modal = document.getElementById("videoModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closeBtn")[0];

// Get the iframe element
var youtubeVideo = document.getElementById("youtubeVideo");

// Function to open modal with the selected video
function openModal(videoId) {
    modal.style.display = "block";
    youtubeVideo.src = "https://www.youtube.com/embed/" + videoId;
}

// When the user clicks on <span> (x), close the modal and stop the video
span.onclick = function() {
    modal.style.display = "none";
    youtubeVideo.src = ""; // Stop the video by resetting the src
}

// When the user clicks anywhere outside of the modal, close it and stop the video
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        youtubeVideo.src = ""; // Stop the video by resetting the src
    }
}

// Add click event listeners to all video cards
var videoCards = document.getElementsByClassName("video-card");
for (var i = 0; i < videoCards.length; i++) {
    videoCards[i].onclick = function() {
        var videoId = this.getAttribute("data-video-id");
        openModal(videoId);
    }
}





