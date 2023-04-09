@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Withdraw Funds</h1>
                </div>
                <div class="card-body">
                    <form action="{{route('clients-update', $client)}}" method="post">
                        <div class="mb-3">
                            {{$client->name}}
                        </div>
                        <div class="mb-3">
                            {{$client->surname}}
                        </div>
                        <div class="mb-3">
                            {{$client->acc_balance}}
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="acc_balance" value="{{ old('acc_balance', $client->acc_balance) }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Withdraw Funds</button>
                        @csrf
                        @method('put')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
