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
                <h4 class="my-0 font-weight-normal">User with the highest bid</h4>
            </div>
            <div class="card-body">
                <strong>
                    Напишите запрос, который выберет название мероприятия (events.caption), по которому нет заявок
                </strong>
                <div>
                      <pre>
                        $event = Event::select('caption')->with('bids')->doesntHave('bids')->firstOrFail();
                    </pre>
                </div>
                <div>
                    {{ $event->caption }}
                </div>
            </div>
        </div>
    </div>
@endsection
