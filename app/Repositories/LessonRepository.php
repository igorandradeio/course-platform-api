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
}
