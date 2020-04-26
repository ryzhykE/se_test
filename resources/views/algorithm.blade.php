@extends('layouts.app')

@section('content')
    <div class="card mb-4 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">Free</h4>
        </div>
        <div class="card-body">
            <p class="card-title pricing-card-title">
                Написать алгоритм решения задачи:
                В классе 28 учеников. 75% из них занимаются спортом.
                Сколько учеников в классе занимаются спортом и сколько всего учеников в классе?
            </p>
            <p class="list-unstyled mt-3 mb-4">
                private function countStudent($student, $percent)
                {
                    $studentSport = (int) $student * (int) $percent / (int) 100;

                    return 'Занимаются спортом: ' . $studentSport . 'Всего учеников в классе: ' . $student;
                }
            </p>
            <div>
                {{ $result }}
            </div>
        </div>
    </div>
    <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <p class="card-title pricing-card-title">
                Реализовать алгоритм  извлечения числовых значений со строки:
                This server has 386 GB RAM and 500GB storage
            </p>
            <p class="list-unstyled mt-3 mb-4">
                private function getNumeric($str)
                {
                    return $strOnlyInteger = preg_replace('/[^0-9]/', ' ', $str);
                }
            </p>
            <div>
                {{ $numeric }}
            </div>
        </div>
    </div>
    <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <p class="card-title pricing-card-title">
                Нужно поменять 2 переменные местами без использования третьей:
                $а = [1,2,3,4,5];
                $b = ‘Hello world’;
            </p>
            <p class="list-unstyled mt-3 mb-4">
                private function getNumeric($str)
                {
                return $strOnlyInteger = preg_replace('/[^0-9]/', ' ', $str);
                }
            </p>
            <br>
                {{ $a }}

            @dump($b)
            <br>
            </div>
        </div>
    </div>
@endsection
