<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace OpenApi\Annotations;

/**
 * @Annotation
 */
class VersionedExample extends AbstractAnnotation
{
    /**
     * Example.
     *
     * @var string
     */
    public $example = UNDEFINED;

    public static $_required = ['example', 'apiVersion'];

    public static $_parents = [
        JsonContent::class,
    ];
}
