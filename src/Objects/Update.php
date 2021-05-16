<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class Update
 *
 * @property int update_id
 * @property ChatMemberUpdated chat_member
 * @property ChatMemberUpdated my_chat_member
 * @property PollAnswer poll_answer
 * @property Poll poll
 * @property PreCheckoutQuery pre_checkout_query
 * @property ShippingQuery shipping_query
 * @property CallbackQuery callback_query
 * @property ChosenInlineResult chosen_inline_result
 * @property InlineQuery inline_query
 * @property Message edited_channel_post
 * @property Message channel_post
 * @property Message edited_message
 * @property Message message
 *
 * @package Parakhatdin\Telegram\Objects
 */
class Update extends ObjectAbstract
{

    /**
     * Update constructor.
     */
    public function __construct(
        int $update_id,
        Message $message = null,
        Message $edited_message = null,
        Message $channel_post = null,
        Message $edited_channel_post = null,
        InlineQuery $inline_query = null,
        ChosenInlineResult $chosen_inline_result = null,
        CallbackQuery $callback_query = null,
        ShippingQuery $shipping_query = null,
        PreCheckoutQuery $pre_checkout_query = null,
        Poll $poll = null,
        PollAnswer $poll_answer = null,
        ChatMemberUpdated $my_chat_member = null,
        ChatMemberUpdated $chat_member = null
    )
    {
        $this->update_id = $update_id;
        $this->message = $message;
        $this->edited_message = $edited_message;
        $this->channel_post = $channel_post;
        $this->edited_channel_post = $edited_channel_post;
        $this->inline_query = $inline_query;
        $this->chosen_inline_result = $chosen_inline_result;
        $this->callback_query = $callback_query;
        $this->shipping_query = $shipping_query;
        $this->pre_checkout_query = $pre_checkout_query;
        $this->poll = $poll;
        $this->poll_answer = $poll_answer;
        $this->my_chat_member = $my_chat_member;
        $this->chat_member = $chat_member;
    }

    public static function makeFromArray(array $data): Update
    {
        $update = new Update($data["update_id"]);
        foreach ($data as $key => $value) {
            $update->$key = $value;
        }
        $update->message = Message::makeFromArray($data["message"]);
        $update->edited_message = Message::makeFromArray($data["edited_message"]);
        $update->channel_post = Message::makeFromArray($data["channel_post"]);
        $update->edited_channel_post = Message::makeFromArray($data["edited_channel_post"]);
        return $update;
    }
}