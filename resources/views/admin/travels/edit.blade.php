@extends('admin.layouts.document', ['title' => Str::title(__('app.travels'))])

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">@langTitle('app.edit') [{{ $model->title ?? '' }}][{{ $model->id ?? '' }}]</h3>
        </div>
        <form action="{{ route('admin.travels.update', $model) }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <input type="hidden" name="id" value="{{ $model->id ?? '' }}">
            <div class="card-body">
                <div class="form-group">
                    <label for="title">@langTitle('app.title')</label>
                    <input type="text" class="form-control" name="title" value="{{ $model->title ?? '' }}"
                        id="title" placeholder="@lang('app.title')">
                </div>

                <div class="form-group">
                    <label for="travel-date">@langTitle('app.travel_date')</label>
                    <input type="date" class="form-control" name="travel_date"
                        value="{{ $model->travel_date ?? '' }}" id="release-date" placeholder="@lang('app.travel_date')">
                </div>

                <div class="form-group">
                    <label for="description">@langTitle('app.description')</label>
                    <input type="text" class="form-control" name="description" value="{{ $model->description ?? '' }}"
                        id="description" placeholder="@lang('app.description')">
                </div>

                <div class="form-group">
                    <label for="duration_days">@langTitle('app.duration_days')</label>
                    <input type="number" class="form-control" max="1000" name="duration_days"
                        value="{{ $model->duration_days ?? '' }}" id="duration_days" placeholder="@lang('app.duration_days')">
                </div>

                <div class="form-group">
                    <label for="price_euro">@langTitle('app.price_euro')</label>
                    <input type="text" class="form-control" maxlength="5" name="price_euro"
                        value="{{ $model->price_euro ?? '' }}" id="price_euro" placeholder="@lang('app.price_euro')">
                </div>

                <x-forms.multi-relation-select :tagName="'extras'" :model="$model" :relationItems="$extras" />

                <x-forms.multi-relation-select :tagName="'languages'" :model="$model" :relationItems="$languages" />

                <x-forms.multi-relation-select :tagName="'destinations'" :model="$model" :relationItems="$destinations" />

                <x-forms.multi-relation-select :tagName="'tourists'" :model="$model" :relationItems="$tourists" :optionDisplay="'fullName'" />

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
