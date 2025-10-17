<?php
declare (strict_types = 1);

namespace Zeus\Serializer;

use Zeus\Contract\SerializeInterface;

/**
 * Json Data Serialize
 *
 * @author imxieke <oss@live.hk>
 * @copyright (c) 2025 CloudFlying
 * @date 2025/10/16 14:28:08
 */
class JsonSerialize implements SerializeInterface
{
    /**
     * Json Serialize Data
     *
     * @param mixed $data
     * @return bool|string
     * @author imxieke <oss@live.hk>
     * @date 2025/10/16 14:29:45
     */
    public function serialize($data): string
    {
        return json_encode($data);
    }

    /**
     * Decode Json Serialize Data
     *
     * @param string $data Json Serialize Data
     * @return mixed Decoded Data
     * @author imxieke <oss@live.hk>
     * @date 2025/10/16 14:29:13
     */
    public function deserialize(string $data): mixed
    {
        return json_decode($data, true);
    }
}
