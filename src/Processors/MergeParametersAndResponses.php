<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace OpenApi\Processors;

use OpenApi\Annotations\Operation;
use OpenApi\Analysis;

/**
 * Split JsonContent into Schema and MediaType
 */
class MergeParametersAndResponses
{
    public function __invoke(Analysis $analysis)
    {
        $annotations = $analysis->getAnnotationsOfType(Operation::class);
        foreach ($annotations as $operation) {
            $operation->filterParametersAndResponses();
        }
    }
}
