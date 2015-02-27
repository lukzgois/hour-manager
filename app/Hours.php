<?php namespace HourManager;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Hours
 * @package HourManager
 */
class Hours extends Model {

    /**
     * Fillable fields for the hour object
     * @var array
     */
    public $fillable = [
        'date',
        'time'
    ];

    /**
     * Parse the date for the correct database format and create a new hour instance
     *
     * @param array $attributes
     * @return static
     */
    public static function register(array $attributes)
    {
        $attributes['date'] = Carbon::createFromFormat('d/m/Y', $attributes['date'])
            ->format('Y-m-d');

        return new static($attributes);
    }

    public static function allGroupedByDate()
    {
        $hours = self::all();

        if( ! $hours) return [];

        $grouped = [];
        foreach($hours as $hour) {
            $grouped[$hour->date][] = $hour->time;
        }

        return $grouped;

    }

}
