@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <div class="panel-body">

                        <h3> Your Listings </h3>
                        @if(count($listings))

                            <table class="table table-stripped">

                                    <tr>
                                            <th>Company</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                    </tr>
                                    @foreach($listings as $listing)

                                            <tr>

                                                    <td> {{ $listing->name  }} </td>
                                            <td> <a href="{{  url('listings/create') }}"> Edit  </a> </td>

                                            </tr>

                                    @endforeach 
                            </table>

                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
