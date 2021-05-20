<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class Poll
 *
 * @property int|null close_date
 * @property int|null open_period
 * @property array|null explanation_entities
 * @property string|null explanation
 * @property int|null correct_option_id
 * @property bool allows_multiple_answers
 * @property string type
 * @property bool is_anonymous
 * @property bool is_closed
 * @property int total_voter_count
 * @property array options
 * @property string question
 * @property string id
 *
 * @package Parakhatdin\Bot\Objects
 */
class Poll extends ObjectAbstract
{
    /**
     * Poll constructor.
     */
    public function __construct
    (
        string $id,
        string $question,
        array $options,
        int $total_voter_count,
        bool $is_closed,
        bool $is_anonymous,
        string $type,
        bool $allows_multiple_answers,
        ?int $correct_option_id,
        ?string $explanation,
        ?array $explanation_entities,
        ?int $open_period,
        ?int $close_date
    )
    {
        $this->id = $id;
        $this->question = $question;
        $this->options = $options;
        $this->total_voter_count = $total_voter_count;
        $this->is_closed = $is_closed;
        $this->is_anonymous = $is_anonymous;
        $this->type = $type;
        $this->allows_multiple_answers = $allows_multiple_answers;
        $this->correct_option_id = $correct_option_id;
        $this->explanation = $explanation;
        $this->explanation_entities = $explanation_entities;
        $this->open_period = $open_period;
        $this->close_date = $close_date;
    }


    public static function makeFromArray(array $data)
    {
        // TODO: Implement makeFromArray() method.
    }
}