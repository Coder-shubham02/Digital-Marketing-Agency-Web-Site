// scripts/animation.js

// banner  animation
window.onload = function () {
  // Create a timeline for the animations
  const tl = gsap.timeline();

  tl.from("#heroBanner", {
    duration: 1.5,
    x: -200,
    opacity: 0,
    ease: "power3.out",
  });

  // Animate all cards
  tl.from(
    ".cards",
    {
      duration: 1.5,
      y: 200,
      opacity: 0,
      ease: "power3.out",
      stagger: 0.2,
    },
    "<"
  );
};

// Counter animation
document.addEventListener("DOMContentLoaded", function () {
  const counters = document.querySelectorAll(".num");
  let hasCounted = false; // Track if counting has happened

  const countUp = (element, target) => {
    let count = 0;
    const duration = 2000; // 2 seconds
    const increment = target / (duration / 100); // Increment per interval

    const interval = setInterval(() => {
      count += increment;
      if (count >= target) {
        count = target; // Ensure we don't exceed the target
        clearInterval(interval); // Stop the interval
      }
      element.textContent = Math.floor(count); // Update the displayed number
    }, 100);

    // Append "+" when the counting is done
    setTimeout(() => {
      element.textContent = Math.floor(target) + "+"; // Add "+" at the end
    }, duration);
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting && !hasCounted) {
        counters.forEach((counter) => {
          const target = +counter.getAttribute("data-target");
          countUp(counter, target);
        });
        hasCounted = true; // Prevent counting again
        observer.unobserve(entry.target); // Stop observing
      }
    });
  });

  observer.observe(document.querySelector(".work-count"));
});
