@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.recipe.title') }}
    </div>

    <div class="card-body">
        <div class="mb-3">
            <div class="mb-3">
                <a class="btn btn-light" href="{{ route('admin.recipes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.recipe.fields.id') }}
                        </th>
                        <td>
                            {{ $recipe->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.recipe.fields.name') }}
                        </th>
                        <td>
                            {{ $recipe->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.recipe.fields.ingredients') }}
                        </th>
                        <td>
                            @foreach($recipe->ingredients as $key => $ingredients)
                                <div class="label label-info">{{ $ingredients->name }} ({{ $ingredients->pivot->amount }})</div>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="mb-0">
                <a class="btn btn-light" href="{{ route('admin.recipes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
