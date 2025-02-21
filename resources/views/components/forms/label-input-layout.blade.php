@props(['id'])

<div class="input_label flex">

    <div class="input_label_container flex">

        {{$slot}}

    </div>

    @error($id)
    <x-input-error :messages="$errors->get($id)"/>
    @enderror

</div>
