<?php

declare(strict_types=1);

namespace League\MimeTypeDetection;

class EmptyExtensionToMimeTypeMap implements ExtensionToMimeTypeMap
{
    /**
     * @var string[]
     */
    private const MIME_TYPES_FOR_EXTENSIONS = [];

    public function lookupMimeType(string $extension): ?string
    {
        return self::MIME_TYPES_FOR_EXTENSIONS[$extension] ?? null;
    }
}
