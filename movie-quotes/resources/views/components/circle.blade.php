@props(['link'])
<div 
    {{$attributes->merge(['class' => 'rounded-full h-10 w-10 text-white border border-white flex items-center justify-center circle'])}}>
    <a class="cursor-pointer" 
        href="{{ $link }}">
       {{$slot}} 
    </a>
    
</div>