<?php

namespace App\Models;


use App\Models\Extra;
use App\Models\Destination;
use App\Models\Language;
use App\Models\TravelImage;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Travel extends Model
{
    //use HasFactory;
    use SoftDeletes;

    protected $table = 'travels';
    protected $fillable = [
        'title',
        'description',
        'travel_date',
        'duration_days',
        'image',
        'price_euro',
    ];


    public $with = ['extras', 'languages', 'destinations', 'tourists', 'images'];


    public function extras(): BelongsToMany
    {
        return $this->belongsToMany(Extra::class);
    }

    /**
     * @return BelongsToMany
     */
    public function languages(): BelongsToMany
    {
        return $this->belongsToMany(Language::class);
    }

    /**
     * @return BelongsToMany
     */
    public function destinations(): BelongsToMany
    {
        return $this->belongsToMany(Destination::class);
    }

    /**
     * @return BelongsToMany
     */
    public function tourists(): BelongsToMany
    {
        return $this->belongsToMany(Tourist::class);
    }

    /**
     * @return HasMany
     */
    public function images(): HasMany
    {
        return $this->hasMany(TravelImage::class);
    }

    public static function customCreate(Request $request): self
    {
        return DB::transaction(function () use ($request) {
            $image = $request->file('image');
            $inputs = $request->input();
            $inputs['image'] = $image?->getClientOriginalName() ?? 'noimage.jpg';

            $travel = self::create($inputs);
            $travel->syncAll($request);

            //Upload and insert multiple images
            if ($images = $request->file('images')) {
                $images = $travel->uploadImages($images);
                $travel->insertImages($images);
            }

            //Upload cover image
            if ($image = $request->file('image')) {
                $images = $travel->uploadImages([$image]);
            }

            return $travel;
        });
    }

    public function customUpdate(Request $request): self
    {
        DB::transaction(function () use ($request) {
            //Old images
            $oldImages = $request->input('old_images') ?? [];
            //Detach old images
            MovieImage::where('travel_id', $this->id)->whereNotIn('title', $oldImages)->forceDelete();

            //Upload and insert multiple images

            if ($images = $request->file('images')) {
                $images = $this->uploadImages($images);
                $this->insertImages($images);
            }

            //Upload cover image
            $inputs = $request->input();
            if ($image = $request->file('image')) {
                $images = $this->uploadImages([$image]);
            }

            $inputs['image'] = $request->file('image')?->getClientOriginalName() ?? $request->get('old_cover_image') ?? 'noimage.jpg';

            $this->syncAll($request)->fill($inputs)->save();
        });

        return $this;
    }

    public function insertImages($images): self
    {
        collect($images)->each(function (string $item, int $key) {
            TravelImage::updateOrCreate([
                'title' => $item,
                'travel_id' => $this->id
            ]);
        });

        return $this;
    }

    public function syncAll(Request $request): self
    {
        $this->extras()->sync($request->get('extras'));
        $this->destinations()->sync($request->get('destinations'));
        $this->languages()->sync($request->get('languages'));
        $this->tourists()->sync($request->get('tourists'));

        return $this;
    }

    public function uploadImages(array $images): array
    {
        $paths = [];
        foreach ($images as $image) {

            if (!$image instanceof UploadedFile) {
                throw new \Exception('Instance of Illuminate\Http\UploadedFile file expected');
            }

            $imageName = $image->getClientOriginalName();
            $paths[] = $imageName;

            if (Storage::exists("public/images/$imageName")) {
                continue;
            }

            $image->storeAs(
                'public/images',
                $image->getClientOriginalName()
            );
        }

        return $paths;
    }
}

