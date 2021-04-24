<?php


namespace Parakhatdin\Telegram\AvailableTypes;


/**
 * Class Message
 * @package Parakhatdin\Telegram\AvailableTypes
 */
class Message
{
    /**
     * @var int
     */
    private $message_id;
    /**
     * @var User
     */
    private $from;
    /**
     * @var Chat
     */
    private $sender_chat;
    /**
     * @var int
     */
    private $date;
    /**
     * @var Chat
     */
    private $chat;
    /**
     * @var User
     */
    private $forward_from;
    /**
     * @var Chat
     */
    private $forward_from_chat;
    /**
     * @var int
     */
    private $forward_from_message_id;
    /**
     * @var string
     */
    private $forward_signature;
    /**
     * @var string
     */
    private $forward_sender_name;
    /**
     * @var int
     */
    private $forward_date;
    /**
     * @var Message
     */
    private $reply_to_message;
    /**
     * @var User
     */
    private $via_bot;
    /**
     * @var int
     */
    private $edit_date;
    /**
     * @var string
     */
    private $media_group_id;
    /**
     * @var string
     */
    private $author_signature;
    /**
     * @var string
     */
    private $text;
    /**
     * @var MessageEntity[]
     */
    private $entities;
    /**
     * @var Animation
     */
    private $animation;
    /**
     * @var Audio
     */
    private $audio;
    /**
     * @var Document
     */
    private $document;
    /**
     * @var PhotoSize[]
     */
    private $photo;
    /**
     * @var Sticker
     */
    private $sticker;
    /**
     * @var Video
     */
    private $video;
    /**
     * @var VideoNote
     */
    private $video_note;
    /**
     * @var Voice
     */
    private $voice;
    /**
     * @var string
     */
    private $caption;
    /**
     * @var MessageEntity[]
     */
    private $caption_entities;
    /**
     * @var Contact
     */
    private $contact;
    /**
     * @var Dice
     */
    private $dice;
    /**
     * @var Game
     */
    private $game;
    /**
     * @var Pool
     */
    private $poll;
    /**
     * @var Venue
     */
    private $venue;
    /**
     * @var Location
     */
    private $location;
    /**
     * @var User[]
     */
    private $new_chat_members;
    /**
     * @var User
     */
    private $left_chat_member;
    /**
     * @var string
     */
    private $new_chat_title;
    /**
     * @var PhotoSize[]
     */
    private $new_chat_photo;
    /**
     * @var true
     */
    private $delete_chat_photo;
    /**
     * @var true
     */
    private $group_chat_created;
    /**
     * @var true
     */
    private $supergroup_chat_created;
    /**
     * @var true
     */
    private $channel_chat_created;
    /**
     * @var MessageAutoDeleteTimerChanged
     */
    private $message_auto_delete_timer_changed;
    /**
     * @var int
     */
    private $migrate_to_chat_id;
    /**
     * @var int
     */
    private $migrate_from_chat_id;
    /**
     * @var Message
     */
    private $pinned_message;
    /**
     * @var Invoice
     */
    private $invoice;
    /**
     * @var SuccessfulPayment
     */
    private $successful_payment;
    /**
     * @var string
     */
    private $connected_website;
    /**
     * @var PasswordData
     */
    private $passport_data;
    /**
     * @var ProximityAlertTriggered
     */
    private $proximity_alert_triggered;
    /**
     * @var VoiceChatStarted
     */
    private $voice_chat_started;
    /**
     * @var VoiceChatEnded
     */
    private $voice_chat_ended;
    /**
     * @var VoiceChatParticipantsInvited
     */
    private $voice_chat_participants_invited;
    /**
     * @var InlineKeyboardMarkup
     */
    private $reply_markup;

    /**
     * Message constructor.
     * @param int $message_id
     * @param int $date
     * @param Chat $chat
     */
    public function __construct(int $message_id, int $date, Chat $chat)
    {
        $this->message_id = $message_id;
        $this->date = $date;
        $this->chat = $chat;
    }

    /**
     * @param User $from
     */
    public function setFrom(User $from): void
    {
        $this->from = $from;
    }

    /**
     * @param Chat $sender_chat
     */
    public function setSenderChat(Chat $sender_chat): void
    {
        $this->sender_chat = $sender_chat;
    }

    /**
     * @param User $forward_from
     */
    public function setForwardFrom(User $forward_from): void
    {
        $this->forward_from = $forward_from;
    }

    /**
     * @param Chat $forward_from_chat
     */
    public function setForwardFromChat(Chat $forward_from_chat): void
    {
        $this->forward_from_chat = $forward_from_chat;
    }

    /**
     * @param int $forward_from_message_id
     */
    public function setForwardFromMessageId(int $forward_from_message_id): void
    {
        $this->forward_from_message_id = $forward_from_message_id;
    }

    /**
     * @param string $forward_signature
     */
    public function setForwardSignature(string $forward_signature): void
    {
        $this->forward_signature = $forward_signature;
    }

    /**
     * @param string $forward_sender_name
     */
    public function setForwardSenderName(string $forward_sender_name): void
    {
        $this->forward_sender_name = $forward_sender_name;
    }

    /**
     * @param int $forward_date
     */
    public function setForwardDate(int $forward_date): void
    {
        $this->forward_date = $forward_date;
    }

    /**
     * @param Message $reply_to_message
     */
    public function setReplyToMessage(Message $reply_to_message): void
    {
        $this->reply_to_message = $reply_to_message;
    }

    /**
     * @param User $via_bot
     */
    public function setViaBot(User $via_bot): void
    {
        $this->via_bot = $via_bot;
    }

    /**
     * @param int $edit_date
     */
    public function setEditDate(int $edit_date): void
    {
        $this->edit_date = $edit_date;
    }

    /**
     * @param string $media_group_id
     */
    public function setMediaGroupId(string $media_group_id): void
    {
        $this->media_group_id = $media_group_id;
    }

    /**
     * @param string $author_signature
     */
    public function setAuthorSignature(string $author_signature): void
    {
        $this->author_signature = $author_signature;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

    /**
     * @param MessageEntity[] $entities
     */
    public function setEntities(array $entities): void
    {
        $this->entities = $entities;
    }

    /**
     * @param Animation $animation
     */
    public function setAnimation(Animation $animation): void
    {
        $this->animation = $animation;
    }

    /**
     * @param Audio $audio
     */
    public function setAudio(Audio $audio): void
    {
        $this->audio = $audio;
    }

    /**
     * @param Document $document
     */
    public function setDocument(Document $document): void
    {
        $this->document = $document;
    }

    /**
     * @param PhotoSize[] $photo
     */
    public function setPhoto(array $photo): void
    {
        $this->photo = $photo;
    }

    /**
     * @param Sticker $sticker
     */
    public function setSticker(Sticker $sticker): void
    {
        $this->sticker = $sticker;
    }

    /**
     * @param Video $video
     */
    public function setVideo(Video $video): void
    {
        $this->video = $video;
    }

    /**
     * @param VideoNote $video_note
     */
    public function setVideoNote(VideoNote $video_note): void
    {
        $this->video_note = $video_note;
    }

    /**
     * @param Voice $voice
     */
    public function setVoice(Voice $voice): void
    {
        $this->voice = $voice;
    }

    /**
     * @param string $caption
     */
    public function setCaption(string $caption): void
    {
        $this->caption = $caption;
    }

    /**
     * @param MessageEntity[] $caption_entities
     */
    public function setCaptionEntities(array $caption_entities): void
    {
        $this->caption_entities = $caption_entities;
    }

    /**
     * @param Contact $contact
     */
    public function setContact(Contact $contact): void
    {
        $this->contact = $contact;
    }

    /**
     * @param Dice $dice
     */
    public function setDice(Dice $dice): void
    {
        $this->dice = $dice;
    }

    /**
     * @param Game $game
     */
    public function setGame(Game $game): void
    {
        $this->game = $game;
    }

    /**
     * @param Pool $poll
     */
    public function setPoll(Pool $poll): void
    {
        $this->poll = $poll;
    }

    /**
     * @param Venue $venue
     */
    public function setVenue(Venue $venue): void
    {
        $this->venue = $venue;
    }

    /**
     * @param Location $location
     */
    public function setLocation(Location $location): void
    {
        $this->location = $location;
    }

    /**
     * @param User[] $new_chat_members
     */
    public function setNewChatMembers(array $new_chat_members): void
    {
        $this->new_chat_members = $new_chat_members;
    }

    /**
     * @param User $left_chat_member
     */
    public function setLeftChatMember(User $left_chat_member): void
    {
        $this->left_chat_member = $left_chat_member;
    }

    /**
     * @param string $new_chat_title
     */
    public function setNewChatTitle(string $new_chat_title): void
    {
        $this->new_chat_title = $new_chat_title;
    }

    /**
     * @param PhotoSize[] $new_chat_photo
     */
    public function setNewChatPhoto(array $new_chat_photo): void
    {
        $this->new_chat_photo = $new_chat_photo;
    }

    /**
     * @param true $delete_chat_photo
     */
    public function setDeleteChatPhoto($delete_chat_photo): void
    {
        $this->delete_chat_photo = $delete_chat_photo;
    }

    /**
     * @param true $group_chat_created
     */
    public function setGroupChatCreated($group_chat_created): void
    {
        $this->group_chat_created = $group_chat_created;
    }

    /**
     * @param true $supergroup_chat_created
     */
    public function setSupergroupChatCreated($supergroup_chat_created): void
    {
        $this->supergroup_chat_created = $supergroup_chat_created;
    }

    /**
     * @param true $channel_chat_created
     */
    public function setChannelChatCreated($channel_chat_created): void
    {
        $this->channel_chat_created = $channel_chat_created;
    }

    /**
     * @param MessageAutoDeleteTimerChanged $message_auto_delete_timer_changed
     */
    public function setMessageAutoDeleteTimerChanged(MessageAutoDeleteTimerChanged $message_auto_delete_timer_changed): void
    {
        $this->message_auto_delete_timer_changed = $message_auto_delete_timer_changed;
    }

    /**
     * @param int $migrate_to_chat_id
     */
    public function setMigrateToChatId(int $migrate_to_chat_id): void
    {
        $this->migrate_to_chat_id = $migrate_to_chat_id;
    }

    /**
     * @param int $migrate_from_chat_id
     */
    public function setMigrateFromChatId(int $migrate_from_chat_id): void
    {
        $this->migrate_from_chat_id = $migrate_from_chat_id;
    }

    /**
     * @param Message $pinned_message
     */
    public function setPinnedMessage(Message $pinned_message): void
    {
        $this->pinned_message = $pinned_message;
    }

    /**
     * @param Invoice $invoice
     */
    public function setInvoice(Invoice $invoice): void
    {
        $this->invoice = $invoice;
    }

    /**
     * @param SuccessfulPayment $successful_payment
     */
    public function setSuccessfulPayment(SuccessfulPayment $successful_payment): void
    {
        $this->successful_payment = $successful_payment;
    }

    /**
     * @param string $connected_website
     */
    public function setConnectedWebsite(string $connected_website): void
    {
        $this->connected_website = $connected_website;
    }

    /**
     * @param PasswordData $passport_data
     */
    public function setPassportData(PasswordData $passport_data): void
    {
        $this->passport_data = $passport_data;
    }

    /**
     * @param ProximityAlertTriggered $proximity_alert_triggered
     */
    public function setProximityAlertTriggered(ProximityAlertTriggered $proximity_alert_triggered): void
    {
        $this->proximity_alert_triggered = $proximity_alert_triggered;
    }

    /**
     * @param VoiceChatStarted $voice_chat_started
     */
    public function setVoiceChatStarted(VoiceChatStarted $voice_chat_started): void
    {
        $this->voice_chat_started = $voice_chat_started;
    }

    /**
     * @param VoiceChatEnded $voice_chat_ended
     */
    public function setVoiceChatEnded(VoiceChatEnded $voice_chat_ended): void
    {
        $this->voice_chat_ended = $voice_chat_ended;
    }

    /**
     * @param VoiceChatParticipantsInvited $voice_chat_participants_invited
     */
    public function setVoiceChatParticipantsInvited(VoiceChatParticipantsInvited $voice_chat_participants_invited): void
    {
        $this->voice_chat_participants_invited = $voice_chat_participants_invited;
    }

    /**
     * @param InlineKeyboardMarkup $reply_markup
     */
    public function setReplyMarkup(InlineKeyboardMarkup $reply_markup): void
    {
        $this->reply_markup = $reply_markup;
    }

    /**
     * @return int
     */
    public function getMessageId(): int
    {
        return $this->message_id;
    }

    /**
     * @return User
     */
    public function getFrom(): User
    {
        return $this->from;
    }

    /**
     * @return Chat
     */
    public function getSenderChat(): Chat
    {
        return $this->sender_chat;
    }

    /**
     * @return int
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * @return Chat
     */
    public function getChat(): Chat
    {
        return $this->chat;
    }

    /**
     * @return User
     */
    public function getForwardFrom(): User
    {
        return $this->forward_from;
    }

    /**
     * @return Chat
     */
    public function getForwardFromChat(): Chat
    {
        return $this->forward_from_chat;
    }

    /**
     * @return int
     */
    public function getForwardFromMessageId(): int
    {
        return $this->forward_from_message_id;
    }

    /**
     * @return string
     */
    public function getForwardSignature(): string
    {
        return $this->forward_signature;
    }

    /**
     * @return string
     */
    public function getForwardSenderName(): string
    {
        return $this->forward_sender_name;
    }

    /**
     * @return int
     */
    public function getForwardDate(): int
    {
        return $this->forward_date;
    }

    /**
     * @return Message
     */
    public function getReplyToMessage(): Message
    {
        return $this->reply_to_message;
    }

    /**
     * @return User
     */
    public function getViaBot(): User
    {
        return $this->via_bot;
    }

    /**
     * @return int
     */
    public function getEditDate(): int
    {
        return $this->edit_date;
    }

    /**
     * @return string
     */
    public function getMediaGroupId(): string
    {
        return $this->media_group_id;
    }

    /**
     * @return string
     */
    public function getAuthorSignature(): string
    {
        return $this->author_signature;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return MessageEntity[]
     */
    public function getEntities(): array
    {
        return $this->entities;
    }

    /**
     * @return Animation
     */
    public function getAnimation(): Animation
    {
        return $this->animation;
    }

    /**
     * @return Audio
     */
    public function getAudio(): Audio
    {
        return $this->audio;
    }

    /**
     * @return Document
     */
    public function getDocument(): Document
    {
        return $this->document;
    }

    /**
     * @return PhotoSize[]
     */
    public function getPhoto(): array
    {
        return $this->photo;
    }

    /**
     * @return Sticker
     */
    public function getSticker(): Sticker
    {
        return $this->sticker;
    }

    /**
     * @return Video
     */
    public function getVideo(): Video
    {
        return $this->video;
    }

    /**
     * @return VideoNote
     */
    public function getVideoNote(): VideoNote
    {
        return $this->video_note;
    }

    /**
     * @return Voice
     */
    public function getVoice(): Voice
    {
        return $this->voice;
    }

    /**
     * @return string
     */
    public function getCaption(): string
    {
        return $this->caption;
    }

    /**
     * @return MessageEntity[]
     */
    public function getCaptionEntities(): array
    {
        return $this->caption_entities;
    }

    /**
     * @return Contact
     */
    public function getContact(): Contact
    {
        return $this->contact;
    }

    /**
     * @return Dice
     */
    public function getDice(): Dice
    {
        return $this->dice;
    }

    /**
     * @return Game
     */
    public function getGame(): Game
    {
        return $this->game;
    }

    /**
     * @return Pool
     */
    public function getPoll(): Pool
    {
        return $this->poll;
    }

    /**
     * @return Venue
     */
    public function getVenue(): Venue
    {
        return $this->venue;
    }

    /**
     * @return Location
     */
    public function getLocation(): Location
    {
        return $this->location;
    }

    /**
     * @return User[]
     */
    public function getNewChatMembers(): array
    {
        return $this->new_chat_members;
    }

    /**
     * @return User
     */
    public function getLeftChatMember(): User
    {
        return $this->left_chat_member;
    }

    /**
     * @return string
     */
    public function getNewChatTitle(): string
    {
        return $this->new_chat_title;
    }

    /**
     * @return PhotoSize[]
     */
    public function getNewChatPhoto(): array
    {
        return $this->new_chat_photo;
    }

    /**
     * @return true
     */
    public function getDeleteChatPhoto()
    {
        return $this->delete_chat_photo;
    }

    /**
     * @return true
     */
    public function getGroupChatCreated()
    {
        return $this->group_chat_created;
    }

    /**
     * @return true
     */
    public function getSupergroupChatCreated()
    {
        return $this->supergroup_chat_created;
    }

    /**
     * @return true
     */
    public function getChannelChatCreated()
    {
        return $this->channel_chat_created;
    }

    /**
     * @return MessageAutoDeleteTimerChanged
     */
    public function getMessageAutoDeleteTimerChanged(): MessageAutoDeleteTimerChanged
    {
        return $this->message_auto_delete_timer_changed;
    }

    /**
     * @return int
     */
    public function getMigrateToChatId(): int
    {
        return $this->migrate_to_chat_id;
    }

    /**
     * @return int
     */
    public function getMigrateFromChatId(): int
    {
        return $this->migrate_from_chat_id;
    }

    /**
     * @return Message
     */
    public function getPinnedMessage(): Message
    {
        return $this->pinned_message;
    }

    /**
     * @return Invoice
     */
    public function getInvoice(): Invoice
    {
        return $this->invoice;
    }

    /**
     * @return SuccessfulPayment
     */
    public function getSuccessfulPayment(): SuccessfulPayment
    {
        return $this->successful_payment;
    }

    /**
     * @return string
     */
    public function getConnectedWebsite(): string
    {
        return $this->connected_website;
    }

    /**
     * @return PasswordData
     */
    public function getPassportData(): PasswordData
    {
        return $this->passport_data;
    }

    /**
     * @return ProximityAlertTriggered
     */
    public function getProximityAlertTriggered(): ProximityAlertTriggered
    {
        return $this->proximity_alert_triggered;
    }

    /**
     * @return VoiceChatStarted
     */
    public function getVoiceChatStarted(): VoiceChatStarted
    {
        return $this->voice_chat_started;
    }

    /**
     * @return VoiceChatEnded
     */
    public function getVoiceChatEnded(): VoiceChatEnded
    {
        return $this->voice_chat_ended;
    }

    /**
     * @return VoiceChatParticipantsInvited
     */
    public function getVoiceChatParticipantsInvited(): VoiceChatParticipantsInvited
    {
        return $this->voice_chat_participants_invited;
    }

    /**
     * @return InlineKeyboardMarkup
     */
    public function getReplyMarkup(): InlineKeyboardMarkup
    {
        return $this->reply_markup;
    }




}