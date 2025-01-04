@extends('layouts.standard')
@section('body')
<style>
    body {
        background-color: #f8f9fa;
    }
    .container {
        margin-top: 50px;
    }
</style>
<div class="container">
    <h2 class="mb-4">Dashboard Blog</h2>

    <!-- Button untuk Tambah Blog -->
    <button class="btn btn-primary mb-3" id="addBlogBtn">Tambah Blog</button>

    <!-- Tabel Blog -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>#</th>
                <th>#</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody id="blogTable">
            <!-- Data Blog Akan Ditambahkan Di Sini -->
        </tbody>
    </table>
</div>
@endsection