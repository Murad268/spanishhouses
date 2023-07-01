<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HeaderComponent extends Component
{
    public $contacts;
    public$wp;
    public$rus;
    public$esp;
    public $fb;
    public $insta;
    public $logo;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $contacts, $logo)
    {
        $this->contacts = $contacts;
        $this->wp = $contacts->whatsapp_number;
        $this->rus = $contacts->russian_number;
        $this->esp = $contacts->spanish_number;
        $this->fb = $contacts->instagram_link;
        $this->insta = $contacts->facebook_link;
        $this->logo = $logo->logo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        return view('components.header-component', ['wp' => $this->wp, 'esp' => $this->esp, 'fb' => $this->fb, 'insta' => $this->insta, 'logo' => $this->logo]);
    }
}
