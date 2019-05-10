<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'jms_serializer.accessor_strategy' shared service.

include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/Accessor/AccessorStrategyInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/Accessor/ExpressionAccessorStrategy.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/Accessor/DefaultAccessorStrategy.php';

return $this->services['jms_serializer.accessor_strategy'] = new \JMS\Serializer\Accessor\ExpressionAccessorStrategy(${($_ = isset($this->services['jms_serializer.expression_evaluator']) ? $this->services['jms_serializer.expression_evaluator'] : $this->load('getJmsSerializer_ExpressionEvaluatorService.php')) && false ?: '_'}, new \JMS\Serializer\Accessor\DefaultAccessorStrategy());