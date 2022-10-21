@extends('dashboard.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
  </div>
    <h5>Welcome back, {{ auth()->user()->name }}</h5>
    <div class="row mt-5">
        <div class="col-lg-4  ">
            <div class="card-data book">
                <div class="row">
                    <div class="col-6"><i class="bi bi-journal-bookmark"></i></div>
                    <div class="col-6  d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">book</div>
                        {{-- <div class="card-count">{{ $book_count }}</div> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4  ">
            <div class="card-data user">
                <div class="row">
                    <div class="col-6"><i class="bi bi-people"></i></div>
                    <div class="col-6  d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">user</div>
                        {{-- <div class="card-count">{{ $user_count }}</div> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4  ">
            <div class="card-data categories">
                <div class="row">
                    <div class="col-6"><i class="bi bi-list-task"></i></div>
                    <div class="col-6  d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">categories</div>
                        {{-- <div class="card-count">{{ $category_count }}</div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


