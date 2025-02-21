@props(['label', 'id', 'placeholder', 'required', 'rows'])

<div class="input_label flex">

    <div class="input_label_container flex">

        <label class="label bold eaves" for="{{$id}}">{{$label}}
            @if($required)
                <span class="red">*</span>
            @endif
        </label>

        <textarea class="input eaves" id="{{$id}}" name="{{$id}}" placeholder="{{$placeholder}}" rows="{{$rows}}"></textarea>

    </div>

    @error($id)
    <x-input-error :messages="$errors->get($id)"/>
    @enderror

</div>
