<?php

namespace OpenSpaceLife;

use Illuminate\Database\Eloquent\Model;

class Job extends Model {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'description', 'team_id'];
}
