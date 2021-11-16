<x-guest-layout>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

<section class="flex flex-col md:flex-row h-screen items-center">

  <div class="bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
    <img src="https://images.unsplash.com/photo-1528164344705-47542687000d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1784&q=80" alt="" class="w-full h-full object-cover">
  </div>

  <div id="loginformbg" class=" w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center">

    <div class="w-3/4 h-100">

    @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
      <h1 class="text-white text-5xl md:text-5xl font-bold leading-tight mt-12">Register</h1>
  
      <form class="mt-6" method="POST"  action="{{ route('register') }}">
      @csrf
        <div>
          <label for="name" value="{{ __('Name') }}"  class="block text-white">Name</label>
          <input id="name" type="text" name="name" :value="old('name')" placeholder="Enter Your Name" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus autocomplete required>
        </div>

        <div class="mt-4">
          <label for="email" class="block text-white">Email</label>
          <input id="email" type="email" name="email" :value="old('email')" placeholder="Enter Email" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                focus:bg-white focus:outline-none" required>
        </div>

        <div class="mt-4">
          <label for="password" class="block text-white">Password</label>
          <input id="password" type="password" name="password" autocomplete="new-password" placeholder="Enter Password" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                focus:bg-white focus:outline-none" required>
        </div>

        <div class="mt-4">
          <label for="password_confirmation" class="block text-white">Confirm Password</label>
          <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                focus:bg-white focus:outline-none" required>
        </div>

        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
        @endif

        <x-jet-button style="background-color:#23a2f7; text-align: center;" class="transform hover:-translate-y-1 hover:scale-110 duration-500 ease-in-out w-full text-white rounded-lg px-4 py-3 mt-6">
                    Register
        </x-jet-button>
        <x-jet-validation-errors class="mt-5 mb-4" />
      </form>
      @if (JoelButcher\Socialstream\Socialstream::show())
            <x-socialstream-providers />
      @endif
      <hr class="my-6 border-gray-300 w-full">

      <p class="mt-8 text-white">Already Registered? <a href="{{ route('login') }}" class="text-blue-500 hover:text-blue-700 font-semibold">Login Here.</a></p>


    </div>
  </div>

</section>
</x-guest-layout>

<style>
    #loginformbg{
        background-image:url('https://cdn.discordapp.com/attachments/894663951357468693/908541373299449906/unknown.png');
        background-size: cover;
        

    }
</style>
