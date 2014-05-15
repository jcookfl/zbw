<?php

class TrainingSession extends Eloquent {
	protected $guarded = ['cid', 'sid'];
	protected $table = 'controller_training_sessions';
	public $rules;

    //scopes
    /**
     * @param $query eloquent query
     * @param $date \Carbon object
     * @return Eloquent query
     */
    public function scopeOlder($query, $date)
    {
        return $query->where('session_date', '<', $date);
    }

    /**
     * @param $query eloquent query
     * @param $date \Carbon object
     * @return Eloquent query
     */
    public function scopeNewer($query, $date)
    {
      return $query->where('session_date', '>', $date);
    }

    //relations
    /**
     * @return User
     */
    public function student()
    {
        return $this->belongsTo('User', 'cid', 'cid');
    }

    /**
     * @return User
     */
    public function staff()
    {
        return $this->belongsTo('User', 'sid', 'cid');
    }

    public function trainingReport()
    {
        return $this->belongsTo('TrainingReport', 'training_session_id', 'id');
    }

    /**
     * @return TrainingFacility
     */
    public function facility()
    {
        return $this->hasOne('TrainingFacility', 'id', 'facility_id');
    }

    public function trainingType()
    {
        return $this->hasOne('TrainingType', 'id', 'training_type_id');
    }

    /**
     * @return WeatherType
     */
    public function weatherType()
    {
        return $this->hasOne('WeatherType', 'id', 'weather_id');
    }

    /**
     * @return ComplexityType
     */
    public function complexityType()
    {
        return $this->hasOne('ComplexityType', 'id', 'complexity_id');
    }

    /**
     * @return WorkloadType
     */
    public function workloadType()
    {
        return $this->hasOne('WorkloadType', 'id', 'workload_id');
    }
}
