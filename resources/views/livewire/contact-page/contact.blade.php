<section class="flex section basic contact eaves">

    <h2 class="bold primary_title">{{__('texts.contact_me')}}</h2>

    <div class="content flex contact_content">

        <div class="contact_content_information flex">

            <h3 class="secondary_title bold">{{__('texts.be_part_of_the_kperform_team')}}</h3>

            <div class="contact_content_information_content flex">

                <p class="eaves text contact_content_information_text">{{__('texts.contact_information')}}</p>

                <ul class="contact_content_information_content_list">

                    <li class="contact_content_information_content_list_item text">{{__('texts.email')}}&nbsp;:&nbsp;
                        <a href="mailto:{{$marine->email}}" title="{{__('texts.send_mail')}}"
                           class="link black_line eaves">{{$marine->email}}</a>
                    </li>

                    <li class="contact_content_information_content_list_item text">{{__('texts.telephone')}}&nbsp;:&nbsp;
                        <a href="tel:{{$marine->telephone}}" title="{{__('texts.phone')}}"
                           class="eaves link black_line">{{$marine->telephone}}</a>
                    </li>

                </ul>

            </div>

        </div>

        <form wire:submit="save" class="contact_content_form flex">

            <p class="contact_content_form_alert">{{__('texts.fields_with')}} &quot;<span class="red">*</span>&quot; {{__('texts.mandatory')}}</p>

            <fieldset class="flex contact_content_form_fieldset">

                <x-forms.label-input-layout id="firstname">

                    <label class="label bold eaves" for="firstname">{{__('texts.firstname')}} <span class="red">*</span></label>

                    <input class="input eaves" wire:model.blur="form.firstname" type="text" id="firstname" placeholder="John" required>

                </x-forms.label-input-layout>

                <x-forms.label-input-layout id="lastname">

                    <label class="label bold eaves" for="firstname">{{__('texts.lastname')}} <span class="red">*</span></label>

                    <input class="input eaves" wire:model.blur="form.lastname" type="text" id="lastname" placeholder="Doe" required>

                </x-forms.label-input-layout>

            </fieldset>

            <fieldset class="flex contact_content_form_fieldset">

                <x-forms.label-input-layout id="email">

                    <label class="label bold eaves" for="email">{{__('texts.email')}} <span class="red">*</span></label>

                    <input class="input eaves" wire:model.blur="form.email" type="email" id="email" placeholder="johndoe@example.com" required>

                </x-forms.label-input-layout>

                <x-forms.label-input-layout id="telephone">

                    <label class="label bold eaves" for="telephone">{{__('texts.telephone')}} <span class="red">*</span></label>

                    <input class="input eaves" wire:model.blur="form.telephone" type="tel" id="telephone" placeholder="+32..." required>

                </x-forms.label-input-layout>

            </fieldset>

            <x-forms.label-input-layout id="message">

                <label class="label bold eaves" for="message">{{__('texts.message')}} <span class="red">*</span></label>

                <textarea class="input eaves" wire:model.blur="form.message" id="message" placeholder="{{__('texts.message_placeholder')}}" rows="5"></textarea>

            </x-forms.label-input-layout>

            <button type="submit" class="eaves bold primary_button btn"
                    title="{{__('texts.send')}}">{{__('texts.send')}}</button>

        </form>

    </div>

    <livewire:feedback-message/>

</section>
