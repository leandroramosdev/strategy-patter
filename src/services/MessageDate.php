<?
namespace Services;

// Strategy
interface MessageDateService{
    function setMessage(string $date): string;
}

// Context
class MessageDate {

    private $service;

    function __construct (MessageDateService $service){
        $this->service = $service;
    }

    function setService(MessageDateService $service){
        $this->service = $service;
    }

    function setMessage($string) {
        $message = $this->service->setMessage($string);
        return $message;
    }

}