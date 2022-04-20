<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class Rant extends Component
{
    public $payload;
    public $country;
    public $tags;

    public function mount(Message $message)
    {
        $this->payload = $message->payload;
        $this->country = $message->geoLocation()->pluck('country_code')->values();
        $this->tags = $message->tags()->select('name')->get();
    }

    public function getTitleProperty()
    {
        return mb_strimwidth($this->payload, 0, 20, '...');
    }

    public function render()
    {
        return view('livewire.rant');
    }
}
