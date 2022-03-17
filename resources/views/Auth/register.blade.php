@extends('layout.app')

@section('content')

<div class="flex justify-center">
    <div class="w-5/12  p-6 rounded-lg">
        <h1 class="text-gray-700 text-lg font-bold mb-2 flex justify-center">Register</h1>
        <form action="{{route('register')}}" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="Name">
                Name
              </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Name">
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Username
              </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="Email">
                Email
              </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="email" placeholder="Email">
            </div>
            <div class="mb-6">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Password
              </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Password">
              {{-- <p class="text-red-500 text-xs italic">Please choose a password.</p> --}}
            </div>
            <div class="mb-6">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="repeat password">
                Repeat Password
              </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="repeat password" type="password" placeholder="Pepeat Password">
              {{-- <p class="text-red-500 text-xs italic">Please choose a password.</p> --}}
            </div>
            <div class="flex items-center justify-between">
              <button class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Register
              </button>
              
            </div>
          </form>
          <p class="text-center text-gray-500 text-xs">
            &copy;2022 Social. All rights reserved.
          </p>
    </div>

    
</div>

@endsection