@include('layouts.header')

@include('layouts.navbar')

@include('layouts.sidebar')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Create Item</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('items.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" id="nama" name="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="dagangan">Dagangan:</label>
                            <textarea id="dagangan" name="dagangan" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="kontak">Kontak:</label>
                            <textarea id="kontak" name="kontak" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="longitude">Longitude:</label>
                            <textarea id="longitude" name="longitude" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="latitude">Latitude:</label>
                            <textarea id="latitude" name="latitude" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')
