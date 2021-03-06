<?php

namespace App;

use App\Task;
use App\User;
use App\RecordsActivity;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use RecordsActivity;

    /**
     * Attributes to guard agains mass assignment
     * 
     * @var array
     */
    protected $guarded = [];    

    /**
     * Get the path to the project
     * 
     * @return string
     */
    public function path()
    {
        return "/projects/{$this->id}";
    }

    /**
     * The owner of the project
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The tasks assoicated with the project
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    /**
     * Add a task to the project.
     * 
     * @param string $body
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function addTask($body)
    {
        return $this->tasks()->create(compact('body'));
    }

    /**
     * Add multiple tasks to the project.
     * 
     * @param array $tasks
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function addTasks($tasks)
    {
        return $this->tasks()->createMany($tasks);
    }

    /**
     * Invite a user to the project
     */
    public function invite(User $user)
    {
        return $this->members()->attach($user);
    }

    public function members()
    {
        return $this->belongsToMany(User::class, 'project_members')->withTimestamps();
    }

    /**
     * Get the activity for the project
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activity()
    {
        return $this->hasMany(Activity::class)->latest();
    }
}
