<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'property_info.reflection_extractor' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/PropertyInfo/PropertyListExtractorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/PropertyInfo/PropertyTypeExtractorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/PropertyInfo/PropertyAccessExtractorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/PropertyInfo/Extractor/ReflectionExtractor.php';

return $this->services['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor();
