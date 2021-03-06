<?php

declare(strict_types=1);

namespace BrosSquad\LaravelCrypto\Contracts;

/**
 * Interface Hashing
 *
 * @package BrosSquad\LaravelCrypto\Contracts
 */
interface Hashing
{
    /**
     * @param  string  $data
     *
     * @return string|null
     */
    public function hash(string $data): ?string;

    /**
     * @param  string  $data
     *
     * @return string|null
     */
    public function hashRaw(string $data): ?string;

    /**
     * @param  string  $hash
     * @param  string  $data
     * @return bool
     */
    public function verify(string $hash, string $data): bool;

    /**
     * @param  string  $hash
     * @param  string  $data
     * @return bool
     */
    public function verifyRaw(string $hash, string $data): bool;

    /**
     * @param  string  $hash1
     * @param  string  $hash2
     *
     * @return bool
     */
    public function equals(string $hash1, string $hash2): bool;
}
