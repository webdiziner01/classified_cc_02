@component('listings.partials._base_listing', compact('listing'))
    @slot('links')

        <ul class="list-inline">

            <li class="list-inline-item">
                Added {{$listing->pivot->created_at->diffForHumans()}}
            </li>

            <li class="list-inline-item">
                <a href="#" onclick="event.preventDefault(); document.getElementById('listings-favourite-destroy-{{$listing->id}}').submit();">Delete</a>
            </li>

            <form action="{{route('listings.favourites.destroy',[$area, $listing])}}" method="post"
            id="listings-favourite-destroy-{{ $listing->id }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
            </form>

        </ul>
    @endslot


@endcomponent






