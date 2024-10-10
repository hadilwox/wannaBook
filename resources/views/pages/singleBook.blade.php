@extends('layout.master')

@section('css')
    href="{{ asset('src/css/singleBook.css') }}"
@endsection

@section('title')
    Book
@endsection

@section('content')
    <div class="app">
        <div class="allMessage mt-2 px-2">
            @error('username')
                @include('layout.message.errorMessage')
            @enderror
            @error('message')
                @include('layout.message.errorMessage')
            @enderror
            @include('layout.message.successMessage')
        </div>
        <section class="main container p-10">
            <div class="flex justify-center mb-6">
                <h1 class="text-gray-100 font-extrabold text-2xl ">{{ $book->name }}</h1>
            </div>
            <div class="flex justify-center  mb-6 items-center ">
                <img src="{{ $book->image }}" class=" w-64" alt="">
            </div>
            <div class="mb-6 flex justify-center">
                <div class="likeShareComment flex justify-between w-64  items-center ">
                    <div id="commentBtn" class=" hover:bg-teal-500 p-1 rounded-md transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-8 text-gray-100">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                        </svg>

                    </div>
                    <div class="share hover:bg-teal-500 p-1 rounded-md transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-8 text-gray-100">
                            <path fill-rule="evenodd"
                                d="M15.75 4.5a3 3 0 1 1 .825 2.066l-8.421 4.679a3.002 3.002 0 0 1 0 1.51l8.421 4.679a3 3 0 1 1-.729 1.31l-8.421-4.678a3 3 0 1 1 0-4.132l8.421-4.679a3 3 0 0 1-.096-.755Z"
                                clip-rule="evenodd" />
                        </svg>

                    </div>
                    <div class="like hover:bg-teal-500 p-1 rounded-md transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-8 text-gray-100 ">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                        </svg>

                    </div>
                </div>
            </div>

            <div class="desciption mb-10">
                <p class="text-gray-100 font-medium text-sm">نویسنده : <span class="font-extrabold text-base">تالکین</span>
                </p>
                <p class="text-gray-100 font-normal text-sm" style="line-height:1.5rem">{{ $book->description }}</p>

            </div>


        </section>


        <!-- comment section start -->

        <section id="commentModal" class="comment hidden translate-y-[30rem]" style="transition: all 500ms ease;">

            <div id="authentication-modal" tabindex="-1" aria-hidden="true"
                class="flex overflow-y-auto fixed inset-0 z-50 justify-center bottom-16 items-end">
                <div class="fixed container w-full ">
                    <!-- Modal content -->
                    <div class="relative bg-zinc-950 rounded-lg shadow max-h-[80vh] flex flex-col justify-between">
                        <!-- Modal header -->

                        <div class="flex flex-col items-center justify-center border-b pb-4 rounded-t border-gray-400">
                            <button type="button" id="closeCommentModal"
                                class="end-2.5 absolute left-3 text-gray-400 bg-transparent hover:bg-green-700 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:text-white"
                                data-modal-hide="authentication-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                                stroke="currentColor" class="size-8 font-black text-gray-100">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                            </svg>

                            <h3 class="text-sm text-center font-semibold dark:text-white">
                                کامنت
                            </h3>

                        </div>

                        <!-- items search -->
                        <div class="p-4 md:p-5 border-t border-gray-400 overflow-y-auto max-h-[60vh]">
                            <!-- Comments List -->
                            @foreach ($comments as $comment)
                                <div class="px-4 mb-5">
                                    <h5 class="text-gray-100 font-bold text-base">{{ $comment->username }}</h5>
                                    <p class="text-gray-100 font-normal text-sm">{{ $comment->message }}</p>
                                </div>
                            @endforeach


                            <!-- Add more comments here -->
                        </div>

                        <!-- Modal footer (input for adding comment) -->
                        <div class="p-4 md:p-5 bg-zinc-950 border-t border-gray-400 sticky bottom-0 w-full">
                            <form action="{{ route('comment.add', $book->id) }}" method="POST">
                                @csrf
                                @error('username')
                                    @include('layout.message.errorMessage')
                                @enderror
                                <input type="text" id="username" name="username"
                                    class="bg-gray-50 max-w-56 border mb-4 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-teal-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                                    placeholder="اسمتو بنویس" />
                                <div class="relative flex items-center justify-center">
                                    <button type="submit"
                                        class="text-white absolute start-2.5 bottom-2.5 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                                        </svg>
                                    </button>

                                    <input type="text" id="commnetText" name="message"
                                        class="block w-full p-4 ps-20 text-sm text-gray-900 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500 bg-teal-950 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                                        placeholder="کامنت بگذارید" />
                                </div>
                                @error('message')
                                    @include('layout.message.errorMessage')
                                @enderror
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection

@section('js')
    <script src="{{ asset('src/js/singleBook.js') }}"></script>
@endsection
