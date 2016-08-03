<?php
/**
 * Created by PhpStorm.
 * Author: Kenny Hanson kennyhansondev@gmail.com
 * Date: 8/2/16
 * Time: 3:37 PM
 */

namespace FedEx;

use FedEx\ComplexType as ComplexType;
use FedEx\SimpleType as SimpleType;

class ReplyDenormalizer
{
    /**
     * Receives a ComplexType, SimpleType or array and hydrates it with data
     *
     * @param AbstractType $class
     * This is the object that will be hydrated. It can be a ComplexType, SimpleType or array
     * @param $data
     * The stdClass representation of the data. It's top level should match the top level of the $class parameter
     */
    public function stdClassToObject($class, $objData)
    {

        foreach ($objData as $prop => $val)
        {
            if ($class == null) {
                continue;
            }

            if (is_array($class->$prop)) {
                $arr = array();
                if (!is_array($val)) {
                    $newObj = $this->depluralizeClassName($prop);
                    $this->stdClassToObject($newObj, $val);
                    $arr[] = $newObj;
                }
                else {
                    for ($i = 0; $i < count($val); $i++) {
                        $newObj = $this->depluralizeClassName($prop);
                        $this->stdClassToObject($newObj, $val[$i]);
                        $arr[] = $newObj;
                    }
                }

                $setFunc = 'set'.$prop;
                $class->$setFunc($arr);
            }
            elseif (is_object($val)) {
                if (!$newObj = $this->getClass($class->propertyTypes[$prop])) {
                    continue;
                }
                $this->stdClassToObject($newObj, $val);
                $setFunc = 'set'.$prop;
                $class->$setFunc($newObj);
            }
            else {
                //simple type
                $setFunc = 'set'.$prop;
                $class->$setFunc($val);
            }
        }
    }

    /**
     * @param string $rawClassName
     * @return AbstractType
     */
    private function getClass($rawClassName, $value = null)
    {
        $class = $this->getSimpleType($rawClassName);
        if (!$class) {
            $class = $this->getComplexType($rawClassName);
        }
        if ($class) {
            return new $class($value);
        }
        else {
            return null;
        }
    }

    /**
     * @param string $possiblePluralName
     * @return AbstractType|string
     */
    private function depluralizeClassName(string $possiblePluralName)
    {
        $className = substr($possiblePluralName, 0, -1);
        $class = $this->getSimpleType($className);
        if (!$class) {
            $class = $this->getComplexType($className);
        }
        return $class;
    }

    /**
     * @param string $rawClassName
     * @return AbstractSimpleType|null
     */
    private function getSimpleType(string $rawClassName)
    {
        if (class_exists(__NAMESPACE__.'\\SimpleType\\'.$rawClassName)) {
            $rawClassName = __NAMESPACE__.'\\SimpleType\\'.$rawClassName;
            $class = new $rawClassName;
            return $class;
        }
        else {
            return null;
        }
    }

    /**
     * @param string $rawClassName
     * @return AbstractComplexType|null
     */
    private function getComplexType(string $rawClassName)
    {
        if (class_exists(__NAMESPACE__.'\\ComplexType\\'.$rawClassName)) {
            $rawClassName = __NAMESPACE__.'\\ComplexType\\'.$rawClassName;
            $class = new $rawClassName;
            return $class;
        }
        return null;
    }

}