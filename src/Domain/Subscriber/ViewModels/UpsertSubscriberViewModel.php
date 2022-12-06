<?php

namespace Domain\Subscriber\ViewModels;

use Domain\Shared\ViewModels\ViewModel;
use Domain\Subscriber\DataTransferObjects\SubscriberData;
use Domain\Subscriber\Models\Subscriber;

class UpsertSubscriberViewModel extends ViewModel{
    
    public function __construct(public readonly ?Subscriber $subscriber = null){}

    public function subscriber(): ?SubscriberData
    {
        if(!$this->subscriber){
            return null;
        }

        return SubscriberData::from($this->subscriber->load('tags', 'form'));
    }

}