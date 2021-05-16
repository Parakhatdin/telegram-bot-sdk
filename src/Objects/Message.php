<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class Message
 * @property InlineKeyboardMarkup reply_markup
 * @property VoiceChatParticipantsInvited voice_chat_participants_invited
 * @property VoiceChatEnded voice_chat_ended
 * @property VoiceChatStarted voice_chat_started
 * @property VoiceChatScheduled voice_chat_scheduled
 * @property ProximityAlertTriggered proximity_alert_triggered
 * @property PassportData passport_data
 * @property string connected_website
 * @property SuccessfulPayment successful_payment
 * @property Invoice invoice
 * @property Message pinned_message
 * @property int migrate_from_chat_id
 * @property int migrate_to_chat_id
 * @property MessageAutoDeleteTimerChanged message_auto_delete_timer_changed
 * @property bool|true channel_chat_created
 * @property bool|true supergroup_chat_created
 * @property bool|true group_chat_created
 * @property bool|true delete_chat_photo
 * @property PhotoSize[] new_chat_photo
 * @property string new_chat_title
 * @property User left_chat_member
 * @property User[] new_chat_members
 * @property Location location
 * @property Venue venue
 * @property Poll poll
 * @property Game game
 * @property Dice dice
 * @property Contact contact
 * @property MessageEntity[] caption_entities
 * @property string caption
 * @property Voice voice
 * @property VideoNote video_note
 * @property Video video
 * @property Sticker sticker
 * @property PhotoSize[] photo
 * @property Document document
 * @property Audio audio
 * @property Animation animation
 * @property MessageEntity[] entities
 * @property string text
 * @property string author_signature
 * @property string media_group_id
 * @property int edit_date
 * @property User via_bot
 * @property Message reply_to_message
 * @property int forward_date
 * @property string forward_sender_name
 * @property string forward_signature
 * @property int forward_from_message_id
 * @property Chat forward_from_chat
 * @property User forward_from
 * @property Chat chat
 * @property int date
 * @property Chat sender_chat
 * @property User from
 * @property int message_id
 * @package Parakhatdin\Bot\Objects
 */
class Message extends ObjectAbstract
{

    /**
     * Message constructor.
     */
    public function __construct(
        int $message_id,
        User $from,
        Chat $sender_chat,
        int $date,
        Chat $chat,
        User $forward_from,
        Chat $forward_from_chat,
        int $forward_from_message_id,
        string $forward_signature,
        string $forward_sender_name,
        int $forward_date,
        Message $reply_to_message,
        User $via_bot,
        int $edit_date,
        string $media_group_id,
        string $author_signature,
        string $text,
        array $entities,
        Animation $animation,
        Audio $audio,
        Document $document,
        array $photo,
        Sticker $sticker,
        Video $video,
        VideoNote $video_note,
        Voice $voice,
        string $caption,
        array $caption_entities,
        Contact $contact,
        Dice $dice,
        Game $game,
        Poll $poll,
        Venue $venue,
        Location $location,
        array $new_chat_members,
        User $left_chat_member,
        string $new_chat_title,
        array $new_chat_photo,
        bool $delete_chat_photo,
        bool $group_chat_created,
        bool $supergroup_chat_created,
        bool $channel_chat_created,
        MessageAutoDeleteTimerChanged $message_auto_delete_timer_changed,
        int $migrate_to_chat_id,
        int $migrate_from_chat_id,
        Message $pinned_message,
        Invoice $invoice,
        SuccessfulPayment $successful_payment,
        string $connected_website,
        PassportData $passport_data,
        ProximityAlertTriggered $proximity_alert_triggered,
        VoiceChatScheduled $voice_chat_scheduled,
        VoiceChatStarted $voice_chat_started,
        VoiceChatEnded $voice_chat_ended,
        VoiceChatParticipantsInvited $voice_chat_participants_invited,
        InlineKeyboardMarkup $reply_markup
    )
    {
        $this->message_id = $message_id;
        $this->from = $from;
        $this->sender_chat = $sender_chat;
        $this->date = $date;
        $this->chat = $chat;
        $this->forward_from = $forward_from;
        $this->forward_from_chat = $forward_from_chat;
        $this->forward_from_message_id = $forward_from_message_id;
        $this->forward_signature = $forward_signature;
        $this->forward_sender_name = $forward_sender_name;
        $this->forward_date = $forward_date;
        $this->reply_to_message = $reply_to_message;
        $this->via_bot = $via_bot;
        $this->edit_date = $edit_date;
        $this->media_group_id = $media_group_id;
        $this->author_signature = $author_signature;
        $this->text = $text;
        $this->entities = $entities;
        $this->animation = $animation;
        $this->audio = $audio;
        $this->document = $document;
        $this->photo = $photo;
        $this->sticker = $sticker;
        $this->video = $video;
        $this->video_note = $video_note;
        $this->voice = $voice;
        $this->caption = $caption;
        $this->caption_entities = $caption_entities;
        $this->contact = $contact;
        $this->dice = $dice;
        $this->game = $game;
        $this->poll = $poll;
        $this->venue = $venue;
        $this->location = $location;
        $this->new_chat_members = $new_chat_members;
        $this->left_chat_member = $left_chat_member;
        $this->new_chat_title = $new_chat_title;
        $this->new_chat_photo = $new_chat_photo;
        $this->delete_chat_photo = $delete_chat_photo;
        $this->group_chat_created = $group_chat_created;
        $this->supergroup_chat_created = $supergroup_chat_created;
        $this->channel_chat_created = $channel_chat_created;
        $this->message_auto_delete_timer_changed = $message_auto_delete_timer_changed;
        $this->migrate_to_chat_id = $migrate_to_chat_id;
        $this->migrate_from_chat_id = $migrate_from_chat_id;
        $this->pinned_message = $pinned_message;
        $this->invoice = $invoice;
        $this->successful_payment = $successful_payment;
        $this->connected_website = $connected_website;
        $this->passport_data = $passport_data;
        $this->proximity_alert_triggered = $proximity_alert_triggered;
        $this->voice_chat_scheduled = $voice_chat_scheduled;
        $this->voice_chat_started = $voice_chat_started;
        $this->voice_chat_ended = $voice_chat_ended;
        $this->voice_chat_participants_invited = $voice_chat_participants_invited;
        $this->reply_markup = $reply_markup;
    }


    public static function makeFromArray(array $data): Message
    {
        // TODO: Implement makeFromArray() method.
    }
}