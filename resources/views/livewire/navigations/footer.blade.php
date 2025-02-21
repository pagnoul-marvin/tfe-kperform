<div class="footer flex">

    <div class="flex footer_content">

        <nav class="flex footer_content_nav">

            <h2 class="eaves bold secondary_title">{{$nav_title}}</h2>

            <ul class="flex footer_content_nav_links">

                @foreach($nav_links as $link)
                    @if($link['name'] === __('texts.logout'))

                        @auth()

                            <li>

                                <form class="" action="{{$link['url']}}" method="post">

                                    @csrf

                                    <button class="eaves link btn flex" type="submit" title="{{__('texts.logout')}}">
                                        {{__('texts.logout')}}
                                    </button>

                                </form>

                            </li>

                        @endauth

                    @elseif($link['url'] === route('profile'))

                        @auth()

                            <li>
                                <a class="link eaves"
                                   href="{{$link['url']}}"
                                   title="{{__('texts.page_link_title')}} {{str_replace('-', ' ',ucfirst($link['name']))}}"
                                   wire:navigate>{{str_replace('-', ' ',ucfirst($link['name']))}}
                                </a>
                            </li>

                        @else

                            <li>
                                <a class="link eaves"
                                   href="{{route('appointment-login')}}"
                                   title="{{__('texts.page_link_title')}} {{__('texts.login')}}"
                                   wire:navigate>{{__('texts.login')}}
                                </a>
                            </li>

                        @endauth

                    @else

                        <li>
                            <a class="link eaves"
                               href="{{$link['url']}}"
                               title="{{__('texts.page_link_title')}} {{str_replace('-', ' ',ucfirst($link['name']))}}"
                               wire:navigate>{{str_replace('-', ' ',ucfirst($link['name']))}}
                            </a>
                        </li>

                    @endif

                @endforeach

            </ul>

        </nav>

        <nav class="flex footer_content_socials">

            <h2 class="eaves bold secondary_title">{{$socials_title}}</h2>

            <a class="eaves socials_link" href="{{$facebook_link}}" hreflang="fr" title="{{__('texts.go_to_facebook')}}">
                <svg class="socials_link_icon" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="socials_link_icon_path" d="M18.6739 0C19.4958 0 20.27 0.157706 20.9964 0.473118C21.7228 0.78853 22.3584 1.21864 22.9032 1.76344C23.448 2.30824 23.8782 2.94385 24.1936 3.67025C24.509 4.39665 24.6667 5.17085 24.6667 5.99283V17.9785C24.6667 18.8005 24.509 19.5795 24.1936 20.3154C23.8782 21.0514 23.448 21.6918 22.9032 22.2366C22.3584 22.7814 21.7228 23.2115 20.9964 23.5269C20.27 23.8423 19.4958 24 18.6739 24H6.65952C5.83754 24 5.06334 23.8423 4.33694 23.5269C3.61053 23.2115 2.97493 22.7814 2.43013 22.2366C1.88532 21.6918 1.45522 21.0514 1.13981 20.3154C0.824393 19.5795 0.666687 18.8005 0.666687 17.9785V5.99283C0.666687 5.17085 0.824393 4.39665 1.13981 3.67025C1.45522 2.94385 1.88532 2.30824 2.43013 1.76344C2.97493 1.21864 3.61053 0.78853 4.33694 0.473118C5.06334 0.157706 5.83754 0 6.65952 0H18.6739ZM17.1541 5.24731H14.6308C14.1338 5.24731 13.675 5.33333 13.2545 5.50538C12.834 5.67742 12.4707 5.90203 12.1649 6.17921C11.859 6.45639 11.6153 6.77658 11.4337 7.13978C11.2521 7.50299 11.1613 7.86619 11.1613 8.22939V9.7491H8.92475V12.7312H11.1613V18.7527H14.1721V12.7312H16.4086V9.7491H14.1721V9.00358C14.1721 8.75508 14.2629 8.56392 14.4445 8.43011C14.6261 8.2963 14.7838 8.22939 14.9176 8.22939H17.1541V5.24731Z" fill="black"/>
                </svg>
            </a>

        </nav>

        <div class="flex footer_content_contact_info">

            <h2 class="eaves bold secondary_title">{{$contact_title}}</h2>

            <a class="link eaves" href="tel:{{$marine->telephone}}" title="{{__('texts.phone')}}">{{$marine->telephone}}</a>

            <a class="link eaves" href="mailto:{{$marine->email}}" title="{{__('texts.send_mail')}}">{{$marine->email}}</a>

            <a class="link eaves" href="{{$address_link}}" hreflang="fr" title="{{__('texts.see_address_on_google_map')}}">{{$marine->address}}</a>

        </div>

        <div class="flex footer_content_languages">

            <h2 class="eaves bold secondary_title">{{$language_title}}</h2>

            <livewire:lang-modifier :route_name="request()->segment(1) ?? 'home'"/>

        </div>

    </div>

    <div class="footer_legal_mentions flex">

        <div class="flex footer_legal_mentions_content">

            <p class="eaves">© KPerforM 2025. {{__('texts.all_rights_reserved')}}.</p>

            <p class="eaves">{{__('texts.created_by')}} <a class="eaves link" hreflang="fr" href="{{$marvin_portfolio_link}}" title="{{__('texts.go_to_marvin_portfolio')}}">Marvin Pagnoul</a></p>

            <a class="eaves link" href="{{route('legal-mentions')}}" title="{{__('texts.page_link_title')}} {{__('texts.legal_mentions')}}">{{__('texts.legal_mentions')}}</a>

        </div>

        <svg class="logo" id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448.18 181.36">
            <defs>
                <style>
                    .cls-2, .cls-3, .cls-4 {
                        fill: none;
                    }

                    .cls-5 {
                        fill: #f28a19;
                    }

                    .cls-6 {
                        fill: #fff;
                    }

                    .cls-7 {
                        fill: #706f6f;
                    }

                    .cls-2 {
                        stroke-width: 1px;
                    }

                    .cls-2, .cls-3, .cls-4 {
                        stroke: #000;
                        stroke-miterlimit: 10;
                    }

                    .cls-3 {
                        stroke-width: 1px;
                    }

                    .cls-4 {
                        stroke-width: 1px;
                    }
                </style>
            </defs>
            <g id="Os_down" data-name="Os down">
                <g>
                    <path class="cls-3" d="m120.48,155.21c-1.7-1.7-4.1-2.3-6.3-1.9l-51.9-51.9v28.3l37.8,37.8c-.4,2.3.2,4.6,1.9,6.3,2.8,2.8,7.4,2.7,10.3-.3,1.6-1.6,2.4-3.7,2.3-5.8,2,.1,4.2-.7,5.8-2.3,2.8-2.8,2.9-7.5.1-10.2Z"/>
                    <path class="cls-4" d="m119.48,22.11c-1.6-1.6-3.7-2.3-5.7-2.2.1-2-.7-4.1-2.2-5.7-2.9-2.9-7.5-3-10.2-.3-1.8,1.8-2.3,4.3-1.8,6.6l-37.2,37.1v28.1l51.4-51.5c2.1.3,4.3-.3,5.9-1.9,2.8-2.7,2.7-7.3-.2-10.2Z"/>
                </g>
                <path class="cls-2" d="m15.38,121.71v39.3c-3.2,2-5.3,5.2-5.3,8.8,0,6,5.7,10.9,12.7,10.9,3.8,0,7.3-1.5,9.6-3.8,2.3,2.3,5.7,3.8,9.6,3.8,7,0,12.7-4.9,12.7-10.9,0-3.7-2.1-6.9-5.3-8.8v-39.3"/>
                <line class="cls-2" x1="15.38" y1="43.71" x2="15.38" y2="51.61"/>
                <line class="cls-2" x1="49.18" y1="43.11" x2="49.18" y2="52.31"/>
            </g>
            <g id="Serpent">
                <path class="cls-5" d="m15.38,111.61c-1,.9-2.3,2.1-3.6,3.4-2.1,2-4.2,4.2-5,5.5,0,0-7.1,7.9,1.1,17.7,0,0-3.6-11.4,5.3-16.5,0,0,.9-.5,2.3-1.4v-8.7h-.1Z"/>
                <path class="cls-5" d="m57.78,26.01c-1,.2-6.2.7-7.9.8v7.3c1.4-.1,2.8-.3,4.2-.4,1.3-.1,2.4-.8,3.1-1.8.5-.7,1.2-1.2,2.1-.3,7.2,7.8,14.6,5.3,18.4-.7,6.2-9.5-14.7-5.8-19.9-4.9Z"/>
                <circle class="cls-6" cx="72.78" cy="27.71" r=".7"/>
            </g>
            <g id="Os_sup" data-name="Os sup">
                <line class="cls-2" x1="15.38" y1="121.71" x2="15.38" y2="48.81"/>
                <line class="cls-2" x1="49.18" y1="121.71" x2="49.18" y2="48.81"/>
                <path class="cls-5" d="m52.58,71.51c-14.6-4.7-57.2-19.2-37.4-31.3v-7.8c-21.4,7.5-17.2,20.9-5.6,30.9,19.5,16.9,54.7,13.1,40.3,30.2v11.8q.3-.2.6-.4c14.5-9.4,13.1-29.8,2.1-33.4Z"/>
                <path class="cls-2" d="m15.38,46.31v-20.7c-3-2-4.9-5.1-4.9-8.5,0-6,5.7-10.9,12.7-10.9,3.8,0,7.3,1.5,9.6,3.8,2.3-2.3,5.7-3.8,9.6-3.8,7,0,12.7,4.9,12.7,10.9,0,3.8-2.3,7.2-5.8,9.1v20.1"/>
            </g>
            <g id="Perform">
                <g>
                    <path class="cls-5" d="m145.68,103.11v-51.8h16.3c14.8,0,19.2,8.5,19.2,15.6s-4.6,15.3-19.3,15.3h-10.8v20.9h-5.4Zm17.3-25.5c7.5,0,12.8-4.3,12.8-10.8,0-5.2-3.4-10.8-13.9-10.8h-10.8v21.6s11.9,0,11.9,0Z"/>
                    <path class="cls-7" d="m197.68,85.81c.4,7.6,7.7,13.9,15.4,13.9,6.2,0,12-3.4,14.2-9h5.4c-3,8.3-11,13.4-19.5,13.4-11.2,0-20.7-8.8-20.7-20s9.5-20.2,20.6-20.2c11.9,0,20.8,9.9,20.8,20.4,0,.5-.1,1-.1,1.5,0,0-36.1,0-36.1,0Zm31-4.4c-1.5-7.7-7.8-13.1-15.6-13.1s-14,5.2-15.4,13.1h31Z"/>
                    <path class="cls-7" d="m248.08,103.11v-38.2h5.1v5.5h.1c1.7-4,4.8-6.2,11.2-6.5v5.2h-.1c-7.3.7-11.2,5.3-11.2,11.5v22.6h-5.1v-.1Z"/>
                    <path class="cls-7" d="m282.78,103.11v-33.8h-6.2v-4.4h6.2c0-10.5,5.2-14.2,15.2-14.4v4.6h-.1c-7,0-10,2.8-10,9.6v.3h10.2v4.4h-10.2v33.9h-5.1v-.2Z"/>
                    <path class="cls-7" d="m307.58,84.21c0-11.3,9.4-20.4,20.7-20.4s20.8,9.4,20.8,20.1-9.7,20.1-20.8,20.1c-11.3.1-20.7-9.1-20.7-19.8Zm36.4-.4c0-8.3-7-15.5-15.7-15.5s-15.6,7.2-15.6,15.9,7,15.5,15.7,15.5c8.9-.1,15.6-7.2,15.6-15.9Z"/>
                    <path class="cls-7" d="m363.28,103.11v-38.2h5.1v5.5h.1c1.7-4,4.8-6.2,11.2-6.5v5.2h-.1c-7.3.7-11.2,5.3-11.2,11.5v22.6h-5.1v-.1Z"/>
                    <path class="cls-5" d="m442.78,103.11v-46.1h-.1l-20.1,46.1h-4.6l-20-46.1h-.1v46.1h-5.4v-51.8h8.3l19.5,44.1,19.6-44.1h8.3v51.8h-5.4Z"/>
                </g>
            </g>
            <g id="Lignes_du_dessous" data-name="Lignes du dessous">
                <polygon class="cls-5" points="145.68 145.31 149.38 152.31 448.18 152.31 448.18 145.31 145.68 145.31"/>
                <polygon class="cls-7" points="198.08 162.61 201.18 169.61 448.18 169.61 448.18 162.61 198.08 162.61"/>
            </g>
        </svg>

    </div>

</div>
