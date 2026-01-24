<?php

namespace App\Observers;

use App\Models\Task;
use App\Services\ActivityLogger;

class TaskObserver
{
    /**
     * Handle the Task "created" event.
     */
    public function created(Task $task): void
    {

        ActivityLogger::log(
            'created',
            $task,
            null,
            $task->toArray(),
            "Created task: {$task->title}"
        );
    }

    /**
     * Handle the Task "updated" event.
     */
    public function updated(Task $task): void
    {
        $changes = $task->getChanges();
        $original = $task->getOriginal();

        // remove timestamps noise
        unset($changes['updated_at']);

        if (empty($changes)) return;

        $before = array_intersect_key($original, $changes);

        ActivityLogger::log(
            'updated',
            $task,
            $before,
            $changes,
            "Updated task: {$task->title}"
        );
    }

    /**
     * Handle the Task "deleted" event.
     */
    public function deleted(Task $task): void
    {
        ActivityLogger::log(
            'deleted',
            $task,
            $task->toArray(),
            null,
            "Deleted task: {$task->title}"
        );
    }

    /**
     * Handle the Task "restored" event.
     */
    public function restored(Task $task): void
    {
        //
    }

    /**
     * Handle the Task "force deleted" event.
     */
    public function forceDeleted(Task $task): void
    {
        //
    }
}
