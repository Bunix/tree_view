<?php
namespace App\Services;

use DateTime;
use DateTimeZone;

class WaktuService
{
    public function waktu()
    {
        $get = new DateTime('now', new DateTimeZone('Asia/Kuala_Lumpur'));
        $time = $get->format('H:i');

        return $time;
    }
}