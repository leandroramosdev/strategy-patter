<?php

namespace Services\DateMessages;

use Services\MessageDateService;

    class WeekDays implements MessageDateService {

        protected $week_days_message;

        public function __construct() {
            $this->week_days_message = [
                1 => 'Segunda-feira',
                2 => 'Terça-feira',
                3 => 'Quarta-feira',
                4 => 'Quinta-feira',
                5 => 'Sexta-feira',
                6 => 'Sábado',
                7 => 'Domingo',
            ];
        }

        function setMessage(string $date): string
        {
            $day_of_week = $this->week_days_message[$date];
            $intercector = "uma";
            if(date('w') > 5){
                $intercector = "um";
            }
            return "Bom dia e $intercector feliz $day_of_week";
        }

    }
?>