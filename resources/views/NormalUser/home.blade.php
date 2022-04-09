@extends('Layouts.normal-user')
@section('content')
    <div class="d-flex justify-content-between">
        <span>วิดีโอ</span>
        <a href="" class=" d-inline-flex align-items-center text-secondary text-decoration-none">
            ทังหมด
            <span class="material-icons-outlined">
                navigate_next
            </span>
        </a>

    </div>
    <hr>
    <div class="row py-3">
        <div class="col-4">
            <a href="" class="card bg-transparent border-0 d-flex text-decoration-none">
                <img src="{{ asset('image/test.jpeg') }}" class="card-img-top rounded thumbnail-video" alt="...">
                <div class="card-body p-2">
                    <div class="d-flex gap-2 ">
                        <img width="40" height="40" src="{{ asset('image/test.jpeg') }}" class=" rounded-circle" alt="">
                        <div class="">
                            <h5 class="card-title text-dark">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted small">Card subtitle</h6>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-4">
            <a href="" class="card bg-transparent border-0 d-flex text-decoration-none">
                <img src="{{ asset('image/test.jpeg') }}" class="card-img-top rounded thumbnail-video" alt="...">
                <div class="card-body p-2">
                    <div class="d-flex gap-2 ">
                        <img width="40" height="40" src="{{ asset('image/test.jpeg') }}" class=" rounded-circle" alt="">
                        <div class="">
                            <h5 class="card-title text-dark">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted small">Card subtitle</h6>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
