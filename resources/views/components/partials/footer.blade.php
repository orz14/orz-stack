<footer class="relative flex items-center justify-between w-full py-6">
    <span>
        &copy; {{ date('Y') }} <a href="/" class="font-bold hover:underline">{{ config('app.name', 'ORZ Stack') }}</a>    
    </span>
    <span class="text-right">
        {{ __('Created with 💜 by') }} <a href="https://orzproject.my.id" class="font-bold hover:underline" target="_blank">{{ __('ORZCODE') }}</a>
    </span>
</footer>
