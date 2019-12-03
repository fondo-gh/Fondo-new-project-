<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Startup extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'user_id','name', 'description', 'image', 'type', 'category', 'pitch', 'key_resources', 'value_proposition', 'revenue_model',
        'cost_structure', 'financials', 'customer_target', 'sale_channels', 'key_metrics', 'business_model',
        'research_cost', 'administration_cost', 'marketing_cost', 'profit'
    ];


    /**
     * Startup belongs to user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo(User::class);
    }
}
