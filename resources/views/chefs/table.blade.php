<div class="table-responsive">
    <table class="table" id="chefs-table">
        <thead>
            <tr>
                <th>Nama Chef</th>
                <th>Deskripsi</th>
                <th>Foto</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($chefs as $chef)
                <tr>
                    <td>{{ $chef->nama_chef }}</td>
                    <td>{{ $chef->deskripsi }}</td>
                    <td><img src="{{ asset($chef->foto) }}" alt="" width="100px"></td>
                    <td width="120">
                        {!! Form::open(['route' => ['chefs.destroy', $chef->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('chefs.show', [$chef->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('chefs.edit', [$chef->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', [
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-xs',
                                'onclick' => "return confirm('Are you sure?')",
                            ]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
