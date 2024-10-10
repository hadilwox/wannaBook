<section id="modalSearch" class="hidden">

    <!-- Main modal -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="flex overflow-y-auto fixed inset-0 z-50 justify-center items-center">
        <div class="fixed p-4 w-full max-w-sm max-h-full">
            <!-- Modal content -->
            <div class="relative bg-teal-800 rounded-lg shadow max-h-[80vh] overflow-y-auto">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-400">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        کتاب مورد نظر را جستجو کنید
                    </h3>
                    <button type="button" id="closeSearchModal"
                        class="end-2.5 text-gray-400 bg-transparent hover:bg-green-700 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:text-white"
                        data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <label for="search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>

                            <input type="text" id="search" name="search"
                                class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500 bg-teal-950 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                                placeholder="Search" />
                            <button id="searchBotton"
                                class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Search</button>

                    </div>


                </div>

                <!-- items search -->
                <div id="containerSearchItem" class="p-4 md:p-5 border-t border-gray-400">

{{--                    <!-- one book for search -->--}}
{{--                    <div>--}}
{{--                        <a href="#" class="flex gap-5 my-3">--}}
{{--                            <img src="uploads/Hobbit.jpg" alt=""--}}
{{--                                 class="h-28 w-20 rounded-md border-gray-900 border-2">--}}
{{--                            <div class="flex flex-col justify-evenly">--}}
{{--                                <h5 class="font-bold text-lg text-gray-100">ارباب حلقه ها 1</h5>--}}
{{--                                <p class="font-medium text-sm text-gray-100">نویسنده : <span>تالکین</span></p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}



                    <!-- additional items can be added here -->
                </div>

            </div>
        </div>
    </div>

</section>
