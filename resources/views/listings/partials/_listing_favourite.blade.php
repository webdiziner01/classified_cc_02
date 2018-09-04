@component('listings.partials._base_listing', compact('listing'))
    @slot('links')

        <ul class="list-inline">

            <li class="list-inline-item">
                Added {{$listing->pivot->created_at->diffForHumans()}}
            </li>

            <li class="list-inline-item">
                <a href="#">Delete</a>
            </li>

        </ul>
    @endslot


@endcomponent






