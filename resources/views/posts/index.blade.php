@extends('template')
 
@section('quantity')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Membuat CRUD Jualan - Sinau YOK</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('posts.create') }}"> Create Post</a>
            </div>
        </div>
    </div>

    {{-- //untuk memunculkan comenan di hapus klo berhasil --}}
 
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
 
    <table class="table table-bordered">
        <tr>
            <th width="75px" class="text-center">ID</th>
            <th width="75px" class="text-center">Nama Barang</th>
            <th width="75px" class="text-center">PRICE</th>
            {{-- <th>Title</th> --}}
            <th width="75px"class="text-center">Action</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $post->nama_barang }}</td>
            <td>{{ $post->price }}</td>
            <td class="text-center">
                <form Action="{{ route('posts.destroy',$post->id) }}" method="POST">
 
                    <a class="btn btn-info btn-sm" href="{{ route('posts.show',$post->id) }}">Show</a>
 
                    <a class="btn btn-primary btn-sm" href="{{ route('posts.edit',$post->id) }}">Edit</a>
 
                    @csrf
                    @method('DELETE')

                   
 
                    {{-- <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button> --}}


                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>

                    {{-- <a class="btn btn-danger" type="submit" onclick="return confirm ('serius mau di apus nih?') "href="/upload/hapus/{{ $post->id }}">DELATE</a> --}}


                    {{-- $('.hapus').on("click",function() {
                        var id = $(this).attr('data-id');
                        $.ajax({
                               url : "{{url('hapuskelas')}}/"+id,
                               type: "POST",
                               success: function(data)
                               {	
                                   window.location ="{{url('kelas')}}";							
                               }				
                            }); --}}

                    
                </form>
            </td>
        </tr>
        @endforeach
    </table>
 
    {!! $posts->links() !!}
 
@endsection