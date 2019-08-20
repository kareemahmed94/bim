@extends('layouts.admin')

@section('content')
            <div class="row">

                <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                    <thead class="table-primary">
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Message</th>
                                        </tr>

                                </thead>
                                <tbody>
                                    @foreach($contacts as $contact)
                                            <tr>
                                                <td> {{$contact->name}} </td>
                                                <td> {{$contact->email}} </td>
                                                <td> {{$contact->message}} </td>
                                            </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </div>

@endsection