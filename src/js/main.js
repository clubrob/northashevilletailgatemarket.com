document.addEventListener("DOMContentLoaded", function() {
  /* Mobile Menu Toggle */
  const menuToggle = document.querySelector(".menu-toggle");
  menuToggle.addEventListener("click", (e) => {
    document.body.classList.toggle("nav-open");
  });
  const anchorNavLink = document.querySelector("#primary-menu li:nth-child(9)");
  anchorNavLink.addEventListener("click", (e) => {
    window.location.reload();
  });

  /* Scroll to Top Functionality */
  const scrollToTop = () => {
    const c = document.documentElement.scrollTop || document.body.scrollTop;

    if (c > 0) {
      window.requestAnimationFrame(scrollToTop);
      window.scrollTo(0, c - c / 2);
    }
  };
  var backTopButton = document.querySelector(".back-top-button");
  backTopButton.addEventListener("click", (e) => {
    e.preventDefault();
    scrollToTop();
  });

  /* Add nav class on scroll */

  const scrollHandler = (event) => {
    const scrollPosition = window.scrollY;

    if (scrollPosition > 50 && document.documentElement.clientWidth > 768) {
      document.body.classList.add("scrolled");
      return;
    }
    document.body.classList.remove("scrolled");
  };
  window.addEventListener("scroll", _.throttle(scrollHandler, 100));

  /* Newsletter Toast Modal */
  if (document.querySelector(".toast-modal")) {
    const toastModal = document.querySelector(".toast-modal");
    const closeModal = document.querySelector(".close-modal a");

    setTimeout(function() {
      toastModal.classList.add("show");
    }, 3500);

    const closeModalAction = () => {
      toastModal.classList.remove("show");
    };

    closeModal.addEventListener("click", (e) => {
      e.preventDefault();
      closeModalAction();
    });

    document.addEventListener("keyup", (e) => {
      if (e.key === "Escape") {
        closeModalAction();
      }
    });

    document.addEventListener("click", (e) => {
      if (e.target !== toastModal) {
        closeModalAction();
      }
    });
  }

  /* Rotate Homepage Hero */
  if (document.querySelector("body.home")) {
    const baseUrl = "http://localhost:8080";
    const imagesArray = [
      "/wp-content/uploads/2020/06/IMG_3478-scaled-e1593114946703.jpg",
      "/wp-content/uploads/2020/07/Gallery1-scaled-e1593700993558.jpg",
      "/wp-content/uploads/2020/07/HP_OurMembers-scaled-e1593701045783.jpg"
    ];
    const coverElement = document.querySelector(
      ".entry-content .wp-block-cover"
    );
    const seconds = 4;

    imagesArray.forEach(function(img) {
      new Image().src = baseUrl + img;
      // caches images, avoiding white flash between background replacements
    });

    // function backgroundSequence() {
    //   window.clearTimeout();
    //   var k = 0;
    //   for (i = 0; i < imagesArray.length; i++) {
    //     setTimeout(function() {
    //       console.log(coverElement);
    //       coverElement.style.backgroundImage = `url("${baseUrl}${imagesArray[k]}")`;
    //       //coverElement.style.color = 'green';
    //       if (k + 1 === imagesArray.length) {
    //         setTimeout(function() {
    //           backgroundSequence();
    //         }, seconds * 1000);
    //       } else {
    //         k++;
    //       }
    //     }, seconds * 1000 * i);
    //   }
    // }
    // backgroundSequence();
	// let bgCount = 1;
	// setInterval(() => {
	//   if (bgCount < imagesArray.length) {
	// 	coverElement.style.backgroundImage = `url("${baseUrl}${imagesArray[bgCount]}")`;
	// 	bgCount++;
	// 	return;
	//   }
	//   coverElement.style.backgroundImage = `url("${baseUrl}${imagesArray[0]}")`;
	//   bgCount = 1;
	// }, 4000);
  }
});
