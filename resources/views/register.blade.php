@extends('components.template')
@section('title', 'login')
@section('content')
    @include('components.nav')
    <div class="min-h-screen bg-gradient-to-br from-indigo-900 to-green-900 flex items-center justify-center">
        <div class="bg-gray-800 rounded-lg shadow-lg p-8 w-full max-w-md mt-10 mb-10">
            <div class="text-center">
                <span class="text-sm text-gray-300">Welcome to Cash Note</span>
                <h1 class="text-2xl font-bold text-white">Register new account</h1>
            </div>

            <div class="my-3">
                <label class="block text-md mb-2 text-gray-300">Name</label>
                <input
                    class="px-4 w-full border-2 border-gray-600 bg-gray-700 text-white py-2 rounded-md text-sm outline-none"
                    type="name" placeholder="Your Name">
            </div>

            <div class="mt-5">
                <label class="block text-md mb-2 text-gray-300">New Password</label>
                <input
                    class="px-4 w-full border-2 border-gray-600 bg-gray-700 text-white py-2 rounded-md text-sm outline-none"
                    type="password" placeholder="password">
            </div>

            <div class="mt-5">
                <label class="block text-md mb-2 text-gray-300">Re-type Password</label>
                <input
                    class="px-4 w-full border-2 border-gray-600 bg-gray-700 text-white py-2 rounded-md text-sm outline-none"
                    type="password" placeholder="password">
            </div>

            <div class="mt-5">
                <label class="block text-md mb-2 text-gray-300">Email</label>
                <input
                    class="px-4 w-full border-2 border-gray-600 bg-gray-700 text-white py-2 rounded-md text-sm outline-none"
                    type="email" placeholder="Your Email">
            </div>


            <div class="flex justify-between items-center mt-3">
                <div class="flex items-center">
                    <input class="cursor-pointer" type="radio">
                    <span class="text-sm text-gray-300 ml-2"> Accept Terms and Conditions</span>
                </div>

            </div>

            <div class="mt-6">
                <a href="/">
                    <button type="button" onclick="function3()"
                        class="mt-4 mb-3 w-full bg-green-500 hover:bg-green-400 text-white py-2 rounded-md transition duration-100">
                        Register
                    </button>
                </a>

            </div>
            <a href="/">
                <p class="mt-4 text-center text-blue-400 hover:underline cursor-pointer">Login</p>
            </a>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script language="JavaScript">
        function function3() {
            swal("Success!", "Your data have been saved. Thank you!", "success");
        }
    </script>
@endsection
