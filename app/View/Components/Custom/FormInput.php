<?php

namespace App\View\Components\Custom;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormInput extends Component
{
    public $formElementType, $width, $margin, $labelTitle, $model, $inputType, $inputId, $placeholder, $options, $value, $isRequired, $location, $avatar;

    /**
     * Create a new component instance.
     */
    public function __construct($formElementType, $width = null, $margin = null, $labelTitle, $model, $inputType = null, $inputId = null, $placeholder = null, $options = null, $value = null, $isRequired = null, $location = null, $avatar = null)
    {
        $this->formElementType = $formElementType;
        $this->width = $width;
        $this->margin = $margin;
        $this->labelTitle = $labelTitle;
        $this->model = $model;
        $this->inputType = $inputType;
        $this->inputId = $inputId;
        $this->placeholder = $placeholder;
        $this->options = $options;
        $this->value = $value;
        $this->isRequired = $isRequired;
        $this->location = $location;
        $this->avatar = $avatar;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.custom.form-input');
    }
}
