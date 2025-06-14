<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait HandlesBookCover
{
    public function uploadCover(UploadedFile $cover): string
    {
        return $cover->store('book_covers', 'public');
    }

    public function deleteCover(?string $coverPath): void
    {
        if ($coverPath && Storage::disk('public')->exists($coverPath)) {
            Storage::disk('public')->delete($coverPath);
        }
    }
}
