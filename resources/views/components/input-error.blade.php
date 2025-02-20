@props(['messages'])

@if ($messages)
    <ul>
        @foreach ((array) $messages as $message)
            <li class="red eaves text">{{ $message }}</li>
        @endforeach
    </ul>
@endif
