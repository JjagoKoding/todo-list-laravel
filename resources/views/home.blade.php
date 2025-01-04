@extends('layouts.standard')
@section('body')
    <style>
        body {
            padding-top: 56px;
        }
    </style>
    <x-navbar></x-navbar>
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
                        <img src="https://muslimahnews.net/wp-content/uploads/2022/03/feminism-as-a-marketing-tool-a-blessing-and-a-curse-800x400-1.jpg" class="card-img-top" alt="Article Image">
                        <div class="card-body">
                            <h3 class="card-title">Toleransi</h3>
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
            <aside class="col-lg-4">
                <div class="">
                    <h2 class="h4 fw-bold mt-1" style="margin-bottom: 19.8px">Categories</h2>
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