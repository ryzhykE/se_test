@extends('layouts.app')

@section('content')
    <div class="card-deck mb-10 text-center">
        <div class="card mb-8 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Migration</h4>
            </div>
            <div class="card-body">
                <strong>Задание - Сделать миграции </strong>
                <div>
                      <pre>
                          Schema::create('events', function (Blueprint $table) {
                              $table->id();
                              $table->string('caption');
                              $table->timestamps();
                          });
                    </pre>
                    <pre>
                        Schema::create('bids', function (Blueprint $table) {
                            $table->id();
                            $table->bigInteger('id_event')->unsigned();
                            $table->string('name');
                            $table->string('email');
                            $table->float('price');
                            $table->timestamps();

                            $table->foreign('id_event')->references('id')->on('events');
                        });
                    </pre>


                </div>
                <div>
                    <table class="table">
                        <thead>
                        <tr>
                            @foreach($events as $event)
                                <th scope="col">{{ $event }}</th>
                            @endforeach
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>

                    <table class="table">
                        <thead>
                        <tr>
                            @foreach($bids as $bid)
                                <th scope="col">{{ $bid }}</th>
                            @endforeach
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
