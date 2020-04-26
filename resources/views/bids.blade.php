@php
    /**
     * @var $result \Illuminate\Database\Eloquent\Collection|App\Bid[]
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
                    Напишите запрос, который выберет имя пользователя (bids.name) с самой высокой ценой
                    заявки (bids.price)
                </strong>
                <div>
                      <pre>
                         $result = Bid::wherePrice(Bid::max('price'))->first();
                    </pre>
                </div>
                <div>
                    {{ $result->name }}
                </div>
            </div>
        </div>
    </div>
@endsection
