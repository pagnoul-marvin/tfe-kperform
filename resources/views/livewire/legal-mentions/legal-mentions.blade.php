<div>

    <livewire:navigations.go-back title-level="primary" class="space"/>

    <section class="section legal_mentions flex basic">

        <h2 class="eaves bold primary_title">{{__('texts.legal_mentions')}}</h2>

        <div class="content legal_mentions_content flex">

            <p class="eaves">{{__('texts.latest_modification')}}&nbsp;:&nbsp;<time datetime="2025-02-10">{{__('texts.date_lm')}}</time></p>

            <div class="legal_mentions_content_item flex">

                <h3 class="eaves bold secondary_title">{{__('texts.owner')}}</h3>

                <ul class="eaves">

                    <li class="text">{{__('texts.name')}}&nbsp;:&nbsp;KPerforM</li>
                    <li class="text">{{__('texts.address')}}&nbsp;:&nbsp;{{$owner->address}}</li>
                    <li class="text">{{__('texts.email')}}&nbsp;:&nbsp;{{$owner->email}}</li>
                    <li class="text">{{__('texts.telephone')}}&nbsp;:&nbsp;{{$owner->telephone}}</li>

                </ul>

            </div>

            <div class="legal_mentions_content_item flex">

                <h3 class="eaves bold secondary_title">{{__('texts.intellectual_rights')}}</h3>

                <p class="eaves text">{{__('texts.intellectual_rights_description')}}</p>

            </div>

            <div class="legal_mentions_content_item flex">

                <h3 class="eaves bold secondary_title">{{__('texts.collecting_data')}}</h3>

                <p class="eaves text">{{__('texts.collecting_data_description')}}</p>

            </div>

            <div class="legal_mentions_content_item flex">

                <h3 class="eaves bold secondary_title">{{__('texts.data_security')}}</h3>

                <p class="eaves text">{{__('texts.data_security_description')}}</p>

            </div>

            <div class="legal_mentions_content_item flex">

                <h3 class="eaves bold secondary_title">{{__('texts.rights_of_access_rectification_deletion')}}</h3>

                <p class="eaves text">{{__('texts.rights_of_access_rectification_deletion_description')}}</p>

            </div>

            <div class="legal_mentions_content_item flex">

                <h3 class="eaves bold secondary_title">{{__('texts.modification_of_legal_mentions')}}</h3>

                <p class="eaves text">{{__('texts.modification_of_legal_mentions_description')}}</p>

            </div>

        </div>

    </section>

</div>


