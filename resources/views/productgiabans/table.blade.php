<table class="table table-responsive" id="productgiabans-table">
    <thead>
        <tr>
            <th>Name</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($productgiabans as $productgiaban)
        <tr>
            <td>{!! $productgiaban->name !!}</td>
            <td>
                {!! Form::open(['route' => ['productgiabans.destroy', $productgiaban->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('productgiabans.show', [$productgiaban->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('productgiabans.edit', [$productgiaban->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>