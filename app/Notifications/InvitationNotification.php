<?php

namespace App\Notifications;

use App\Models\Invitation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class InvitationNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * @var Invitation
     */
    private $invitation;

    /**
     * Create a new notification instance.
     *
     * @param Invitation $invitation
     */
    public function __construct(Invitation $invitation)
    {
        $this->invitation = $invitation;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('Hi, thanks for singing up for early access.')
            ->line('We have rolled out our services to selected group for now, and you are in.')
            ->action('Create Account', url(route('seller.register', ['email' => $this->invitation->email])))
            ->line('Invitation Code: ' . $this->invitation->code)
            ->line('Your email address: ' . $this->invitation->email)
            ->line('')
            ->line('Invitation code is valid for one time use only. Dont share with anyone.');
    }
}
