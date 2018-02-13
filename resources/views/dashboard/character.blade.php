@extends('layouts.dashboard')

@section('PAGE_TITLE', 'ASGARD :: ' . $character->name)
@section('CONTENT_TITLE', $character->name)

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('profile.show', $character->user->id)}}">
                    {{$character->user->mainCharacter->name}}
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                {{$character->name}}
            </li>
        </ol>
    </nav>

    <div class="row">

        <div class="col-3">
            <div class="card">
                <img src="https://image.eveonline.com/Character/{{$character->id}}_512.jpg" class="card-img-top">
                <div class="card-body text-center">

                    <h4 class="card-title">{{$character->name}}</h4>
                    <p class="card-text">{{$character->corporation->name}}</p>

                    <p class="card-text text-muted">
                        {{$character->location->solarSystem->solarSystemName}}
                        <br>
                        {{$character->location->shipType->typeName}} ({{$character->location->ship_name}})
                    </p>
                    <p>

                    </p>

                </div>
            </div>
        </div>

        <div class="col-9">

            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="tab-overview" data-toggle="tab" href="#overview" role="tab"
                       aria-controls="overview" aria-selected="true">
                        Overview
                    </a>

                    <a class="nav-item nav-link" id="tab-history" data-toggle="tab" href="#history" role="tab"
                       aria-controls="profile" aria-selected="false">
                        Corporation History
                    </a>

                    <a class="nav-item nav-link" id="tab-history" data-toggle="tab" href="#history" role="tab"
                       aria-controls="profile" aria-selected="false">
                        Contacts
                    </a>

                    <a class="nav-item nav-link" id="tab-history" data-toggle="tab" href="#history" role="tab"
                       aria-controls="profile" aria-selected="false">
                        Transactions
                    </a>

                    <a class="nav-item nav-link" id="tab-history" data-toggle="tab" href="#history" role="tab"
                       aria-controls="profile" aria-selected="false">
                        Mail
                    </a>

                    <a class="nav-item nav-link" id="tab-history" data-toggle="tab" href="#history" role="tab"
                       aria-controls="profile" aria-selected="false">
                        Assets
                    </a>

                    <a class="nav-item nav-link" id="tab-history" data-toggle="tab" href="#history" role="tab"
                       aria-controls="profile" aria-selected="false">
                        Skills
                    </a>

                    <a class="nav-item nav-link" id="tab-history" data-toggle="tab" href="#history" role="tab"
                       aria-controls="profile" aria-selected="false">
                        Bookmarks
                    </a>
                </div>
            </nav>

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                    @include('dashboard.partials.character.overview')
                </div>

                <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="history">
                    @include('dashboard.partials.character.history')
                </div>
            </div>
        </div>
    </div>

@endsection