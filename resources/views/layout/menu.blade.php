<section id="menu" style="transform: translateX(35rem) !important;transition: all 500ms ease;"
    class="fixed container h-screen top-0 left-0 right-0 bottom-0 bg-zinc-800 z-40 md:hidden pr-36 pl-5 pt-5">

    <!-- add new book start -->

    <form action="{{ route('book.create') }}" method="POST" enctype="multipart/form-data">
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>

                @csrf

                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">نام
                    کتاب</label>
                <input type="text" id="title" name="title"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                    placeholder="ارباب حلقه ها" />
                @error('title')
                    @include('layout.message.errorMessage')
                @enderror
            </div>
            <div>
                <label for="author"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">نویسنده</label>
                <input type="text" id="author" name="author"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                    placeholder="تالکین" />
                @error('author')
                    @include('layout.message.errorMessage')
                @enderror
            </div>
            <div>
                <label for="year" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">سال
                    انتشار</label>
                <input type="text" id="year" name="year"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                    placeholder="1957" />
                @error('year')
                    @include('layout.message.errorMessage')
                @enderror
            </div>
            <div>

                <!-- <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
        <input type="file" name="imageFile" id="imageFile"
          class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"> -->

                <input name="image"
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    id="file_input" type="file">


            </div>

            <button type="submit" name="dataBook"
                class="text-white bg-teal-900 hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">افزودن</button>
    </form>



    <!-- add new book end   -->


</section>
