@extends('admin.layouts.document', ['title' => Str::title(__('app.destinations'))])

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">@langTitle('app.new')</h3>
    </div>
    <form action="{{ route('admin.destinations.store') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="country">@langTitle('app.country')</label>
                <input type="text" class="form-control" name="country" id="country" placeholder="@lang('country')">
            </div>

            <div class="form-group">
                <label for="description">@langTitle('app.description')</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="@lang('description')">
            </div>

            <div class="form-group">
                <label for="population">@langTitle('app.population')</label>
                <input type="number" class="form-control" name="population" id="population" placeholder="@lang('population')">
            </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">@langTitle('app.submit')</button>
        </div>
    </form>
</div>
@endsection
