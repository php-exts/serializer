<?php
declare(strict_types=1);

namespace Zeus\Contract;

/**
 * Data Serialize
 *
 * @author imxieke <oss@live.hk>
 * @copyright (c) 2025 CloudFlying
 * @date 2025/10/16 14:25:44
 */
interface SerializeInterface
{
    /**
     * Serialize a value
     *
     * @return mixed
     * @author imxieke <oss@live.hk>
     * @date 2025/10/16 14:23:09
     */
    public function serialize(mixed $data): string;

    /**
     * Deserialize a string
     *
     * @param string $data
     * @return mixed
     */
    public function deserialize(string $data): mixed;
}
