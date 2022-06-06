<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporter extends Model
{
    use HasFactory;

    protected $fillable=[
        'fullname','email','phone','DateOfaccident','Registredownerofvehicle','PersonDrivingThevehicle','VehicleRegistration','LocationOfAccident','Describeaccident','status','user_id',
    ];
}
