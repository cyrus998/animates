<x-guest-layout>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

<section class="flex flex-col md:flex-row h-screen items-center">

  <div class="bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
    <img src="https://images.unsplash.com/photo-1510402375-50483dd636ee?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1864&q=80" alt="" class="w-full h-full object-cover">
  </div>

  <div id="loginformbg" class=" w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center">

    <div class="w-3/4 h-100">

    @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
      <h1 class="text-5xl md:text-5xl font-bold leading-tight mt-12">Welcome to AniMates Merch Store!</h1>
  
      <form class="mt-6" method="POST"  action="{{ route('login') }}">
      @csrf
        <div>
          <label for="email" class="block text-gray-700">{{ __('E-Mail Address') }}</label>
          <input type="email" name="email" :value="old('email')" id="email" placeholder="Enter Email Address" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus autocomplete required>
        </div>

        <div class="mt-4">
          <label for="password" class="block text-gray-700">{{ __('Password') }}</label>
          <input type="password" name="password" id="password" placeholder="Enter Password" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                focus:bg-white focus:outline-none" required>
        </div>

        <div class="text-right mt-2">
        @if (Route::has('password.request'))
          <a href="{{ route('password.request') }}" class="text-sm font-semibold text-gray-700 hover:text-blue-700 focus:text-blue-700">Forgot Password?</a>
        @endif
        </div>

        <x-jet-button style="background-color:#23a2f7; text-align: center;" class="transform hover:-translate-y-1 hover:scale-110 duration-500 ease-in-out w-full text-white rounded-lg px-4 py-3 mt-6">
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Login
        </x-jet-button>
 
                @error('email')
                      <span style="color:red;"  class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror

                    @error('password')
                        <span style="color:red;" class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
      </form>
      <a href="http://127.0.0.1:8000/oauth/google">
        <div class="transform hover:-translate-y-1 hover:scale-110 duration-500 ease-in-out mt-5 flex  space-x-2 justify-center items-end bg-gray-700 hover:bg-gray-600 text-white py-2 rounded-lg">
      <img alt="svgImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4Igp3aWR0aD0iMjUiIGhlaWdodD0iMjUiCnZpZXdCb3g9IjAgMCA0OCA0OCIKc3R5bGU9IiBmaWxsOiMwMDAwMDA7Ij48cGF0aCBmaWxsPSIjZmJjMDJkIiBkPSJNNDMuNjExLDIwLjA4M0g0MlYyMEgyNHY4aDExLjMwM2MtMS42NDksNC42NTctNi4wOCw4LTExLjMwMyw4Yy02LjYyNywwLTEyLTUuMzczLTEyLTEyCXM1LjM3My0xMiwxMi0xMmMzLjA1OSwwLDUuODQyLDEuMTU0LDcuOTYxLDMuMDM5bDUuNjU3LTUuNjU3QzM0LjA0Niw2LjA1MywyOS4yNjgsNCwyNCw0QzEyLjk1NSw0LDQsMTIuOTU1LDQsMjRzOC45NTUsMjAsMjAsMjAJczIwLTguOTU1LDIwLTIwQzQ0LDIyLjY1OSw0My44NjIsMjEuMzUsNDMuNjExLDIwLjA4M3oiPjwvcGF0aD48cGF0aCBmaWxsPSIjZTUzOTM1IiBkPSJNNi4zMDYsMTQuNjkxbDYuNTcxLDQuODE5QzE0LjY1NSwxNS4xMDgsMTguOTYxLDEyLDI0LDEyYzMuMDU5LDAsNS44NDIsMS4xNTQsNy45NjEsMy4wMzkJbDUuNjU3LTUuNjU3QzM0LjA0Niw2LjA1MywyOS4yNjgsNCwyNCw0QzE2LjMxOCw0LDkuNjU2LDguMzM3LDYuMzA2LDE0LjY5MXoiPjwvcGF0aD48cGF0aCBmaWxsPSIjNGNhZjUwIiBkPSJNMjQsNDRjNS4xNjYsMCw5Ljg2LTEuOTc3LDEzLjQwOS01LjE5MmwtNi4xOS01LjIzOEMyOS4yMTEsMzUuMDkxLDI2LjcxNSwzNiwyNCwzNgljLTUuMjAyLDAtOS42MTktMy4zMTctMTEuMjgzLTcuOTQ2bC02LjUyMiw1LjAyNUM5LjUwNSwzOS41NTYsMTYuMjI3LDQ0LDI0LDQ0eiI+PC9wYXRoPjxwYXRoIGZpbGw9IiMxNTY1YzAiIGQ9Ik00My42MTEsMjAuMDgzTDQzLjU5NSwyMEw0MiwyMEgyNHY4aDExLjMwM2MtMC43OTIsMi4yMzctMi4yMzEsNC4xNjYtNC4wODcsNS41NzEJYzAuMDAxLTAuMDAxLDAuMDAyLTAuMDAxLDAuMDAzLTAuMDAybDYuMTksNS4yMzhDMzYuOTcxLDM5LjIwNSw0NCwzNCw0NCwyNEM0NCwyMi42NTksNDMuODYyLDIxLjM1LDQzLjYxMSwyMC4wODN6Ij48L3BhdGg+PC9zdmc+"/>
                        <button ><a href="http://127.0.0.1:8000/oauth/google">or Sign In with Google.</button>
        </div></a>
      <hr class="my-6 border-gray-300 w-full">

      <p class="mt-8">Not yet registered? <a href="{{ route('register') }}" class="text-blue-500 hover:text-blue-700 font-semibold">Create an
              account</a></p>

    </div>
  </div>

</section>
</x-guest-layout>

<style>
    #loginformbg{
        background-image:url('https://cdn.discordapp.com/attachments/894663951357468693/908532831255396352/unknown.png');
        background-size: cover;
        

    }
</style>
