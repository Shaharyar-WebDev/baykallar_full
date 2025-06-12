<!-- Mobile Menu Button -->
<button class="md:hidden ml-4 cursor-pointer">


<label class="flex flex-col gap-2 w-8">
  <input id="menu-button" class="peer hidden" type="checkbox" />
  <div
    class="rounded-2xl h-[2px] w-1/2 bg-black duration-500 peer-checked:rotate-[225deg] origin-right peer-checked:-translate-x-[12px] peer-checked:-translate-y-[1px]"
  ></div>
  <div
    class="rounded-2xl h-[2px] w-full bg-black duration-500 peer-checked:-rotate-45"
  ></div>
  <div
    class="rounded-2xl h-[2px] w-1/2 bg-black duration-500 place-self-end peer-checked:rotate-[225deg] origin-left peer-checked:translate-x-[12px] peer-checked:translate-y-[1px]"
  ></div>
</label>

{{-- <label>
  <div
    class="w-9 h-10 cursor-pointer flex flex-col items-center justify-center"
  >
    <input id="menu-button" class="hidden peer" type="checkbox" />
    <div
      class="w-[50%] h-[2px] bg-black rounded-sm transition-all duration-300 origin-left translate-y-[0.45rem] peer-checked:rotate-[-45deg]"
    ></div>
    <div
      class="w-[50%] h-[2px] bg-black rounded-md transition-all duration-300 origin-center peer-checked:hidden"
    ></div>
    <div
      class="w-[50%] h-[2px] bg-black rounded-md transition-all duration-300 origin-left -translate-y-[0.45rem] peer-checked:rotate-[45deg]"
    ></div>
  </div>
</label> --}}


</button>