<?php
declare (strict_types = 1);

namespace Zeus\Serializer;

use Zeus\Contract\SerializeInterface;

/**
 * Default Data Serialize
 *
 * @author imxieke <oss@live.hk>
 * @copyright (c) 2025 CloudFlying
 * @date 2025/10/16 14:28:08
 */
class DefaultSerialize implements SerializeInterface
{
    /**
     * Serialize Data
     *
     * @param mixed $data
     * @return bool|string
     * @author imxieke <oss@live.hk>
     * @date 2025/10/16 14:29:45
     */
    public function serialize($data): string
    {
        return serialize($data);
    }

    /**
     * Decode Serialize Data
     *
     * @param string $data Serialize Data
     * @return mixed Decoded Data
     * @author imxieke <oss@live.hk>
     * @date 2025/10/16 14:29:13
     */
    public function deserialize(string $data): mixed
    {
        return unserialize($data);
    }
}
