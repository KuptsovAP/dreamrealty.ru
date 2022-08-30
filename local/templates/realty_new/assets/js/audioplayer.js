// Объект плеера
const audioPlayer = {
	// Все аудио дорожки
	items: [],
	
	// Активное аудио
	now: -1,
	
	//
	init: function () {
		let audios = document.querySelectorAll('[data-trigger-play-src]');

		let index = 0;
		for (let audio of audios) {
			audio.setAttribute('data-trigger-play-id', index);
			
			audioPlayer.items.push({
				id: index++,
				player: null, // player,
				status: false,
			});
			
			function f () {
				// С каким аудио работаем
				let id = audio.getAttribute('data-trigger-play-id');
				
				if (audioPlayer.items[id].player === null) {
				    let player = new Audio();
        			let audio_link = audio.getAttribute('data-trigger-play-src');
        			player.src = audio_link;
        			
        			audioPlayer.items[id].player = player;
				}
				
				// Если сейчас ничего не играет - играем
				if (audioPlayer.now === -1) {
					audioPlayer.items[id].player.currentTime = 0;
					audioPlayer.items[id].player.play();
					audioPlayer.items[id].status = true;
					audioPlayer.now = id;
					return;
				}

				// Если сейчас это аудио уже играет - ставим паузу или снимаем с неё
				if (audioPlayer.now == id) {
					if (audioPlayer.items[id].status) {
						audioPlayer.items[id].player.pause();
						audioPlayer.items[id].status = false;
						return;
					}
					audioPlayer.items[id].player.play();
					audioPlayer.items[id].status = true;
					return;
				}

				// Если сейчас играет другое аудио - ставим паузу и играем новое аудио
				if (audioPlayer.now != id && audioPlayer.now != -1) {
					audioPlayer.items[audioPlayer.now].player.currentTime = 0;
					audioPlayer.items[audioPlayer.now].player.pause();
					audioPlayer.items[audioPlayer.now].status = false;

					audioPlayer.items[id].player.currentTime = 0;
					audioPlayer.items[id].player.play();
					audioPlayer.items[id].status = true;
					audioPlayer.now = id;
					return;
				}
			}

			audio.addEventListener('click', f);
		}
	}
}

audioPlayer.init();