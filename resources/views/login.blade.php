@extends('components.template')
@section('title', 'login')
@section('content')
    @include('components.nav')
    <div class="min-h-screen bg-gradient-to-br from-indigo-900 to-green-900 flex items-center justify-center">
        <div class="bg-gray-800 rounded-lg shadow-lg p-8 w-full max-w-md">
            <div class="text-center">
                <span class="text-sm text-gray-300">Welcome to Cash Note</span>
                <h1 class="text-2xl font-bold text-white">Login to your account</h1>
            </div>

            <div class="my-3">
                <label class="block text-md mb-2 text-gray-300">Email</label>
                <input
                    class="px-4 w-full border-2 border-gray-600 bg-gray-700 text-white py-2 rounded-md text-sm outline-none"
                    type="email" placeholder="email">
            </div>

            <div class="mt-5">
                <label class="block text-md mb-2 text-gray-300">Password</label>
                <input
                    class="px-4 w-full border-2 border-gray-600 bg-gray-700 text-white py-2 rounded-md text-sm outline-none"
                    type="password" placeholder="password">
            </div>

            <div class="flex justify-between items-center mt-3">
                <div class="flex items-center">
                    <input class="cursor-pointer" type="radio">
                    <span class="text-sm text-gray-300 ml-2">Remember Me</span>
                </div>
                <span class="text-sm text-blue-400 hover:underline cursor-pointer">Forgot password?</span>
            </div>

            <div class="mt-6">
                <a href="/homepage">
                    <button type="button" onclick="function3()"
                        class="mt-4 mb-3 w-full bg-green-500 hover:bg-green-400 text-white py-2 rounded-md transition duration-100">
                        Login
                    </button>
                    <div
                        class="flex space-x-2 justify-center items-center bg-gray-700 hover:bg-gray-600 text-white py-2 rounded-md transition duration-100">
                        <img class="h-5 cursor-pointer"
                            src="https://cdn1.iconfinder.com/data/icons/google-s-logo/150/Google_Icons-09-512.png"
                            alt="">
                        <button type="button">Or login in with Google</button>
                    </div>
                </a>

            </div>

            <p class="mt-8 text-center text-gray-300">Don’t have an account? <a href="/register">
                    <span class="hover:underline cursor-pointer text-sm text-blue-400">sign in here</span>
                </a></p>


        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script language="JavaScript">
        function function3() {
            swal("Success!", "Anda Berhasil Login", "success");
        }
    </script>
@endsection
