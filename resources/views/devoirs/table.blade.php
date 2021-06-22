<div class="table-responsive">
    <table class="table" id="devoirs-table">
        <thead>
            <tr>
                <th>Titre</th>
        <th>Objet</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($devoirs as $devoir)
            <tr>
                <td>{{ $devoir->titre }}</td>
            <td>{{ $devoir->objet }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['devoirs.destroy', $devoir->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('devoirs.show', [$devoir->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('devoirs.edit', [$devoir->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
