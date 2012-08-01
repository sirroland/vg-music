/**
 * Created with JetBrains PhpStorm.
 * User: Евгений
 * Date: 31.07.12
 * Time: 21:14
 * To change this template use File | Settings | File Templates.
 */
$(document).ready(function(){
    $('audio, video').mediaelementplayer({
        features: ['playpause','progress','current','duration','tracks','volume','fullscreen'],
        pauseOtherPlayers: true
    });

    var player=new MediaElementPlayer('audio');
    $('.play').click(function(){
        player.play();
    });
    $('.stop').click(function(){
        player.stop();
    });

});