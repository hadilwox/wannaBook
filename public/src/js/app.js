const $ = document;
const menuBtn = $.getElementById("menuBtn");
const menuSection = $.getElementById("menu");
const searchBtn = $.getElementById("searchBtn");
const modalSearch = $.getElementById("modalSearch");
const closeSearchModal = $.getElementById("closeSearchModal");
const darkOverlay = $.getElementById("darkOverlay");

console.log(menuBtn);

const openMenu = () => {
    menuBtn.addEventListener("click", function () {
        if (menuSection.style.transform != "translateX(7rem)") {
            menuSection.style.transform = "translateX(7rem)";
            darkOverlay.classList.remove("hidden");
            menuBtn.innerHTML =
                '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-14 cursor-pointer text-gray-100"> <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" /> </svg>';
        } else {
            menuSection.style.transform = "translateX(30rem)";
            darkOverlay.classList.add("hidden");
            menuBtn.innerHTML =
                '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-14 cursor-pointer text-gray-100"> <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" /> </svg>';
        }
    });
};

const openSearchModal = () => {
    searchBtn.addEventListener("click", function () {
        // alert("OK");
        if (modalSearch.className == "hidden") {
            modalSearch.classList.remove("hidden");
            darkOverlay.classList.remove("hidden");
        } else {
            modalSearch.classList.add("hidden");
            darkOverlay.classList.add("hidden");
        }
    });
};

const closeSearch = () => {
    closeSearchModal.addEventListener("click", function () {
        modalSearch.classList.add("hidden");
        darkOverlay.classList.add("hidden");
    });

    darkOverlay.addEventListener("click", function () {
        modalSearch.classList.add("hidden");
        menuSection.style.transform = "translateX(30rem)";
        darkOverlay.classList.add("hidden");
        menuBtn.innerHTML =
            '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-14 cursor-pointer text-gray-100"> <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" /> </svg>';
    });
};




closeSearch();
openSearchModal();
openMenu();
