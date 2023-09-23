<?php

namespace Services\DateMessages;

use Services\MessageDateService;

    class SpecialDays implements MessageDateService {

        protected $special_days_message;

        public function __construct() {
            //Esses dados poderiam ser provenientes de uma API
            $this->special_days_message = [
                '01_01' => 'Ano Novo!',
                '02_11' => 'Finados!',
                '12_12' => 'Dia das Crianças!',
                '25_12' => 'Natal!',
            ];
        }

        function setMessage(string $date): string
        {
            $message = '';
            if(isset($this->special_days_message[$date])){
                $special_day = $this->special_days_message[$date];
                $message = "Feliz $special_day";
            }
            

            return '<br>' . $message;
        }

    }
?>