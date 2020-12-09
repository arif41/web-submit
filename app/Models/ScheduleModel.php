<?php

namespace App\Models;

use CodeIgniter\Model;

class ScheduleModel extends Model
{
    protected $allowedFields = [
        'nama', 'tanggal', 'lokasi', 'kepentingan', 'divisi'

    ];
    protected $table = 'schedule';
}
