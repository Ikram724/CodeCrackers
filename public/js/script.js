// const scroll = new LocomotiveScroll({
//     el: document.querySelector('.main'),
//     smooth: true
// });

function mouseMoveFollower() {
    window.addEventListener("mousemove", function (dets) {
        document.querySelector(
            ".cursor"
        ).style.transform = `translate(${dets.clientX}px,${dets.clientY}px)`;
    });
}
mouseMoveFollower();

document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
        e.preventDefault();

        const target = document.querySelector(this.getAttribute("href"));
        window.scrollTo({
            top: target.offsetTop,
            behavior: "smooth", // Smooth scroll behavior
        });
    });
});
