<?php

namespace App\Services;

use App\Models\ActivityLog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ActivityLogger
{
    public static function log(
        string $action,
        Model $subject,
        ?array $oldValues = null,
        ?array $newValues = null,
        ?string $description = null
    ): void {
        ActivityLog::create([
            'user_id'      => Auth::id(),
            'action'       => $action,
            'subject_type' => get_class($subject),
            'subject_id'   => $subject->id,
            'description'  => $description,
            'old_values'   => $oldValues,
            'new_values'   => $newValues,
            'ip_address'   => request()->ip(),
            'user_agent'   => request()->userAgent(),
        ]);
    }
}
