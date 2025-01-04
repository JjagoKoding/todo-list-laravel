@extends('layouts.standard')
@section('body')
<div class="container">
    <div class="row justify-content-center" style="height: 100vh; align-items: center;">
        <div class="col-md-5">
            <div class="card p-4">
                <h3 class="text-center mb-4">Login</h3>
                <form>
                    <!-- Input Username -->
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Masukkan username" required>
                    </div>

                    <!-- Input Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Masukkan password" required>
                    </div>

                    <!-- Button Login -->
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection