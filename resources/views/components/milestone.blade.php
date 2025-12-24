
@props(['year', 'image', 'top', 'left', 'transform'])

<div class="milestone" style="top: {{ $top }}; left: {{ $left }}; transform: {{ $transform }};">
    <div class="milestone-content">
        <img src="{{ $image }}" alt="{{ $year }} Milestone" class="milestone-image">
        <div class="milestone-text-content">
            <h3 class="milestone-year">{{ $year }}</h3>
            <p class="milestone-text">{{ $slot }}</p>
        </div>
    </div>
</div>
