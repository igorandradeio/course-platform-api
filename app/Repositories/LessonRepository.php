<?php

namespace App\Repositories;

use App\Models\Lesson;

class LessonRepository
{
    protected $entity;

    public function __construct(Lesson $lesson)
    {
        $this->entity = $lesson;
    }

    public function getLessonsByModuleId(string $moduleId)
    {
        return $this->entity->where('module_id', $moduleId)->get();
    }

    public function getLesson(string $entity)
    {
        return $this->entity->findOrFail($entity);
    }


    public function markLessonViewed(string $lessonId)
    {
        $user = auth()->user();

        $view = $user->views()->where('lesson_id', $lessonId)->first();
        if ($view) {
            return $view->update([
                'qty' => $view->qty + 1
            ]);
        }

        return $user->views()->create([
            'lesson_id' => $lessonId
        ]);
    }
}
