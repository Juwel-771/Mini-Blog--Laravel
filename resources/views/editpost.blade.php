<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    <div class="w-full max-w-xs">
        <h1 class=" bg-blue-900 mt-4 p-2">Edit Your Post</h1>
        <form class="bg-gray-800 shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST">
            @csrf
            @method('PUT')
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
              Title
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" name="title" type="text" placeholder="Title" value="{{$posts->title}}">
          </div>
          <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2">
             Post
            </label>
            <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="body" name="body" type="text" placeholder="Your Post" value="{{$posts->body}}">
          </div>
          <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" value="Post">
             Update
            </button>
          </div>
        </form>
          @if (session()->has('status'))
              <div class="mt-5 shadow bg-purple-500 text-black font-bold py-4 px-4 rounded">
                {{session('status')}}
              </div>
          @endif
        <p class="text-center text-gray-500 text-xs">
          &copy;2020 AeyBeri Tech. All rights reserved.
        </p>
      </div>
      
</x-app-layout>
