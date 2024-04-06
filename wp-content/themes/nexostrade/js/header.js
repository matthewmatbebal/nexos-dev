
// Получаем все элементы навигации
var navElements = document.querySelectorAll('.nav-elem');

// Перебираем элементы навигации и добавляем обработчик событий клика
navElements.forEach(function(navElement) {
	navElement.addEventListener('click', function() {
		// Получаем следующий элемент в DOM, который является блоком с ссылками
		var linksBlock = this.querySelector('.nav-links');
		
		if (this.classList.contains("clicked")) {
			linksBlock.classList.remove('active');
			this.classList.remove('clicked');
		} else {
			document.querySelectorAll('.nav-links').forEach(function(block) {
				block.classList.remove('active');
			});
			document.querySelectorAll('.nav-elem').forEach(function(block) {
				block.classList.remove('clicked');
			});

			linksBlock.classList.add('active');
			this.classList.add('clicked');
		}
	});
});


var buttonOpen = document.getElementById('open-popup');
buttonOpen.addEventListener('click', function() {
	var modal = document.getElementById('modal-menu');
	modal.classList.add('active');
});

var buttonClose = document.getElementById('close-popup');
buttonClose.addEventListener('click', function() {
	var modal = document.getElementById('modal-menu');
	modal.classList.remove('active');
});

