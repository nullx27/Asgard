@extends('layouts.dashboard')

@section('PAGE_TITLE', '' . 'Timerboard')
@section('CONTENT_TITLE', 'Timerboard')
@section('content')
    @php
        $user = Auth::user();
    @endphp
    <div class="row">

        <div class="col-md-12">

            <div class="card">
                <div class="card-body">

                    <table class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th class="w-25">Title</th>
                            <th></th>
                            <th>Created by</th>
                            <th>Limited to</th>
                            <th>Target</th>
                            <th>Countdown</th>
                            @if ($timer->trashed() == false)
                                <th></th>
                                <th></th>
                            @endif
                        </tr>
                        </thead>
                        <tbody id="TimerStaticTable">
                        @php
                            $forGroup = $timer->forGroup();
                        @endphp
                            <tr>
                                <td class="align-middle">
                                    <span>{{$timer->title}}</span>
                                </td>
                                <td class="align-middle">
                                    <i class="btn fas fa-link icon-vertical-align copyhash pull-right" data-content="Link Copied" data-clipboard-text="{{url("/") . "/timerboard/timer/" . Hashids::encode($timer->id)}}"></i>
                                </td>
                                <td class="align-middle">{{$timer->owner()->mainCharacter()->first()->name}}</td>
                                <td class="align-middle">{{$forGroup == null ? "" : $forGroup->name}}</td>
                                <td class="align-middle">{{$timer->target}}</td>
                                <td class="align-middle"><countdown date="{{$timer->target}}"></countdown></td>

                                @if (($user->can('timer-override') or $timer->owner()->id == $user->id) and $timer->trashed() == false)
                                    <td class="align-middle"><a href="{{route('timerboard.edit', $timer->id)}}" class="btn btn-sm btn-warning">edit</a></td>
                                    <td class="align-middle"><a href="{{route('timerboard.delete', $timer->id)}}" class="btn btn-sm btn-danger">delete</a></td>
                                @endif

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script>
           // listener for copy link
            $('#TimerStaticTable').on('click', '.copyhash', function() {
                //Ajax call to get url then paste to clipboard
                $.ajax({
                    method: 'GET', // Type of response and matches what we said in the route
                    url: '/timerboard/timer/' + $(this).data('id') + '/getlink',
                    success: function(response){ // What to do if we succeed
                        console.log(response);
                    },
                    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                        console.log(JSON.stringify(jqXHR));
                        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                    }
                });
            });
        </script>
    @endpush

@endsection