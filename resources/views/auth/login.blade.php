@extends('components.layouts.auth-layout')

@section('main')

    <div class="glass-card w-full max-w-md rounded-xl overflow-hidden">
        <div class="p-8">
            <!-- Header with Logo -->
            <div class="flex flex-col items-center mb-8">
                <img loading="lazy" src="{{ asset('/storage/logo/logo.webp') }}"
                    class="bg-transparent w-44 text-white rounded-lg flex items-center justify-center mb-4">
                <h1 class="text-2xl font-bold text-slate-800">{{ config('app.name') }}</h1>
                <p class="text-slate-500 mt-1">Welcome Back!</p>
            </div>

            <!-- Login Form -->
            <form class="space-y-5">

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-slate-700 mb-1">Email</label>
                    <div class="relative">
                        <input type="email" id="email"
                            class="form-input w-full px-4 py-3 text-slate-700 border border-slate-300 rounded-lg focus:ring-0 focus:outline-none transition-colors duration-200"
                            placeholder="john@company.com">
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                            <i class="far fa-envelope text-slate-400"></i>
                        </div>
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-slate-700 mb-1">Password</label>
                    <div class="relative">
                        <input type="password" id="password"
                            class="form-input w-full px-4 py-3 text-slate-700 border border-slate-300 rounded-lg focus:ring-0 focus:outline-none transition-colors duration-200"
                            placeholder="••••••••">
                        <button type="button"
                            class="absolute inset-y-0 right-0 flex items-center pr-3 text-slate-500 hover:text-slate-700"
                            data-hs-toggle-password='{
                                    "target": "#password"
                                }'>
                            <i class="far fa-eye-slash text-slate-400"></i>
                        </button>
                    </div>
                </div>

                <!-- Register Link -->
                <div class="mt-6 text-center text-sm text-slate-600 flex items-center justify-between">
                    <label for="remember" class="flex items-center justify-center gap-2">
                        <input type="checkbox" name="remember_me" id="remember">
                        <span class="font-medium">remember me</span>
                    </label>
                    <a href="#" class="font-medium text-blue-600 hover:text-blue-800 hover:underline">Forgot Password?</a>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-lg border border-transparent font-semibold bg-slate-800 text-white hover:bg-slate-900 focus:outline-none focus:ring-2 focus:ring-slate-800 focus:ring-offset-2 transition-all text-sm">
                    Login
                </button>
            </form>

            <!-- Register Link -->
            <div class="mt-6 text-center text-sm text-slate-600">
                Don't have an account ?
                <a href="#" class="font-medium text-blue-600 hover:text-blue-800 hover:underline">Create One</a>
            </div>
        </div>

        <!-- Footer -->
      <div class="py-4 px-8 bg-slate-50 border-t border-slate-200">
            <p class="text-xs text-slate-500 text-center">© {{Carbon\Carbon::now()->format('Y')}} {{ config('app.name') }}. All rights
                reserved.</p>
        </div>
    </div>

@endsection