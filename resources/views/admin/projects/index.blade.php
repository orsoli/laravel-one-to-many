@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="text-center py-3">Projects</h1>
    <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-3">
        @forelse ($projects as $project)
        <div class="col">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">{{$project->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{$project->type->title}}
                    </h6>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Project Manager: {{$project->project_manager}}
                    </h6>
                    <p class="card-text">{{$project->description}}</p>
                    <a href="#" class="card-link">Project link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
        @empty
        <h3>You have no projects in DB</h3>
        @endforelse
    </div>
</div>
@endsection