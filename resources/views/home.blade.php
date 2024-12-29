@extends('layouts.standard')
@section('body')
    <x-navbar></x-navbar>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Main Content -->
    <main class="container my-5">
        <div class="row">
            <!-- Blog Articles -->
            <div class="col-lg-8">
                <div class="mb-4">
                    <h2 class="h4 fw-bold">Latest Articles</h2>
                </div>

                <!-- Article 1 -->
                <article class="mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/800x400" class="card-img-top" alt="Article Image">
                        <div class="card-body">
                            <h3 class="card-title">Article Title 1</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum...</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </article>

                <!-- Article 2 -->
                <article class="mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/800x400" class="card-img-top" alt="Article Image">
                        <div class="card-body">
                            <h3 class="card-title">Article Title 2</h3>
                            <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque...</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </article>
            </div>
            <!-- Sidebar -->
            <aside class="col-lg-4 mt-1">
                <div class="mb-4">
                    <h2 class="h4 fw-bold mb-3">About Me</h2>
                    <p>Hello! I'm a passionate blogger who loves to write about various topics, including technology, travel, and lifestyle.</p>
                </div>

                <div class="mb-4">
                    <h2 class="h4 fw-bold mb-3">Categories</h2>
                    <ul class="list-group">
                        <li class="list-group-item">Technology</li>
                        <li class="list-group-item">Travel</li>
                        <li class="list-group-item">Lifestyle</li>
                        <li class="list-group-item">Food</li>
                        <li class="list-group-item">Health</li>
                    </ul>
                </div>
            </aside>
        </div>
    </main>
@endsection