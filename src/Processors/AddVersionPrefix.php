<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace OpenApi\Processors;

use OpenApi\Analysis;
use OpenApi\Annotations\Server;

/**
 * Split JsonContent into Schema and MediaType
 */
class AddVersionPrefix
{
    public function __invoke(Analysis $analysis)
    {
        if ($analysis->openapi->info->versionPrefix != \OpenApi\UNDEFINED) {
            $annotations = $analysis->getAnnotationsOfType(Server::class);
            foreach ($annotations as $annotation) {
                $annotation->url .= "/" . $analysis->openapi->info->versionPrefix;
            }
        }
    }
}
