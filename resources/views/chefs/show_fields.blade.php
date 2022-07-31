<!-- Nama Chef Field -->
<div class="col-sm-12">
    {!! Form::label('nama_chef', 'Nama Chef:') !!}
    <p>{{ $chef->nama_chef }}</p>
</div>

<!-- Deskripsi Field -->
<div class="col-sm-12">
    {!! Form::label('deskripsi', 'Deskripsi:') !!}
    <p>{{ $chef->deskripsi }}</p>
</div>

<!-- Foto Field -->
<div class="col-sm-12">
    {!! Form::label('foto', 'Foto:') !!}
    <p><img src="{{ asset($chef->foto) }}" alt="" width="200px"></p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $chef->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $chef->updated_at }}</p>
</div>
