 @extends("layout.app")

 @section ("content")
 <div class="container">
     <h1>Data Kehilangan</h1>
     <form action="{{ route('update', [ 'id'=>$item->id ]) }}" method="post">
         @csrf
         @method("put")
         <div class="form-group">
             <label for="formGroupExampleInput">Nama Pemilik</label>
             <input type="text" class="form-control" name="nama" placeholder="Nama Pemilik" value="{{ $item->nama }}">
         </div>
         <div class="form-group">
             <label for="formGroupExampleInput2">No Pemilik</label>
             <input type="text" class="form-control" name="no_hp" placeholder="Nomor Pemilik" value="{{ $item->no_hp }}">
         </div>
         <div class="form-group">
             <label for="formGroupExampleInput2">Nama Barang</label>
             <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang" value="{{ $item->nama_barang }}">
         </div>
         <div class="form-group">
             <label for="formGroupExampleInput2">Deskripsi Barang</label>
             <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi Barang" value="{{ $item->deskripsi }}">
         </div>
         <div class="form-group">
             <button type="submit" class="btn btn-success"> Submit </button>
         </div>
     </form>
 </div>
 @endsection