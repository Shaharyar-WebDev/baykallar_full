<!-- Header with Logo or Slot -->
<div class="flex flex-col items-center mb-8 text-center">
    @if(trim($slot))
        {{ $slot }}
    @else
        <img 
            src="{{ asset('storage/logo/logo.webp') }}" 
            alt="{{ config('app.name') }} Logo"
            class="w-44 mb-4" 
            loading="lazy"
        >
        <h1 class="text-2xl font-bold text-slate-800">{{ config('app.name') }}</h1>
        <p class="text-slate-500 mt-1">{{__('form-components.welcome')}}</p>
    @endif
</div>
<x-auth.menu/>