<?php

declare(strict_types = 1);

namespace unreal4u\TelegramAPI\Telegram\Types;

use unreal4u\TelegramAPI\Abstracts\TelegramTypes;

/**
 * This object represents an incoming update.
 * Only one of the optional parameters can be present in any given update.
 *
 * Objects defined as-is january 2016
 *
 * @see https://core.telegram.org/bots/api#update
 */
class Update extends TelegramTypes
{
    /**
     * The update‘s unique identifier. Update identifiers start from a certain positive number and increase
     * sequentially. This ID becomes especially handy if you’re using Webhooks, since it allows you to ignore repeated
     * updates or to restore the correct update sequence, should they get out of order.
     * @var int
     */
    public $update_id = 0;

    /**
     * Optional. New incoming message of any kind — text, photo, sticker, etc.
     * @var Message
     */
    public $message = null;

    /**
     * Optional. New version of a message that is known to the bot and was edited
     * @var Message
     */
    public $edited_message = null;

    /**
     * Optional. New incoming inline query
     * @var null
     */
    public $inline_query = null;

    /**
     * Optional. The result of a inline query that was chosen by a user and sent to their chat partner
     * @var null
     */
    public $chosen_inline_result = null;

    /**
     * Optional. New incoming callback query
     * @var CallbackQuery
     */
    public $callback_query = null;

    protected function mapSubObjects(): array
    {
        return [
            'message' => 'Message',
            'edited_message' => 'Message',
            'inline_query' => 'Inline\\Query',
            'chosen_inline_result' => 'Inline\\ChosenResult',
            'callback_query' => 'CallbackQuery',
        ];
    }
}
