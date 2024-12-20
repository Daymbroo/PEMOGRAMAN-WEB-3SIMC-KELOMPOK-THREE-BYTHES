@extends('layout.main')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Decora, Add Product</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Home Furniture Input System!</li>
        </ol>

        <div class="card mb-4 shadow-sm">
            <div class="card-header d-flex justify-content-between align-items-center bg-light">
                <h5 class="mb-0">Dashboard</h5>
                <a href="{{ route('index.create') }}" class="btn btn-soft-primary rounded-circle p-3">
                    <i class="fas fa-plus fa-lg text-primary"></i>
                </a>
        
        
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Harga Jual</th>
                            <th>Harga Beli</th>
                            <th>Foto</th>
                            <th>Deskripsi</th> <!-- Added Deskripsi Column -->
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Harga Jual</th>
                            <th>Harga Beli</th>
                            <th>Foto</th>
                            <th>Deskripsi</th> <!-- Added Deskripsi Column -->
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($produk as $k)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $k->nama }}</td>
                            <td>{{ $k->kategori }}</td>
                            <td>Rp. {{ number_format($k->harga_jual, 0, ',', '.') }}</td>
                            <td>Rp. {{ number_format($k->harga_beli, 0, ',', '.') }}</td>
                            <td>
                                @empty($k->foto)
                                <img src="{{ url('image/nophoto.jpg') }}"
                                    alt="project-image" class="rounded" style="width: 100%; max-width: 100px; height: auto;">
                                @else
                                <img src="{{ url('image') }}/{{ $k->foto }}"
                                    alt="project-image" class="rounded" style="width: 100%; max-width: 100px; height: auto;">
                                @endempty
                            </td>
                            <td>{{ $k->deskripsi ?? 'No description' }}</td> <!-- Display Deskripsi -->
                            <td>
                                <a href="{{ route('index.show', $k->id) }}" class="btn btn-sm btn-outline-warning">
                                    <i class="bi bi-eye"></i> Show
                                </a>
                                <a href="{{ route('index.edit', $k->id) }}" class="btn btn-sm btn-outline-info">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $k->id }}">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>
                            </td>
                                <!-- Modal -->
                                <div class="modal fade" id="deleteModal{{$k->id}}" tabindex="-1" aria-labelledby="deleteModalLabel"
                                  aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="deleteModalLabel">Hapus Produk</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        Apakah anda yakin akan menghapus data {{$k->nama}}
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                        <form action="{{ route('index.destroy', $k->id) }}" method="POST" style="display:inline;">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>

                                      </div>
                                    </div>
                                  </div>
                                </div>
                             </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection