@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">


            @if(Auth::check())
            <div class="col-md-3">

                <div class="card">
                    <div class="card-body">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Active</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Active</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            @endif
            <div class="{{Auth::check() ? 'col-md-9': 'col-md-12'}}">
                <div class="card">

                    <div class="card-header">

                        <h3 class="card-title">{{$listing->title}} in <span class="text-muted">{{$listing->area->name}}</span></h3>
                    </div>

                    <div class="card-body">


                        <p>
                            {!!  nl2br(e($listing->body))!!}
                        </p>

                        <hr>
                        <p>Viewed x times</p>

                    </div>
                </div>


                <div class="card">
                    <div class="card-header">
                        <h4>Contact {{$listing->user->name}}</h4>
                    </div>



                    <div class="card-body">

                        @if(Auth::guest())
                            <p><a href="/register">SignUp</a> or <a href="/login">Signin</a> to contact listing owners.</p>
                        @else
                        <form action="" method="post">

                            {{csrf_field()}}
                            <div class="form-group">

                                <label for="message">Message</label>
                                <textarea name="message" id="message" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                        </form>
                        <hr>
                        <p class="help-block">This will contact the {{$listing->user->name }} and they'll be able to directly you by email.</p>
                    </div>
                    @endif
                </div>
















            </div>


        </div>
    </div>
@endsection
