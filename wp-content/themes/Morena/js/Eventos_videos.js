
var tag;
var firstScriptTag;
var player;
$video_id = "MrlUPrivX7A";


$(".btn_play_video").click(function(ev){
    
    $(".video_player_contenedor").fadeIn();
       
    $video_id = $(this).attr('class').split(' ')[1];
    console.log($video_id);
   
    player.loadVideoById($video_id);


    
     
});


$(".btn_close_video").click(function(ev){
    $(".video_player_contenedor").fadeOut();
    stopVideo();
    tag = null;

});





  
     tag = document.createElement('script');
   
    
    tag.src = "https://www.youtube.com/iframe_api";
    firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);


    // 3. This function creates an <iframe> (and YouTube player)
   
    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', { 
          videoId: $video_id,
          events: {
            'onStateChange': onPlayerStateChange
         }
        });
    }

    // 4. The API will call this function when the video player is ready.
    function onPlayerReady(event) {
        event.target.playVideo();
    }

    // 5. The API calls this function when the player's state changes.
    var done = false;
    function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          setTimeout(stopVideo, 6000);
          done = true;
        }
    }
      

    function PlayVideo() {
      player.playVideo();
    }

    function stopVideo() {
      player.stopVideo();
       

    }
 







