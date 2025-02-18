<section class="section flex basic home_some_useful_info">

    <h2 class="eaves bold primary_title">{{__('texts.some_useful_information')}}</h2>

    <div class="home_some_useful_info_content content flex">

        <div class="home_some_useful_info_content_contact_details flex">

            <h3 class="eaves bold secondary_title">{{__('texts.contact_details')}}</h3>

            <div class="home_some_useful_info_content_contact_details_content flex">

                <dl class="home_some_useful_info_content_contact_details_content_details_container flex">

                    <div class="home_some_useful_info_content_contact_details_content_details_container_item flex">

                        <dt class="eaves datalist">{{__('texts.telephone')}}&nbsp;:&nbsp;</dt>
                        <dd class="datadescription"><a class="eaves link" title="{{__('texts.phone')}}" href="tel:{{$telephone}}">{{$telephone}}</a></dd>

                    </div>

                    <div class="home_some_useful_info_content_contact_details_content_details_container_item flex">

                        <dt class="eaves datalist">{{__('texts.address')}}&nbsp;:&nbsp;</dt>
                        <dd class="datadescription"><a class="eaves link" title="{{__('texts.see_address_on_google_map')}}" hreflang="fr" href="{{$address_google_map}}">{{$address}}</a></dd>

                    </div>

                    <div class="home_some_useful_info_content_contact_details_content_details_container_item flex">

                        <dt class="eaves datalist">{{__('texts.mail')}}&nbsp;:&nbsp;</dt>
                        <dd class="datadescription"><a class="eaves link" title="{{__('texts.send_mail')}}" href="mailto:{{$email}}">{{$email}}</a></dd>

                    </div>

                </dl>

                <div class="home_some_useful_info_content_contact_details_content_contact_container flex">

                    <p class="eaves text">{{__('texts.you_can_also_contact_me_via_my_contact_form')}}</p>

                    <x-primary-button :href="route('contact')" :text="__('texts.contact_me')" />

                </div>

            </div>

        </div>

        <div class="home_some_useful_info_content_timetable flex">

            <h3 class="eaves bold secondary_title">{{__('texts.timetable')}}</h3>

            <ul class="home_some_useful_info_content_timetable_list flex">

                <li class="eaves">{{__('texts.monday')}}&nbsp;:&nbsp;8h - 18h</li>
                <li class="eaves">{{__('texts.tuesday')}}&nbsp;:&nbsp;8h - 18h</li>
                <li class="eaves">{{__('texts.wednesday')}}&nbsp;:&nbsp;8h - 18h</li>
                <li class="eaves">{{__('texts.thursday')}}&nbsp;:&nbsp;8h - 18h</li>
                <li class="eaves">{{__('texts.friday')}}&nbsp;:&nbsp;8h - 18h</li>
                <li class="eaves">{{__('texts.saturday')}}&nbsp;:&nbsp;8h - 18h</li>
                <li class="eaves">{{__('texts.sunday')}}&nbsp;:&nbsp;8h - 18h</li>

            </ul>

        </div>

        <div class="home_some_useful_info_content_socials flex">

            <h3 class="eaves bold secondary_title">{{__('texts.follow_me_on_socials')}}</h3>

            <a class="eaves socials_link" hreflang="fr" href="{{$facebook_link}}" title="{{__('texts.go_to_facebook')}}">
                <svg class="socials_link_icon" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="socials_link_icon_path" d="M18.6739 0C19.4958 0 20.27 0.157706 20.9964 0.473118C21.7228 0.78853 22.3584 1.21864 22.9032 1.76344C23.448 2.30824 23.8782 2.94385 24.1936 3.67025C24.509 4.39665 24.6667 5.17085 24.6667 5.99283V17.9785C24.6667 18.8005 24.509 19.5795 24.1936 20.3154C23.8782 21.0514 23.448 21.6918 22.9032 22.2366C22.3584 22.7814 21.7228 23.2115 20.9964 23.5269C20.27 23.8423 19.4958 24 18.6739 24H6.65952C5.83754 24 5.06334 23.8423 4.33694 23.5269C3.61053 23.2115 2.97493 22.7814 2.43013 22.2366C1.88532 21.6918 1.45522 21.0514 1.13981 20.3154C0.824393 19.5795 0.666687 18.8005 0.666687 17.9785V5.99283C0.666687 5.17085 0.824393 4.39665 1.13981 3.67025C1.45522 2.94385 1.88532 2.30824 2.43013 1.76344C2.97493 1.21864 3.61053 0.78853 4.33694 0.473118C5.06334 0.157706 5.83754 0 6.65952 0H18.6739ZM17.1541 5.24731H14.6308C14.1338 5.24731 13.675 5.33333 13.2545 5.50538C12.834 5.67742 12.4707 5.90203 12.1649 6.17921C11.859 6.45639 11.6153 6.77658 11.4337 7.13978C11.2521 7.50299 11.1613 7.86619 11.1613 8.22939V9.7491H8.92475V12.7312H11.1613V18.7527H14.1721V12.7312H16.4086V9.7491H14.1721V9.00358C14.1721 8.75508 14.2629 8.56392 14.4445 8.43011C14.6261 8.2963 14.7838 8.22939 14.9176 8.22939H17.1541V5.24731Z" fill="black"/>
                </svg>
            </a>

        </div>

    </div>

</section>
