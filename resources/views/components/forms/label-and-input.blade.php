@props(['label', 'id', 'type', 'placeholder', 'required'])

<div class="input_label flex">

    <div class="input_label_container flex">

        <label class="label bold eaves" for="{{$id}}">{{$label}}
            @if($required)
                <span class="red">*</span>
            @endif
        </label>

        <input class="input eaves" type="{{$type}}" id="{{$id}}" name="{{$id}}" placeholder="{{$placeholder}}">

    </div>

    @error($id)
    <x-input-error :messages="$errors->get($id)"/>
    @enderror

</div>
