<?php
declare (strict_types = 1);

namespace Zeus\Serializer;

use Zeus\Contract\SerializeInterface;

/**
 * Base64 Data Serialize
 *
 * @author imxieke <oss@live.hk>
 * @copyright (c) 2025 CloudFlying
 * @date 2025/10/16 14:28:08
 */
class Base64Serialize implements SerializeInterface
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
        return base64_encode(json_encode($data));
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
        return json_decode(base64_decode($data), true);
    }
}
