@extends('layouts.header')

@include('layouts.navbar')

@include('layouts.sidebar')

<div class="container mt-10">
  <div class="row justify-content-center">
    <div class="row">
      <div class="col-40">
        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title">Data Pedagang</h3>
            <a href="{{ route('items.create') }}" class="btn btn-primary">Create Item</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Dagangan</th>
                  <th>Kontak</th>
                  <th>Latitude</th>
                  <th>Longitude</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($items as $item)
                  <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->dagangan }}</td>
                    <td>{{ $item->kontak }}</td>
                    <td>{{ $item->latitude }}</td>
                    <td>{{ $item->longitude }}</td>
                    <td>
                      <a href="{{ route('items.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                      <form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table> 
          </div> 
        </div> 
      </div>
    </div>
  </div>
</div>
        {{--<thead>
        <tr>
          <th>Nama</th>
          <th>Dagangan</th>
          <th>Kontak</th>
          <th>Latitude</th>
          <th>longitude</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>Agus</td>
          <td>Nasi Goreng</td>
          <td>082783749323</td>
          <td>0.000</td>
          <td>23.89</td>
        </tr>
        <tr>
          <td>Adi</td>
          <td>Bakso Bakar</td>
          <td>0826376473</td>
          <td>0.983</td>
          <td>23.89</td>
        </tr>
        <tr>
          <td>Sani</td>
          <td>Batagor</td>
          <td>089727673672</td>
          <td>5.000</td>
          <td>33.00</td>
        </tr>
        <tr>
          <td>Aming</td>
          <td>Siomay</td>
          <td>0872565663</td>
          <td>890.9</td>
          <td>2.889</td>
        </tr>
        <tr>
          <td>Risma</td>
          <td>Es dawet</td>
          <td>0873555622</td>
          <td>363.8</td>
          <td>2.222</td>
        </tr>
        <tr>
          <td>Bundara</td>
          <td>Sosis Goreng</td>
          <td>08276126372</td>
          <td>87.00</td>
          <td>12.99</td>
        </tr>
        <tr>
          <td>Rindaman</td>
          <td>Kue Putu</td>
          <td>0812772722</td>
          <td>656.4</td>
          <td>12.33</td>
        </tr>
        <tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div> --}}

@include('layouts.footer')
