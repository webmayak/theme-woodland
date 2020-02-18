<?php

namespace frontend\themes\woodland\widgets\specialsTimer;

use yii\base\Widget;

class SpecialsTimer extends Widget
{
    /* @var string */
    public $date;

    /**
     * @return string
     */
    public function run() : string
    {
        parent::run();
        $dateISO = preg_replace('/^(\d{2})\.(\d{2})\.(\d{4})$/', '$3-$2-$1', $this->date);
        $dateTimestamp = strtotime($dateISO . ' 23:59:59');
        $nowTimestamp = time();
        $diff = $dateTimestamp - $nowTimestamp;
        return $this->render('index', [
            'date' => $this->date,
            'timeLeft' => $this->formatTimeLeft($diff),
        ]);
    }

    /**
     * @param $seconds
     * @return string
     */
    private function formatTimeLeft($seconds) : string
    {
        $daysLeft = ceil($seconds / 86400);
        return $daysLeft . ' дней';
    }
}
