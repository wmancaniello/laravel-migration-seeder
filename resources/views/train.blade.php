@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Azienda</th>
                <th>Stazione di Partenza</th>
                <th>Stazione di Arrivo</th>
                <th>Orario di Partenza</th>
                <th>Orario di Arrivo</th>
                <th>Codice Treno</th>
                <th>Numero Carrozze</th>
                <th>In Orario</th>
                <th>Cancellato</th>
            </tr>
        </thead>

        <tbody>
            {{-- fare un forEach --}}
            @foreach ($trainInfo as $train)
                <tr>
                    <th scope="row">{{ $train->id }}</th>
                    <td>{{ $train->company }}</td>
                    <td>{{ $train->departure_station }}</td>
                    <td>{{ $train->arrival_station }}</td>
                    <td>{{ $train->departure_time }}</td>
                    <td>{{ $train->arrival_time }}</td>
                    <td>{{ $train->train_code }}</td>
                    <td>{{ $train->number_of_carriages }}</td>
                    <td>{{ $train->on_time ? 'Si' : 'No' }}</td>
                    <td>{{ $train->cancelled ? 'Si' : 'No' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
