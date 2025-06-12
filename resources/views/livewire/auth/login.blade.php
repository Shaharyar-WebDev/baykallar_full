@section('title', 'Login')

@push('styles')
 
@endpush
<div>
    <section id="login" class="bg-white dark:bg-neutral-900 h-[100vh] w-full flex justify-center items-center grid-pattern bg-[position:0_calc(--spacing(4)*-1)]">
        <form  wire:submit.prevent="authenticate" class="w-full bg-white px-4 py-8 rounded-sm md:w-96 border border-gray-300">
            <div class="text-center mb-4">
                <h1 class="text-center text-2xl mb-2 font-bold">{{__('Log In')}}</h1>
            </div>
            <div class="form-control mb-4">
                <label for="email" class="flex flex-col gap-2">
                    <span>
                       {{__('form-labels.email')}}
                    </span>
                    <input type="email" id="email" class="w-full border-gray-300 dark px-3 py-2 rounded border" placeholder="Email address" wire:model="email">
                    @error('email')
                   <span class="text-red-500 flex items-center gap-2">
                          <svg xmlns="http://www.w3.org/2000/svg" class="size-4"  fill="currentColor" viewBox="0 0 256 256"><path d="M236.8,188.09,149.35,36.22h0a24.76,24.76,0,0,0-42.7,0L19.2,188.09a23.51,23.51,0,0,0,0,23.72A24.35,24.35,0,0,0,40.55,224h174.9a24.35,24.35,0,0,0,21.33-12.19A23.51,23.51,0,0,0,236.8,188.09ZM222.93,203.8a8.5,8.5,0,0,1-7.48,4.2H40.55a8.5,8.5,0,0,1-7.48-4.2,7.59,7.59,0,0,1,0-7.72L120.52,44.21a8.75,8.75,0,0,1,15,0l87.45,151.87A7.59,7.59,0,0,1,222.93,203.8ZM120,144V104a8,8,0,0,1,16,0v40a8,8,0,0,1-16,0Zm20,36a12,12,0,1,1-12-12A12,12,0,0,1,140,180Z"></path></svg>
                          {{$message}}
                    </span>
                    @enderror
                </label>
            </div>
              <div class="form-control mb-4">
                <label for="password" class="flex flex-col gap-2">
                    <span>
                        {{__('form-labels.password')}}
                    </span>
                    <input type="password" id="password" class="w-full border-gray-300 dark px-3 py-2 rounded border" wire:model="password"  placeholder="Password">
                     @error('password')
                 <span class="text-red-500 flex items-center gap-2">
                          <svg xmlns="http://www.w3.org/2000/svg" class="size-4"  fill="currentColor" viewBox="0 0 256 256"><path d="M236.8,188.09,149.35,36.22h0a24.76,24.76,0,0,0-42.7,0L19.2,188.09a23.51,23.51,0,0,0,0,23.72A24.35,24.35,0,0,0,40.55,224h174.9a24.35,24.35,0,0,0,21.33-12.19A23.51,23.51,0,0,0,236.8,188.09ZM222.93,203.8a8.5,8.5,0,0,1-7.48,4.2H40.55a8.5,8.5,0,0,1-7.48-4.2,7.59,7.59,0,0,1,0-7.72L120.52,44.21a8.75,8.75,0,0,1,15,0l87.45,151.87A7.59,7.59,0,0,1,222.93,203.8ZM120,144V104a8,8,0,0,1,16,0v40a8,8,0,0,1-16,0Zm20,36a12,12,0,1,1-12-12A12,12,0,0,1,140,180Z"></path></svg>
                          {{$message}}
                    </span>
                    @enderror
                    
                  
                </label>
            </div>
             <div class="form-control mb-4">
                <label for="remember" class="flex flex-row gap-2 items-center">
                    <input type="checkbox" id="remember" wire:model="remember" class="">
                    <span>
                        {{__('form-labels.remember_me')}}
                    </span>
                    @error('remember')
                    <span class="text-red-500">
                        {{$message}}
                    </span>
                    @enderror
                </label>
            </div>
            <x-page-components.button class="w-full" type="submit">
                {{__('form-labels.login')}}
            </x-page-components.button>
        </form>
    </section>
</div>
