@extends('layouts.app')

@section('content')
    <hr class="my-12">
    <div class="container">

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Status</th>
                <th scope="col">Header</th>
                <th scope="col">content-length</th>
                <th scope="col">keywords</th>
                <th scope="col">description</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">{{ $domain['id'] }}</th>
                <td>{{ $domain['name'] }}</td>
                <td>{{ $domain['status'] }}</td>
                <td>{{ $domain['header'] }}</td>
                <td>{{ $domain['content-length'] }}</td>
                <td>{{ $domain['keywords'] }}</td>
                <td>{{ $domain['description'] }}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
