<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    
    protected $table = 'tickets';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'categoryt',
        'desct',
        'priority',
        'subject',
        'status'

    ];

    protected $dates = [
        
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // public function attachments()
    // {
    //     return $this->hasMany(TicketAttachment::class, 'ticket_id');
    // }


}