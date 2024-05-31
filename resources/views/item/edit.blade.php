@include('layouts.header')

@include('layouts.navbar')

@include('layouts.sidebar')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Edit Item</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('items.update', $item->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" id="nama" name="nama" class="form-control" value="{{ $item->nama }}" required>
                        </div>
                        <div class="form-group">
                            <label for="dagangan">Dagangan:</label>
                            <input type="text" id="dagangan" name="dagangan" class="form-control" value="{{ $item->dagangan }}" required>
                        </div>
                        <div class="form-group">
                            <label for="kontak">Kontak:</label>
                            <input type="text" id="kontak" name="kontak" class="form-control" value="{{ $item->kontak }}" required>
                        </div>
                        <div class="form-group">
                            <label for="longitude">Longitude:</label>
                            <input type="text" id="longitude" name="longitude" class="form-control" value="{{ $item->longitude }}" required>
                        </div>
                        <div class="form-group">
                            <label for="latitude">Latitude:</label>
                            <input type="text" id="latitude" name="latitude" class="form-control" value="{{ $item->latitude }}" required>
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')