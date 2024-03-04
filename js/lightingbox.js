(() => {
document.addEventListener('DOMContentLoaded', function() {
	var lightboxTriggers = document.querySelectorAll('.lightbox-trigger');
	var lightbox = document.getElementById('lightbox');
	var closeLightbox = document.getElementById('closeLightbox');
	var lightboxContent = document.querySelector('.lightbox-content');
  
	lightboxTriggers.forEach(function(trigger) {
		trigger.addEventListener('click', function() {
			lightboxContent.src = trigger.src;
			lightbox.style.display = 'block';
		});
	});
  
	closeLightbox.addEventListener('click', function() {
		lightbox.style.display = 'none';
	});
});
})();