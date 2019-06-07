<?php


class MoveablePoint extends Point2D
{
    public $xSpeed;
    public $ySpeed;

    public function __construct($x, $y, $xSpeed, $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    /**
     * @param mixed $xSpeed
     */
    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    /**
     * @return mixed
     */
    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    /**
     * @param mixed $ySpeed
     */
    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }

    /**
     * @return mixed
     */
    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    public function setSpeed($xSpeed, $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getSpeed()
    {
        $array = ["SpeedX" => $this->xSpeed, "SpeedY" => $this->ySpeed];
        return $array;
    }

    public function toString()
    {
        foreach ($this->getXY() as $index => $value) {
            echo $index, ": ", $value, " ";
        }
        echo "<br>";
        foreach ($this->getSpeed() as $stt => $item) {
            echo $stt, ":", $item, " ";
        }
    }
}