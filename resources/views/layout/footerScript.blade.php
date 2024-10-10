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
<script>
    // DOM Elements
    const searchInput = document.getElementById('search');
    const containerSearchItem = document.getElementById('containerSearchItem');

    searchInput.addEventListener("keypress", function () {
        let query = searchInput.value; // دریافت مقدار ورودی

        // Ajax
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "{{ route('ajax.search') }}", true);

        // Set CSRF Token header
        xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function () {
            if (xhr.status == 200) {
                let books = JSON.parse(this.response); // تبدیل پاسخ JSON به آرایه‌ای از آبجکت‌ها
                displayBooks(books); // نمایش کتاب‌ها در قالب
            } else {
                console.error('Error:', xhr.status);
            }
        }

        // ارسال مقدار اینپوت
        let params = "query=" + encodeURIComponent(query);
        xhr.send(params);
    });

    function displayBooks(books) {

        console.log(books);
        // پاک‌سازی نتایج قبلی
        containerSearchItem.innerHTML = '';

        // ساخت هر کتاب به صورت داینامیک
        books.forEach(book => {
            let bookHTML = `
            <div>
                <a href="{{ route('books.id', '') }}/${book.id}" class="flex gap-5 my-3">
                    <img src="${book.image}" alt="${book.name}"
                         class="h-28 w-20 rounded-md border-gray-900 border-2">
                    <div class="flex flex-col justify-evenly">
                        <h5 class="font-bold text-lg text-gray-100">${book.name}</h5>
                        <p class="font-medium text-sm text-gray-100">نویسنده : <span>${book.author.name}</span></p>
                    </div>
                </a>
            </div>
        `;

            // اضافه کردن کتاب به نتیجه
            containerSearchItem.insertAdjacentHTML('beforeend', bookHTML);
        });
    }


</script>
<script src="{{ asset('src/js/app.js') }}"></script>
