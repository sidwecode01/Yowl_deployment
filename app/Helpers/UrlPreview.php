<?php

namespace App\Helpers;

class UrlPreview
{
    public static function getMetaTags(string $url): ?array
    {
        try {
            $html = @file_get_contents($url);
            if (!$html) {
                return null;
            }

            $doc = new \DOMDocument();
            @$doc->loadHTML($html);

            $tags = [];

            foreach ($doc->getElementsByTagName('meta') as $meta) {
                $property = $meta->getAttribute('property');
                $content  = $meta->getAttribute('content');

                if ($property === 'og:title') {
                    $tags['title'] = $content;
                }
                if ($property === 'og:description') {
                    $tags['description'] = $content;
                }
                if ($property === 'og:image') {
                    $tags['image'] = $content;
                }
            }

            return $tags;
        } catch (\Exception $e) {
            return null;
        }
    }
}
