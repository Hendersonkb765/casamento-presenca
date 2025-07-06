<?php
use Carbon\Carbon;
class GenerateCalendarUrl{

    public static function generate(){
        $dataLocal = '25 de outubro 2025 16:00';
        $dataUTC = Carbon::createFromFormat('d \d\e F Y H:i', $dataLocal, 'America/Sao_Paulo')
                ->utc()
                ->format('Ymd\THis\Z');

        return $dataLocal .''. $dataUTC;
    }
}