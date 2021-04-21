 @extends("layout.app")

 @section ("content")
 <div class="container">
     <h1>Data Kehilangan</h1>
     <!-- @if($errors->any())
     <div class="alert alert-danger">
         <ul>
             @foreach($errors->all() as $item)
             <li>{{ $item }}</li>
             @endforeach
         </ul>
     </div>
     @endif -->
     <form action="{{ route('store') }}" method="post">
         @csrf
         <div class="form-group">
             <label for="formGroupExampleInput">Nama Pemilik</label>
             <input type="text" class="form-control" name="nama" placeholder="Nama Pemilik" value="{{ old('nama') }}">
             @error('nama')
             <p class="text-sm text-danger">{{ $message }}</p>
             @enderror
         </div>
         <div class="form-group">
             <label for="formGroupExampleInput2">No Pemilik</label>
             <input type="text" class="form-control" name="no_hp" placeholder="Nomor Pemilik" value="{{ old('no_hp') }}">
             @error('no_hp')
             <p class=" text-sm text-danger">{{ $message }}</p>
             @enderror
         </div>
         <div class="form-group">
             <label for="formGroupExampleInput2">Nama Barang</label>
             <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang" value="{{ old('nama_barang') }}">
             @error('nama_barang')
             <p class=" text-sm text-danger">{{ $message }}</p>
             @enderror
         </div>
         <div class="form-group">
             <label for="formGroupExampleInput2">Deskripsi Barang</label>
             <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi Barang" value="{{ old('deskripsi') }}">
             @error('deskripsi')
             <p class=" text-sm text-danger">{{ $message }}</p>
             @enderror
         </div>
         <div class="form-group">
             <button type="submit" class="btn btn-success"> Submit </button>
         </div>
     </form>
 </div>
 @endsection