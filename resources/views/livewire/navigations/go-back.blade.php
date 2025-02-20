<nav class="go_back_nav {{$class}}">

    @if($level == 'primary')
        <h2 class="hidden">Go back navigation</h2>
    @else
        <h3 class="hidden">Go back navigation</h3>
    @endif

    <a href="{{url()->previous()}}" title="{{__('texts.go_back')}}" class="go_back_link eaves flex link">
        <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M1.41133 5.33366L6.42933 1.17699L6 0.666992L0 5.68099L6 10.667L6.43 10.1577L1.41067 6.00033L16 6.00033V5.33366L1.41133 5.33366Z"
                  fill="black"/>
        </svg>

        {{__('texts.go_back')}}
    </a>

</nav>
