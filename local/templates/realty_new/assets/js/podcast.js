let playingNow = false
let currentTime = "00:00:00"
let players = $('.section__podcast')


(function() {
    if(players.length){
        players.each(function( player ) {
            var audio = player.children('.section__podcast_audio-tag')
            var name = player.children('.section__podcast_name')
            var status = audio.data('status')
            var timeline = player.children('.timeline')
            var playButton = player.children('.js_play-pause')
            var audioInterval = null

            audio.children('.allTime').html = moment(audio.duration * 1000).utc().format('HH:mm:ss')

            playButton.click(function(){
                if( status == 'stopped'){
                    if(playingNow != false){ 
                        $('.section__podcast_audio-tag').trigger('pause')
                        playingNow = false
                    }

                    playingNow = true
                    audio.trigger('play')
                    audio.data('status', 'play')

                    audioInterval = setInterval(function(){
                        player.find('.curNumTime').text( moment(audio.currentTime * 1000).utc().format('HH:mm:ss') )
                        player.find('.currentTime').css('width', audio.currentTime / audio.duration * 100 + '%')
                        currentTime = moment(audio.currentTime * 1000).utc().format('HH:mm:ss')
                    }, 1000);
                } else {
                    audio.trigger('pause')
                    audio.data('status', 'stopped')
                    playingNow = false
                    playButton.attr('src', playIcon)
                    clearInterval(audioInterval)
                }
            })

            timeline.click(function(e){
                var _currentTime = timeline.find('.currentTime')
                _currentTime.css('width', timelineWidthPercent + '%')
                audio.currentTime = parseInt(audio.duration / 100 * ((e.clientX - offset.left) / timeline.width() * 100))

                audio2.onended = function(){
                    _currentTime.css('width', 0 + '%')
                    timeline.siblings('img').attr('src', that.siblings('img').data('play') )
                    timeline.find('.curNumTime').text('00:00')
                    clearInterval(audioInterval)
                    audio.data('status', 'stopped')
                    playingNow = false
                }

                timeline.find('.curNumTime').text( moment(audio.currentTime * 1000).utc().format('HH:mm:ss') );
            })
        })
    }
})();