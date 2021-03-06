<?php

/*
 * This file is part of the PHP Translation package.
 *
 * (c) PHP Translation team <tobias.nyholm@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Translation\Common\Model;

/**
 * A object representation of a translation in a specific language.
 *
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
final class Message
{
    /**
     * @var string
     *
     * The domain the message belongs to
     */
    private $domain;

    /**
     * @var string
     *
     * The key/phrase you write in the source code
     */
    private $key;

    /**
     * @var string
     *
     * The locale the translations is on
     */
    private $locale;

    /**
     * @var string
     *
     * The translated string. This is the preview of the message. Ie no placeholders is visible.
     */
    private $translation;

    /**
     * Key value array with metadata.
     *
     * @var array
     */
    private $meta = [];

    /**
     * @param string $key
     * @param string $domain
     * @param string $locale
     * @param string $translation
     * @param array  $meta
     */
    public function __construct($key = '', $domain = '', $locale = '', $translation = '', array $meta = [])
    {
        $this->key = $key;
        $this->domain = $domain;
        $this->locale = $locale;
        $this->translation = $translation;
        $this->meta = $meta;
    }

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param string $domain
     *
     * @return Message
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string $key
     *
     * @return Message
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param string $locale
     *
     * @return Message
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * @return string
     */
    public function getTranslation()
    {
        return $this->translation;
    }

    /**
     * @param string $translation
     *
     * @return Message
     */
    public function setTranslation($translation)
    {
        $this->translation = $translation;

        return $this;
    }

    /**
     * @return array
     */
    public function getAllMeta()
    {
        return $this->meta;
    }

    /**
     * @param array $meta
     *
     * @return Message
     */
    public function setMeta(array $meta)
    {
        $this->meta = $meta;

        return $this;
    }

    /**
     * @param string $key
     * @param string $value
     *
     * @return $this
     */
    public function addMeta($key, $value)
    {
        $this->meta[$key] = $value;

        return $this;
    }

    /**
     * @param string $key
     *
     * @return mixed|null
     */
    public function getMeta($key)
    {
        if (isset($this->meta[$key])) {
            return $this->meta[$key];
        }

        return;
    }
}
