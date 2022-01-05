<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-800">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Your All Post Here
                    <br>
                    @if (session()->has('status'))
                    <div class="mt-5 shadow bg-purple-500 text-black font-bold py-4 px-4 rounded">
                      {{session('status')}}
                    </div>
                @endif
                    <table class="table table-dark table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Title</th>
                            <th scope="col">Body</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)             
                          <tr>
                            <th>{{$post->user->name}}</th>
                            <td>{{$post->title}}</td>
                            <td>{{$post->body}}</td>
                            <td>
                                <a href="{{url('/post/edit',$post->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="{{url('/post/destroy',$post->id)}}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
