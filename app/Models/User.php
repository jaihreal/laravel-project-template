<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Contracts\Activity;
class User extends Authenticatable
{
  use HasApiTokens, HasFactory, Notifiable, HasUuids, SoftDeletes, LogsActivity;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
		'first_name',
		'middle_name',
		'last_name',
		'email',
		'password',
		'role',
  ];

  public function getActivitylogOptions(): LogOptions
	{
		return LogOptions::defaults()
			->logOnly(['role', 'first_name', 'middle_name', 'last_name', 'email'])
			->dontSubmitEmptyLogs()
			->setDescriptionForEvent(fn(string $eventName) => "User record has been {$eventName}.")
			->useLogName('User')
			->logOnlyDirty();
			// Chain fluent methods for configuration options
	}

	public function tapActivity(Activity $activity, string $eventName)
	{
		$activity->causedBy(auth()->user());
	}

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */
  protected $hidden = [
    'password',
    'remember_token',
  ];

  /**
   * The attributes that should be cast.
   *
   * @var array<string, string>
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
		'password' => 'hashed',
  ];
}
