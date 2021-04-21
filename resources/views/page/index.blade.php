 @extends("layout.app")

 @section("content")
 <div class="container">
     <div>
         <h2>Data Barang</h2>
     </div>
     <div>
         @if(!empty(session('status')))
         <div class="alert alert-success" role="alert">
             {{ session('status') }}
         </div>
         @endif
     </div>
     <div class="row">
         @foreach($data as $item)
         <div class="col-6 my-2">
             <div class="card">
                 <div class="card-header d-inline-flex">
                     <h5 class="card-title">{{ $item->nama_barang }}</h5>
                     <div class="ml-auto" mr-0>
                         <a href="{{ route('edit', ['id'=> $item->id]) }}" class="btn btn-light btn-sm">Edit</a>
                         <form action="{{ route('delete', ['id'=> $item->id]) }}" method="post">
                             @csrf
                             @method("delete")
                             <button class="btn btn-sm btn-success" type="submit">Sudah Ditemukan!</button>
                         </form>
                     </div>
                 </div>
                 <div class="card-body">
                     <p class="card-text">{{ $item->deskripsi }}</p>
                 </div>
                 <div class="card-footer">
                     <p class="d-inline card-link">{{ $item->nama }}</p>
                     <p class="d-inline card-link">{{ $item->no_hp }}</p>
                 </div><br>

             </div>
         </div>
         @endforeach
     </div>
 </div>
 @endsection