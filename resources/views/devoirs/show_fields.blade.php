<!-- Titre Field -->
<div class="col-sm-12">
    {!! Form::label('titre', 'Titre:') !!}
    <p>{{ $devoir->titre }}</p>
</div>

<!-- Objet Field -->
<div class="col-sm-12">
    {!! Form::label('objet', 'Objet:') !!}
    <p>{{ $devoir->objet }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $devoir->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $devoir->updated_at }}</p>
</div>

