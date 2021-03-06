@php
    /**
     * @var $event \Illuminate\Database\Eloquent\Collection|App\Event[]
     */
@endphp
@extends('layouts.app')

@section('content')
    <div class="card-deck mb-10 text-center">
        <div class="card mb-8 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">User with the more 3 order</h4>
            </div>
            <div class="card-body">
                <strong>
                    Напишите запрос, который выберет название мероприятия (events.caption),
                    по которому больше трех заявок

                </strong>
                <div>
                  <pre>
                    $event = Event::select('caption')
                        ->with('bids')
                        ->whereHas('bids', function ($query) {
                            $query->groupBy('id_event')->havingRaw('COUNT(*) > 3');
                        })
                        ->first();
                </pre>
                </div>
                <div>
                    {{ $event->caption }}
                </div>
            </div>
        </div>
    </div>
@endsection
