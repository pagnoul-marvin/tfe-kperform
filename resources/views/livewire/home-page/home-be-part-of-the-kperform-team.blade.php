<section class="section basic flex home_be_part_of_the_kperform_team">

    <h2 class="primary_title eaves bold grey_line">{{__('texts.be_part_of_the_kperform_team')}}</h2>

    <div class="home_be_part_of_the_kperform_team_content content flex">

        <div class="home_be_part_of_the_kperform_team_content_explanations flex">

            <div class="home_be_part_of_the_kperform_team_content_explanations_item flex">

                <h3 class="eaves bold secondary_title">{{__('texts.whats_kperform_team')}}</h3>

                <p class="text eaves">{{__('texts.whats_kperform_team_description')}}</p>

            </div>

            <div class="home_be_part_of_the_kperform_team_content_explanations_item flex">

                <h3 class="eaves bold secondary_title">{{__('texts.why_be_part_of_the_kperform_team')}}</h3>

                <p class="text eaves">{{__('texts.why_be_part_of_the_kperform_team_description')}}</p>

            </div>

            <div class="home_be_part_of_the_kperform_team_content_explanations_item flex">

                <h3 class="eaves bold secondary_title">{{__('texts.how_to_become_part_of_the_kperform_team')}}</h3>

                <p class="text eaves">{{__('texts.how_to_become_part_of_the_kperform_team_description')}}</p>

                <x-primary-button :href="route('contact')" :text="__('texts.be_part_of_the_kperform_team')"/>

            </div>

        </div>

        <div class="slider_container rectangle flex"
             x-data="{
            init() {
                setInterval(() => { @this.nextSlide() }, {{ $slideInterval }});
            }
        }">
            <div class="slider_container_images_container">
                @foreach($pictures as $index => $picture)
                    <img src="{{ asset('assets/'.$picture['name']) }}"
                         alt="{{ $picture['alt'] }}"
                         class="slider_container_images_container_img rectangle {{ $index === $currentIndex ? 'active' : 'hidden' }}"
                         wire:key="picture-{{$index}}">
                @endforeach
            </div>

            <div class="slider_container_dots flex">
                @foreach($pictures as $index => $picture)
                    <div class="dot {{ $index === $currentIndex ? 'active' : '' }}" wire:key="dot-{{$index}}"></div>
                @endforeach
            </div>
        </div>

    </div>

</section>
