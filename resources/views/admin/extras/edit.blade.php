@extends('admin.layouts.document', ['title' => Str::title(__('app.extras'))])

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">@langTitle('app.edit') [{{ $model->title ?? '' }}][{{ $model->id ?? '' }}]</h3>
        </div>
        <form action="{{ route('admin.extras.update', $model) }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <input type="hidden" name="id" value="{{ $model->id ?? '' }}">
            <div class="card-body">
                <div class="form-group">
                    <label for="title">@langTitle('app.name')</label>
                    <input type="text" class="form-control" name="name" value="{{ $model->name ?? '' }}"
                        id="title" placeholder="@lang('app.name')">
                </div>

                <div class="form-group">
                    <label for="description">@langTitle('app.description')</label>
                    <input type="text" class="form-control" name="description"
                        value="{{ $model->description ?? '' }}" id="description" placeholder="@lang('app.description')">
                </div>

                <div class="form-group">
                    <label for="price_euro">@langTitle('app.price_euro')</label>
                    <input type="number" class="form-control" max="1000" name="price_euro"
                        value="{{ $model->price_euro ?? '' }}" id="price_euro" placeholder="@lang('app.price_euro')">
                </div>


                <x-forms.multi-relation-select :tagName="'name'" :model="$model" :relationItems="$names" />

                <x-forms.multi-relation-select :tagName="'description'" :model="$model" :relationItems="$descriptions" />

                <x-forms.multi-relation-select :tagName="'price_euros'" :model="$model" :relationItems="$price_euros" :optionDisplay="'fullName'" />

                <div class="form-group">
                    <x-forms.image-input :images="[$model->image]" :label="'cover-image'" :inputName="'image'" :oldInputName="'old_cover_image'"/>
                </div>

                <div class="form-group">
                    <x-forms.image-input :images="$model->images"  :label="'images'" :inputName="'images[]'" :oldInputName="'old_images[]'"/>
                </div>

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">@langTitle('app.submit')</button>
            </div>
        </form>
    </div>
@endsection
