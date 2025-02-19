<section class="section flex about_presentation">

    <h2 class="hidden">{{__('texts.presentation')}}</h2>

    <div class="content flex about_presentation_content">

        <div class="about_presentation_content_img_container img_container">

            <img src="{{asset('assets/'.$image[0]['name'])}}" alt="{{$image[0]['alt']}}"
                 class="about_presentation_content_img_container_img">

        </div>

        <div class="about_presentation_content_texts flex">

            <div class="about_presentation_content_texts_container flex">

                <p class="eaves bold">{{__('texts.who_am_i')}}</p>

                <p class="eaves text">{{__('texts.who_am_i_description')}}</p>

            </div>

            <div class="about_presentation_content_texts_container flex">

                <p class="eaves bold">{{__('texts.my_goal')}}</p>

                <p class="eaves text">{{__('texts.my_goal_description')}}</p>

            </div>

        </div>

    </div>

</section>
