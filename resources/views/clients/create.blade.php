@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Add Client</h1>
                </div>
                <div class="card-body">
                    <form action="{{route('clients-store')}}" method="post">
                        <div class="mb-3">
                            <label class="form-label">Client Name</label>
                            <input type="text" class="form-control" name="name" value={{old('name')}}>
                            <div class="form-text">Please add client name here</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Client Surname</label>
                            <input type="text" class="form-control" name="surname" value={{old('surname')}}>
                            <div class="form-text">Please add client surname here</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Personal code</label>
                            <input type="text" class="form-control" name="personal_code" value={{old('personal_code')}}>
                            <div class="form-text">Please add client personal code here</div>
                        </div>
                        <div class="mb-3 readonly">
                            <label class="form-label">Account number</label>
                            <input type="text" class="form-control" name="acc_number" value={{old('acc_number')}}>
                            <div class="form-text">Please add client personal code here</div>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" @if(old('tt')) checked @endif id="tt" name="tt">
                            <label class="form-check-label" for="tt">Has TikTok account</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
