<?php
/**
 * Created by PhpStorm.
 * User: gareth
 * Date: 20-7-15
 * Time: 16:27
 */

namespace garethp\ews;

class Caster
{

    public static function cast($value, $type)
    {
        $casts = self::getCasts();
        $fromType = self::getValueType($value);

        if (!self::shouldCast($value, $type)) {
            return $value;
        }

        if (!self::castExists($fromType, $type)) {
            return null;
        }

        return $casts[$type][$fromType]($value);
    }

    private static function getValueType($value)
    {
        $fromType = gettype($value);
        if ($fromType == "object") {
            $fromType = get_class($value);
        }

        return $fromType;
    }

    public static function shouldCast($value, $type)
    {
        $fromType = self::getValueType($value);
        if ($fromType == $type
            || self::isTypeAnAlias($fromType, $type)
            || ($type == "ExchangeFormat" && gettype($value) !== "object")) {
            return false;
        }

        return true;
    }

    public static function castExists($from, $to)
    {
        $casts = self::getCasts();

        return !(empty($casts[$to][$from]));
    }

    private static function isTypeAnAlias($fromType, $type)
    {
        $aliases = [
            'DateTime' => 'DateTime',
            'dateTime' => 'DateTime',
            'date' => 'DateTime',
            'time' => 'DateTime'
        ];

        return (isset($aliases[$type]) && $aliases[$type] == $fromType);
    }

    private static function getCasts()
    {
        return [
            'DateTime' => [
                'string' => function ($value) {
                    return new \DateTime($value);
                }
            ],
            'dateTime' => [
                'string' => function ($value) {
                    return new \DateTime($value);
                }
            ],
            'date' => [
                'string' => function ($value) {
                    return new \DateTime($value);
                }
            ],
            'time' => [
                'string' => function ($value) {
                    return new \DateTime($value);
                }
            ],
            'ExchangeFormat' => [
                'DateTime' => function ($value) {
                    return $value->format('c');
                },
                'dateTime' => function ($value) {
                    return $value->format('c');
                },
                'date' => function ($value) {
                    return $value->format('Y-m-d');
                },
                'time' => function ($value) {
                    return $value->format('H:i:s');
                }
            ]
        ];
    }
}
