@extends("layouts.app")
@section("content")
    <div class="container">

            <div class="card border-primary mb-2">
                <div class="card-body">
                    <h3 class="card-title">{{ $article->title }}</h3>

                    <div class="">
                        <small class=" text-muted">{{ $article->created_at }}</small>
                    </div>

                    <div>{{ $article->body }}</div>

                    <div class=" mt-2">
                        <a href="{{ url("/articles/delete/$article->id") }}"
                        class="btn btn-sm btn-danger">Delete</a>
                    </div>

                </div>
            </div>

    </div>
@endsection
