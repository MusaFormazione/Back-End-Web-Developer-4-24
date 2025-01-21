<?php

class FormHandler{
    private $form = [];
    private $action;
    private $method;
    private $availableInputAttributes = [
        'name','type','placeholder', 'required'
    ];

    public function __construct(string $action = '', string $method = '') {
        $this->action = $action;
        $this->method = $method;
    }

    private function getAttributesString($attrArr){
        $attrString = '';
        foreach($attrArr as $key => $value){
            $attrString .= ' '. $key.'="'.$value.'"';
        }
        return $attrString;
    }

    public function addInputField(array $attrArr): void{
        $attrString = $this->getAttributesString($attrArr);
        $this->form .= "<input $attrString>"; 
    }
    
    public function addSelectField(array $options, array $attrArr = []): void{
        $attrString = $this->getAttributesString($attrArr);
        $select = "<select $attrString>";
        foreach($options as $key => $value){
            $select .= "<option value=$key>$value</option>";
        }
        $select .= "</select>";  
        $this->form .= $select;
    }

    public function addSubmitBtn(string $label, array $attrArr = []): void{
        $attrString = $this->getAttributesString($attrArr);
        $button = "<button $attrString>$label</button>";  
        $this->form .= $button;
    }

    public function render(): void{
        echo "<form $this->action $this->method>$this->form</form>";
    }

}




