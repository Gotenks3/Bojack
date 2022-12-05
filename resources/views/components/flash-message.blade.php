@props(['status' => 'info'])

@php
if(session('status') === 'info'){$bgColor = 'bg-blue-600';}
if(session('status') === 'alert'){$bgColor = 'bg-red-500';}
@endphp

@if(session('message'))
  <div class="{{ $bgColor }}  mx-auto  text-white">
    {{ session('message' )}}
  </div>
@endif

@if (session('flash_message'))
    <div class="flash_message bg-success text-center py-3 my-0">
        {{ session('flash_message') }}
    </div>
@endif

