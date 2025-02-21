<div class="input_label flex">

    <div class="input_label_container flex">

        <label class="label bold eaves" for="password">{{__('texts.password')}}

            <span class="red">*</span>

        </label>

        <input class="input eaves" type="{{$type}}" name="password" id="password" required>

        @if(!$visible)

            <svg wire:click="toggleVisibility" class="input_label_container_eye" width="16" height="16" viewBox="0 0 16 16"
                 fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0.666656 8.00033C0.666656 8.00033 3.33332 2.66699 7.99999 2.66699C12.6667 2.66699 15.3333 8.00033 15.3333 8.00033C15.3333 8.00033 12.6667 13.3337 7.99999 13.3337C3.33332 13.3337 0.666656 8.00033 0.666656 8.00033Z"
                    stroke="#1E1E1E" stroke-linecap="round" stroke-linejoin="round"/>
                <path
                    d="M7.99999 10.0003C9.10456 10.0003 9.99999 9.10489 9.99999 8.00033C9.99999 6.89576 9.10456 6.00033 7.99999 6.00033C6.89542 6.00033 5.99999 6.89576 5.99999 8.00033C5.99999 9.10489 6.89542 10.0003 7.99999 10.0003Z"
                    stroke="#1E1E1E" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

        @else

            <svg wire:click="toggleVisibility" class="input_label_container_eye" width="16" height="16" viewBox="0 0 16 16"
                 fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0.666656 8.00033C0.666656 8.00033 3.33332 2.66699 7.99999 2.66699C12.6667 2.66699 15.3333 8.00033 15.3333 8.00033C15.3333 8.00033 12.6667 13.3337 7.99999 13.3337C3.33332 13.3337 0.666656 8.00033 0.666656 8.00033Z"
                    stroke="#1E1E1E" stroke-linecap="round" stroke-linejoin="round"/>
                <path
                    d="M7.99999 10.0003C9.10456 10.0003 9.99999 9.10489 9.99999 8.00033C9.99999 6.89576 9.10456 6.00033 7.99999 6.00033C6.89542 6.00033 5.99999 6.89576 5.99999 8.00033C5.99999 9.10489 6.89542 10.0003 7.99999 10.0003Z"
                    stroke="#1E1E1E" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M2 2L14 14" stroke="#1E1E1E" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

        @endif

    </div>

    @error('password')
    <x-input-error :messages="$errors->get('password')"/>
    @enderror

</div>
