/*------------------
		Gallery Fiter
	--------------------*/

const filterContainer = document.querySelector(".gallery-tabs");
const filterBtns = filterContainer.querySelectorAll(".gallery-tabs-item");
const eventPhotos = document.querySelectorAll(".events");
const workersPhotos = document.querySelectorAll(".workers");
const allPhotos = document.querySelectorAll(".all");

filterContainer.addEventListener("click", (e) => {
  if (
    e.target.classList.contains("gallery-tabs-item") &&
    !e.target.classList.contains("active")
  ) {
    filterBtns.forEach((btn) => {
      btn.classList.remove("active");
    });
    e.target.classList.add("active");
  }

  const targetPhotos = document.querySelectorAll(e.target.dataset.filter);
	if(targetPhotos){
		allPhotos.forEach((photo) => {
			photo.classList.add("hide");
		})
		targetPhotos.forEach((photo) => {
			photo.classList.remove("hide");
		});
	}
});

/*------------------
	Gallery Modal
--------------------*/

let visibleImages = [];
let currentIndex = 0;

function updateVisibleImages() {
  visibleImages = Array.from(document.querySelectorAll('.gallery-img:not(.hide)'));
}

function showModal(index) {
  updateVisibleImages();
  currentIndex = index;
  $('#modalImage').attr('src', visibleImages[currentIndex].src);
  $('#galleryModal').modal('show');
}

// Update click handlers to use visibleImages
document.querySelectorAll('.gallery-img').forEach((img) => {
  img.addEventListener('click', function () {
    updateVisibleImages();
    // Find the index of the clicked image in the visibleImages array
    const idx = visibleImages.indexOf(this);
    if (idx !== -1) {
      showModal(idx);
    }
  });
});

document.getElementById('prevImg').onclick = function() {
  updateVisibleImages();
  currentIndex = (currentIndex - 1 + visibleImages.length) % visibleImages.length;
  $('#modalImage').attr('src', visibleImages[currentIndex].src);
};

document.getElementById('nextImg').onclick = function() {
  updateVisibleImages();
  currentIndex = (currentIndex + 1) % visibleImages.length;
  $('#modalImage').attr('src', visibleImages[currentIndex].src);
};

// Make gallery images and tabs open modal/filter on Enter/Space
document.querySelectorAll('.gallery-img').forEach(function(img, idx) {
	img.addEventListener('keydown', function(e) {
		if (e.key === 'Enter' || e.key === ' ') {
			e.preventDefault();
			img.click();
		}
	});
});

document.querySelectorAll('.gallery-tabs-item').forEach(function(tab) {
	tab.addEventListener('keydown', function(e) {
		if (e.key === 'Enter' || e.key === ' ') {
			e.preventDefault();
			tab.click();
		}
	});
});

// Make modal navigation buttons keyboard accessible
document.getElementById('prevImg').addEventListener('keydown', function(e) {
	if (e.key === 'Enter' || e.key === ' ') {
		e.preventDefault();
		this.click();
	}
});
document.getElementById('nextImg').addEventListener('keydown', function(e) {
	if (e.key === 'Enter' || e.key === ' ') {
		e.preventDefault();
		this.click();
	}
});
document.querySelector('.modal .close').addEventListener('keydown', function(e) {
	if (e.key === 'Enter' || e.key === ' ') {
		e.preventDefault();
		this.click();
	}
});
