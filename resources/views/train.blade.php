@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
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

        {{-- fare un forEach --}}
        <tbody>
            <tr>
                <th scope="row">example</th>
                <td>example</td>
                <td>example</td>
                <td>example</td>
            </tr>
        </tbody>
    </table>
@endsection
