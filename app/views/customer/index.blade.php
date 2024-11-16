@extends('layouts.app')

@section('content')

<h1>{{$titre}}</h1>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
        </tr>
    </thead>
    <tbody>
        @foreach($customers as $customer)
        <tr>
            <td>{{$customer->FirstName}}</td>
            <td>{{$customer->LastName}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection