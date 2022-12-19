<?php

class Date
{
    private $day;
    private $month;
    private $year;
    public $date;

    public function __construct($day, $month, $year, $date = 0)
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;

        $this->date = "$this->day.$this->month.$this->year";
    }
    public function diffDate(Date $date)
    {
        $date1 = strtotime($this->date);
        $date2 = strtotime($date->date);
        $datediff = ABS($date1 - $date2);
        echo floor($datediff / (60 * 60 * 24));
    }

    public function format($str)
    {

        if ($str == 'ru') {
            return date('d.m.Y', strtotime($this->date));
        } elseif ($str == 'en') {
            return date('Y-m-d', strtotime($this->date));
        }
    }

    public function minusDay($val)
    {

        return date('d.m.Y', strtotime($this->date . " -$val day"));
    }
    public function getDateOfWeek()
    {

        return date('l', strtotime($this->date));
    }
}

$date = new Date(1, 2, 2001);
echo $date->minusDay(4);
echo ("\n");
echo $date->getDateOfWeek();
echo ("\n");
echo $date->format('ru');
echo ("\n");
echo $date->format('en');
echo ("\n");
$date2 = new Date(1, 4, 2001);
echo $date->diffDate($date2);
