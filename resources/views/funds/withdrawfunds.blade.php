@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-5">
                <div class="card-header grey">
                    <h1>Withdraw Funds</h1>
                </div>
                <div class="card-body grey">
                    <form action="{{route('clients-withdrawfunds', $client)}}" method="post">
                        <div class="mb-3">
                            Name: <b> {{$client->name}} </b>
                        </div>
                        <div class="mb-3">
                            Surname: <b> {{$client->surname}} </b>
                        </div>
                        <div class="mb-3">
                            Account balance: <b> {{$client->acc_balance}} </b>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="acc_balance" value="">
                        </div>
                        <button type="submit" class="btn btn-primary brown">Withdraw Funds</button>
                        @csrf
                        @method('put')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
