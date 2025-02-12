<div>
    @if(str_replace('_', '-', $locale) === 'fr')
        <div wire:click="changeLang('en')">
            <x-flag-country-us/>
        </div>
    @else
        <div wire:click="changeLang('fr')">
            <x-flag-country-fr/>
        </div>
    @endif
</div>
