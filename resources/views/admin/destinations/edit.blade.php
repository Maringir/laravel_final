@extends('admin.layouts.document', ['title' => Str::title(__('app.destinations'))])

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">@langTitle('app.edit') [{{ ($model->fullName ?? '')  }}][{{ $model->id ?? '' }}]</h3>
        </div>
        <form action="{{ route('admin.destinations.update', $model) }}" method="POST">
            @method('put')
            @csrf
            <input type="hidden" name="id" value="{{ $model->id ?? '' }}">
            <div class="card-body">
                <div class="form-group">
                    <div class="form-group">
                        <label for="country">@langTitle('app.first_name')</label>
                        <input type="text" class="form-control" name="country" id="country"
                            value="{{ $model->country ?? '' }}" placeholder="@lang('app.country')">
                    </div>

                    <div class="form-group">
                        <label for="description">@langTitle('app.description')</label>
                        <input type="text" class="form-control" name="description" id="description"
                            value="{{ $model->description ?? '' }}" placeholder="@lang('app.description')">
                    </div>
                </div>

                <div class="form-group">
                    <label for="population">@langTitle('app.population')</label>
                    <input type="number" class="form-control" name="population"
                        value="{{ $model->population ?? '' }}" id="population" placeholder="@lang('app.population')">
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">@langTitle('app.submit')</button>
            </div>
        </form>
    </div>
@endsection
