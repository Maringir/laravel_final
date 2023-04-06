@extends('admin.layouts.document', ['title' => Str::title(__('app.extras'))])

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">@langTitle('app.new')</h3>
    </div>
    <form action="{{ route('admin.extras.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="title">@langTitle('app.title')</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="@lang('app.name')">
            </div>

            <div class="form-group">
                <label for="description">@langTitle('app.description')</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="@lang('app.description')">
            </div>

            <div class="form-group">
                <label for="price_euro">@langTitle('app.price_euro')</label>
                <input type="numeric" class="form-control" maxlength="10000" name="price_euro" id="price_euro" placeholder="@lang('app.price_euro')">
            </div>

            <x-forms.multi-relation-select :tagName="'name'" :relationItems="$names" />

            <x-forms.multi-relation-select :tagName="'description'" :relationItems="$descriptions" />

            <x-forms.multi-relation-select :tagName="'price_euro'" :relationItems="$price_euros" />


            <div class="form-group">
                <x-forms.image-input :label="'cover-image'" :inputName="'image'" :oldInputName="'old_cover_image'"/>
            </div>

            <div class="form-group">
                <x-forms.image-input :label="'images'" :inputName="'images[]'" :oldInputName="'old_images[]'"/>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">@langTitle('app.submit')</button>
        </div>
    </form>
</div>
@endsection
