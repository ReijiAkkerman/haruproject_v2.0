<?php
    class Time {
        public $year;
        public $month;
        public $day;
        public $hour;
        public $minute;
        
        public const leap_year_days = [31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        public const normal_year_days = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

        protected $year_start;
        protected $month_start;
        protected $day_start;
        protected $year_end;
        protected $month_end;
        protected $day_end;

        function __construct($year, $month, $day, $hour = null, $minute = null) {
            $this->year = $year;
            $this->month = $month;
            $this->day = $day;
            $this->hour = $hour;
            $this->minute = $minute;
        }

        public function getCalendarDays() {
            
        }

        protected function getCalendarStart($year, $month, $day) {
            $this->year_start = $year;
            $this->month_start = $month;
            $this->day_start = $day;
        }

        protected function getCalendarEnd($year, $month, $day) {
            $this->year_end = $year;
            $this->month_end = $month;
            $this->day_end = $day;
        }

    }