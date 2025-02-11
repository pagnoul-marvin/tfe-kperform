<div>
    @if(str_replace('_', '-', $locale) === 'fr')
        <p wire:click="changeLang('en')">EN</p>
    @else
        <p wire:click="changeLang('fr')">FR</p>
    @endif
</div>
