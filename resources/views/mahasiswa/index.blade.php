@extends('layouts.dasbhoard')

@section('content')

            <div class="card">
                <div class="card-header">
                    {{ __('Mahasiswa') }}
                <a href="{{ route('mahasiswa.create')}}" class="btn btn-primary float-end">
                 Create</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>

                                <th width="150">Action</th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach ($mahasiswa as $item )
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->tempat_lahir }}</td>
                                <td>{{ $item->tanggal_lahir }}</td>

                                <td>
                                    <a href="{{ route('mahasiswa.edit',$item->id)}}"
                                        class="btn btn-primary float-end">
                                        Edit</a>
                                        {!! Form::model($item,[
                                            'method' => 'DELETE',
                                            'route'=>['mahasiswa.destroy', $item->id]]
                                            ) !!}
                                        {!! Form::submit('Delete', ['class'=>'btn btn-danger'])!!}
                                        {!! Form::close()!!}

                                </td>


                            </tr>

                            @endforeach
                        </tbody>

                    </table>
                    {!! $mahasiswa->Links() !!}
                </div>
            </div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

    $('.btn-danger').on('click',function(e){
        e.preventDefault()
        let form = $(this).closest('form')

    Swal.fire({
  title: "Are you sure?",
  text: "You won't be able to revert this!",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes, delete it!"
}).then((result) => {
    if (result.isConfirmed) {
        form.submit()
    }


});
    })

</script>





@endsection
