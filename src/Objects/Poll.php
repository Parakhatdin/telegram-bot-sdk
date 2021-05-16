<?php


namespace Parakhatdin\Telegram\Objects;


/**
 * Class Poll
 * @package Parakhatdin\Bot\Objects
 */
class Poll
{
    /**
     * @var string
     */
    private $id;
    /**
     * @var string
     */
    private $question;
    /**
     * @var PollOption[]
     */
    private $options;
    /**
     * @var int
     */
    private $total_voter_count;
    /**
     * @var bool
     */
    private $is_closed;
    /**
     * @var bool
     */
    private $is_anonymous;
    /**
     * @var string
     */
    private $type;
    /**
     * @var bool
     */
    private $allows_multiple_answers;
    /**
     * @var int
     */
    private $correct_option_id;
    /**
     * @var string
     */
    private $explanation;
    /**
     * @var MessageEntity[]
     */
    private $explanation_entities;
    /**
     * @var int
     */
    private $open_period;
    /**
     * @var int
     */
    private $close_date;

    /**
     * Poll constructor.
     * @param string $id
     * @param string $question
     * @param PollOption[] $options
     * @param int $total_voter_count
     * @param bool $is_closed
     * @param bool $is_anonymous
     * @param string $type
     * @param bool $allows_multiple_answers
     */
    public function __construct(string $id, string $question, array $options, int $total_voter_count, bool $is_closed, bool $is_anonymous, string $type, bool $allows_multiple_answers)
    {
        $this->id = $id;
        $this->question = $question;
        $this->options = $options;
        $this->total_voter_count = $total_voter_count;
        $this->is_closed = $is_closed;
        $this->is_anonymous = $is_anonymous;
        $this->type = $type;
        $this->allows_multiple_answers = $allows_multiple_answers;
    }

    /**
     * @param int $correct_option_id
     */
    public function setCorrectOptionId(int $correct_option_id): void
    {
        $this->correct_option_id = $correct_option_id;
    }

    /**
     * @param string $explanation
     */
    public function setExplanation(string $explanation): void
    {
        $this->explanation = $explanation;
    }

    /**
     * @param MessageEntity[] $explanation_entities
     */
    public function setExplanationEntities(array $explanation_entities): void
    {
        $this->explanation_entities = $explanation_entities;
    }

    /**
     * @param int $open_period
     */
    public function setOpenPeriod(int $open_period): void
    {
        $this->open_period = $open_period;
    }

    /**
     * @param int $close_date
     */
    public function setCloseDate(int $close_date): void
    {
        $this->close_date = $close_date;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getQuestion(): string
    {
        return $this->question;
    }

    /**
     * @return PollOption[]
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * @return int
     */
    public function getTotalVoterCount(): int
    {
        return $this->total_voter_count;
    }

    /**
     * @return bool
     */
    public function isIsClosed(): bool
    {
        return $this->is_closed;
    }

    /**
     * @return bool
     */
    public function isIsAnonymous(): bool
    {
        return $this->is_anonymous;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return bool
     */
    public function isAllowsMultipleAnswers(): bool
    {
        return $this->allows_multiple_answers;
    }

    /**
     * @return int
     */
    public function getCorrectOptionId(): int
    {
        return $this->correct_option_id;
    }

    /**
     * @return string
     */
    public function getExplanation(): string
    {
        return $this->explanation;
    }

    /**
     * @return MessageEntity[]
     */
    public function getExplanationEntities(): array
    {
        return $this->explanation_entities;
    }

    /**
     * @return int
     */
    public function getOpenPeriod(): int
    {
        return $this->open_period;
    }

    /**
     * @return int
     */
    public function getCloseDate(): int
    {
        return $this->close_date;
    }




}