@props(['question'])

<div class="faq-item border border-gray-200 rounded-lg" x-data="{ open: false }">
    <button @click="open = !open" class="faq-question w-full flex justify-between items-center text-left p-6 font-semibold text-gray-800 focus:outline-none">
        <span>{{ $question }}</span>
        <span class="faq-icon transform transition-transform duration-300" :class="{ 'rotate-45': open }">
             <svg class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
            </svg>
        </span>
    </button>
    <div x-show="open" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="faq-answer px-6 pb-6 text-gray-600" x-cloak>
        <div class="pt-4 border-t border-gray-200">
            <p style="white-space: pre-line;">{!! $slot !!}</p>
        </div>
    </div>
</div>
