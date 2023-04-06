@extends('admin.layouts.document', ['title' => Str::title(__('app.destinations'))])

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">@langTitle('app.list')</h3>
                <span class='header-actions'>
                    <a href="{{ route('admin.destinations.create') }} " class="btn btn-app new-resource">
                        <i class="fas fa-plus"></i> @langTitle('app.new')
                    </a>
                </span>
            </div>
            <div class="card-body">
                <table id="admin-table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>@langTitle('app.country')</th>
                            <th>@langTitle('app.description')</th>
                            <th>@langTitle('app.population') </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($models as $model)
                        <tr>
                            <td>{{ $model->id ?? '' }} </td>
                            {{-- <td>
                                <img width="100" src="{{ ($model->image ?? '')}} ">
                            </td> --}}
                            <td> {{ $model->country ?? '' }} </td>
                            <td> {{ $model->description ?? '' }} </td>
                            <td> {{ $model->population ?? '' }} </td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('admin.destinations.edit', $model) }}" type="button"
                                        class="btn btn-info">@langTitle('app.edit')</a>
                                    <button type="button" class="btn btn-info dropdown-toggle dropdown-icon"
                                        data-toggle="dropdown" aria-expanded="false">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu" role="menu">
                                        <a onclick="event.preventDefault()" class="dropdown-item delete"
                                            href="{{ route('admin.destinations.destroy', $model) }}">
                                            @langTitle('app.delete')
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                    <th>ID</th>
                    <th>@langTitle('app.country')</th>
                    <th>@langTitle('app.description')</th>
                    <th>@langTitle('app.population') </th>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
