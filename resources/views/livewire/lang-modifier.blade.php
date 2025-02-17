<div class="lang_switcher flex">

    <div class="lang_switcher_flag" title="{{__('texts.switch_language_in')}} {{__('texts.french')}}" wire:click="changeLang('fr')">
        <x-flag-language-fr/>
    </div>

    <div class="lang_switcher_flag" title="{{__('texts.switch_language_in')}} {{__('texts.english')}}" wire:click="changeLang('en')">
        <x-flag-language-en/>
    </div>

</div>
