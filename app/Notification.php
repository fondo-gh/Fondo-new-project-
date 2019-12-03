<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
      'startup_id', 'admin_id','user_id'
    ];

    /**
     * Notification is intended to user/Entrepreneur when ad investor has interest in user's startup
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo(User::class);
    }


    /**
     * Notification is on the startup an invest expresses interest in
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function startup() {
        return $this->belongsTo(Startup::class);
    }

    /**
     * Notification is made by admin/Investor, when they invest in a startup
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function admin() {
        return $this->belongsTo(Admin::class);
    }
}
