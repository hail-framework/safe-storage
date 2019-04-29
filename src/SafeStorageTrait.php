<?php

namespace Hail\Util;


trait SafeStorageTrait
{
    /**
     * @var SafeStorage
     */
    protected $safeStorage;

    public function safeSet(string $key, $value): void
    {
        if ($this->safeStorage === null) {
            $this->safeStorage = new SafeStorage();
        }

        $this->safeStorage->set($key, $value);
    }

    public function safeGet(string $key)
    {
        if ($this->safeStorage === null) {
            return null;
        }

        return $this->safeStorage->get($key);
    }

    public function setPassword(string $password)
    {
        $this->safeSet('password', $password);

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->safeGet('password');
    }
}
