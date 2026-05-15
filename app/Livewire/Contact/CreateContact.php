<?php

namespace App\Livewire\Contact;

use App\Models\Contact;
use Livewire\Attributes\Rule;
use Livewire\Component;

// #[Layout('components.layouts.app')]
class CreateContact extends Component
{
    #[Rule('required')]
    public string $name = '';

    #[Rule('required')]
    public string $email = '';

    #[Rule('required')]
    public string $phone = '';

    #[Rule('required')]
    public string $address = '';

    #[Rule('required')]
    public string $description = '';

    public function createContact()
    {
        $data = $this->validate();
        Contact::create($data);
        $this->reset();
        flash()->success('Thank you! Your message has been sent successfully.');
    }

    public function render()
    {
        return view('livewire.contact.create-contact');
    }
}
