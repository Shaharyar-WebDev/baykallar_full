@extends('components.layouts.auth-layout')

@section('main')

   <div class="glass-card w-full max-w-md rounded-xl overflow-hidden">
        <div class="p-8">
            <!-- Header with Email Icon -->
            <div class="flex flex-col items-center mb-8">
                <div class="bg-blue-50 border border-blue-100 w-16 h-16 rounded-full flex items-center justify-center mb-4">
                    <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h1 class="text-2xl font-bold text-slate-800">Verify Your Email</h1>
                <p class="text-slate-500 mt-1 text-center">Check your inbox to complete registration</p>
            </div>

            <!-- Verification Content -->
            <div class="space-y-5">
                <div class="text-center">
                    <p class="text-slate-600 mb-4">
                        We've sent a confirmation email to <span class="font-medium text-slate-800">user@company.com</span>.
                        Please check your inbox and click the verification link to activate your account.
                    </p>
                    
                    <div class="bg-blue-50 border border-blue-100 rounded-lg py-3 px-4 mb-6">
                        <p class="text-sm text-blue-700 flex items-center justify-center">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                            </svg>
                            Didn't receive the email? Check your spam folder.
                        </p>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="space-y-3">
                    <button 
                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-lg border border-transparent font-semibold bg-slate-800 text-white hover:bg-slate-900 focus:outline-none focus:ring-2 focus:ring-slate-800 focus:ring-offset-2 transition-all text-sm"
                    >
                        Resend Verification Email
                    </button>
                    
                </div>
            </div>

            <!-- Back to Login -->
            <div class="mt-8 pt-5 border-t border-slate-200">
                <div class="text-center text-sm text-slate-600">
                    Return to 
                    <a href="#" class="font-medium text-blue-600 hover:text-blue-800 hover:underline">Login page</a>
                </div>
            </div>
        </div>

        <!-- Footer -->
          <div class="py-4 px-8 bg-slate-50 border-t border-slate-200">
            <p class="text-xs text-slate-500 text-center">© {{Carbon\Carbon::now()->format('Y')}} {{ config('app.name') }}. All rights
                reserved.</p>
        </div>
    </div>

@endsection

