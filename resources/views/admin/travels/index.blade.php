@extends('admin.layouts.document', ['title' => Str::title(__('app.travels'))])

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">@langTitle('app.list')</h3>
                <span class='header-actions'>
                    <a href="{{ route('admin.travels.create') }} " class="btn btn-app new-resource">
                        <i class="fas fa-plus"></i> @langTitle('app.new')
                    </a>
                </span>
            </div>
            <div class="card-body">
                <table id="admin-table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>@langTitle('app.image')</th>
                            <th>@langTitle('app.title')</th>
                            <th>@langTitle('app.description')</th>
                            <th>@langTitle('app.travel_date')</th>
                            <th>@langTitle('app.duration_days')</th>
                            <th>@langTitle('app.price_euro')</th>
                            <th>@langTitle('app.extras')</th>
                            <th>@langTitle('app.tourists')</th>
                            <th>@langTitle('app.created_at')</th>
                            <th>@langTitle('app.updated_at')</th>
                            <th>@langTitle('app.actions')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($models as $model)
                        <tr>
                            <td>{{ ($model->id ?? '')}} </td>
                            <td>
                                <img width="100" src="{{ asset('storage/images/'.($model->image ?? " noimage.jpg"))}} ">
                                </td>
                                <td> {{ ($model->title ?? '') }} </td>
                                <td> {{ ($model->travel_date ?? '') }} </td>
                                <td> {{ ($model->description ?? '') }} </td>
                                <td> {{ ($model->duration_days ?? '') }} </td>
                                <td> {{ ($model->price_euro ?? '') }} </td>
                                <td>
                                     @foreach($model->extras as $extra)
                                        {{$extra->name ?? ''}}
                                     @endforeach
                                </td>
                                <td>
                                     @foreach($model->travels as $travel)
                                        <a href=" {{route('admin.travels.edit', $tourist)}}">
                                {{$tourist->fullName ?? ''}}
                                </a>
                                @endforeach
                            </td>
                            <td> {{ ($model->created_at ?? '') }} </td>
                            <td> {{ ($model->updated_at ?? '') }} </td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('admin.travels.edit', $model) }}" type="button"
                                        class="btn btn-info">@langTitle('app.edit')</a>
                                    <button type="button" class="btn btn-info dropdown-toggle dropdown-icon"
                                        data-toggle="dropdown" aria-expanded="false">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu" role="menu">
                                        <a onclick="event.preventDefault()" class="dropdown-item delete"
                                            href="{{ route('admin.travels.destroy', $model) }}">
                                            @langTitle('app.delete')
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>@langTitle('app.image')</th>
                            <th>@langTitle('app.title')</th>
                            <th>@langTitle('app.description')</th>
                            <th>@langTitle('app.travel_date')</th>
                            <th>@langTitle('app.duration_days')</th>
                            <th>@langTitle('app.price_euro')</th>
                            <th>@langTitle('app.extras')</th>
                            <th>@langTitle('app.tourists')</th>
                            <th>@langTitle('app.created_at')</th>
                            <th>@langTitle('app.updated_at')</th>
                            <th>@langTitle('app.actions')</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
