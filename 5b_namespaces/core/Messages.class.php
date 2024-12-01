<?php
namespace Core;

class Messages {
    private $errors = [];
    private $infos = [];

    public function addError($message) {
        $this->errors[] = $message;
    }

    public function addInfo($message) {
        $this->infos[] = $message;
    }

    public function getErrors() {
        return $this->errors;
    }

    public function getInfos() {
        return $this->infos;
    }

    public function isError() {
        return count($this->errors) > 0;
    }
}
?>
