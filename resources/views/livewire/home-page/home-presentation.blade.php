<section class="home_presentation flex section">

    <div class="slider_container flex"
         x-data="{
            init() {
                setInterval(() => { @this.nextSlide() }, {{ $slideInterval }});
            }
        }">
        <div class="slider_container_images_container">
            @foreach($pictures as $index => $picture)
                <img src="{{ asset('assets/'.$picture['name']) }}"
                     alt="{{ $picture['alt'] }}"
                     class="slider_container_images_container_img {{ $index === $currentIndex ? 'active' : 'hidden' }}"
                     wire:key="picture-{{$index}}">
            @endforeach
        </div>

        <div class="slider_container_dots flex">
            @foreach($pictures as $index => $picture)
                <div class="dot {{ $index === $currentIndex ? 'active' : '' }}" wire:key="dot-{{$index}}"></div>
            @endforeach
        </div>
    </div>

    <div class="home_presentation_content flex">

        <div class="home_presentation_content_texts flex">

            <div class="home_presentation_content_texts_title flex">

                <h2 class="big_title eaves bold">KPerforM</h2>

                <h3 class="primary_title eaves bold">{{__('texts.tagline')}}</h3>

            </div>

            <p class="eaves text">{{__('texts.home_presentation')}}</p>

        </div>

        <div class="home_presentation_content_button_container flex">

            <x-primary-button :href="route('services')" :text="__('texts.my_services')"/>

            <x-primary-button :href="route('contact')" :text="__('texts.contact_me')"/>

        </div>

    </div>

</section>
