<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
<script type="module">
    import Swiper from "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs";

    const swiper = new Swiper(".swiper", {
        slidesPerView: 4,
        direction: getDirection(),
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    function getDirection() {
        var windowWidth = window.innerWidth;
        var direction = "horizontal";

        return direction;
    }
</script>
<script src="{{ asset('src/js/app.js') }}"></script>
