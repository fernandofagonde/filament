@inject('nav', 'Filament\Navigation')

<nav aria-label="primary" class="flex-grow px-4">
    <ol>
    @foreach($nav::all() as $item)
        <li>
            <x-filament::nav-link 
                :path="$item->path" 
                :active="$item->active" 
                :label="$item->label" 
                :icon="$item->icon ?? false" />
        </li>
    @endforeach
    </ol>
</nav>