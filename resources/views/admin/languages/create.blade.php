@extends('admin.layouts.document', ['title' => Str::title(__('app.languages'))])

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">@langTitle('app.new')</h3>
    </div>
    <form action="{{ route('admin.languages.store') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">@langTitle('app.name')</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="@lang('name')">
            </div>

            <div class="form-group">
                <label for="abbr">@langTitle('app.abbr')</label>
                <input type="text" class="form-control" name="abbr" id="abbr" placeholder="@lang('abbr')">
            </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">@langTitle('app.submit')</button>
        </div>
    </form>
</div>
@endsection
