<?php
declare (strict_types = 1);

namespace Zeus;

use Zeus\Exception\Exception;
use Zeus\Exception\InvalidArgumentException;

/**
 * Data Serializer
 *
 * @author imxieke <oss@live.hk>
 * @copyright (c) 2025 CloudFlying
 * @date 2025/10/17 15:13:58
 */
class Serializer
{
    /**
     * Serializer Provider
     *
     * @var array
     * @author CloudFlying
     * @date 2025/10/17 15:29:19
     */
    private static $serializer = [
        'json' => \Zeus\Serializer\JsonSerialize::class,
        'igbinary' => \Zeus\Serializer\IGBinarySerialize::class,
        'base64' => \Zeus\Serializer\Base64Serialize::class,
        'default' => \Zeus\Serializer\DefaultSerialize::class,
    ];

    /**
     * Serialize Data
     *
     * @param mixed $data
     * @param string $provider Serializer Provider
     * @throws InvalidArgumentException
     * @return string
     * @author imxieke <oss@live.hk>
     * @date 2025/10/17 15:28:18
     */
    public static function serialize(mixed $data, string $provider = 'default'): string
    {
        try {
            if (!isset(self::$serializer[$provider])) {
                throw new InvalidArgumentException("Serializer {$provider} not found");
            }

            $serializer = new self::$serializer[$provider];
            return $serializer->serialize($data);

        } catch (Exception $e) {
            $class = get_class($e);
            throw new $class($e->getMessage());
        }
    }

    /**
     * Deserialize Data
     *
     * @param string $data
     * @param string $provider
     * @throws InvalidArgumentException
     * @return mixed
     * @author imxieke <oss@live.hk>
     * @date 2025/10/17 15:30:20
     */
    public static function deserialize(string $data, string $provider = 'default'): mixed
    {
        try {

            if (!isset(self::$serializer[$provider])) {
                throw new InvalidArgumentException("Serializer {$provider} not found");
            }

            $serializer = new self::$serializer[$provider];
            return $serializer->deserialize($data);
        } catch (Exception $e) {
            $class = get_class($e);
            throw new $class($e->getMessage());
        }
    }
}
