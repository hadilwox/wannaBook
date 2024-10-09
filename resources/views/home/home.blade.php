@extends('layout.master')



@section('title')
    Home
@endsection

@section('content')
    <div class="app">
        <div class="allMessage mt-2 px-2">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="p-2 mb-2 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                        role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif

            @include('layout.message.successMessage')

        </div>


        <header class=" my-3 mx-5">
            <h1 class="text-white font-bold text-xl text-center">Book Library 8</h1>
            <div class="bestAuthor mt-4">
                <h2 class="text-gray-100 font-semibold text-lg mb-2">
                    برترین نویسنده ها
                </h2>

                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        @foreach ($authors as $author)
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <img class="w-20 h-20" src="{{ asset('uploads/images/user1.png') }}" alt="" />
                                <p class="text-gray-100 font-light text-xs text-center">
                                    {{ $author->name }}
                                </p>
                            </div>
                        @endforeach
                        <!-- Slides -->
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>

                    <!-- If we need scrollbar -->
                    <!-- <div class="swiper-scrollbar"></div> -->
                </div>
            </div>
        </header>
        <section class="mt-1 mb-3 mx-5 newBooks">
            <h2 class="text-gray-100 font-semibold text-lg mb-2">جدیدترین کتاب ها</h2>
            <div class="container flex">
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper gap-2">
                        @foreach ($booksNew as $book)
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <img class="w-24 h-32" src="{{ asset('uploads/images/Hobbit.jpg') }}"
                                    alt="{{ $book->name }}" />
                                <p class="text-gray-100 font-light text-xs text-center">
                                    {{ $book->name }}
                                </p>
                            </div>
                            <!-- Slides -->
                        @endforeach
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>

                    <!-- If we need scrollbar -->
                    <!-- <div class="swiper-scrollbar"></div> -->
                </div>
            </div>
        </section>
        <section class="my-10 mt-5 mx-5  mb-12 bestBooks">
            <h2 class="text-gray-100 font-semibold text-lg mb-2">بهترین کتاب ها</h2>
            <div class="container flex">
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper gap-2">

                        @foreach ($books as $book)
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <img class="w-24 h-32" src="{{ asset('uploads/images/Hobbit.jpg') }}"
                                    alt="{{ $book->name }}" />
                                <p class="text-gray-100 font-light text-xs text-center">
                                    {{ $book->name }}
                                </p>
                            </div>
                            <!-- Slides -->
                        @endforeach

                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>

                    <!-- If we need scrollbar -->
                    <!-- <div class="swiper-scrollbar"></div> -->
                </div>
            </div>
        </section>
    </div>
@endsection
