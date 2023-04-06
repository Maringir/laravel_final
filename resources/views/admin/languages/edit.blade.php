@extends('admin.layouts.document', ['title' => Str::title(__('app.languages'))])

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">@langTitle('app.edit') [{{ ($model->fullName ?? '')  }}][{{ $model->id ?? '' }}]</h3>
        </div>
        <form action="{{ route('admin.languages.update', $model) }}" method="POST">
            @method('put')
            @csrf
            <input type="hidden" name="id" value="{{ $model->id ?? '' }}">
            <div class="card-body">
                <div class="form-group">
                    <div class="form-group">
                        <label for="name">@langTitle('app.name')</label>
                        <input type="text" class="form-control" name="name" id="name"
                            value="{{ $model->name ?? '' }}" placeholder="@lang('app.name')">
                    </div>

                    <div class="form-group">
                        <label for="abbr">@langTitle('app.abbr')</label>
                        <input type="text" class="form-control" name="abbr" id="abbr"
                            value="{{ $model->abbr ?? '' }}" placeholder="@lang('app.abbr')">
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">@langTitle('app.submit')</button>
            </div>
        </form>
    </div>
@endsection
