<?php
class BookProtoType
{
    protected $title;
    protected $topic;
    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($titleIn)
    {
        return $this->title = $titleIn;
    }
    public function getTopic()
    {
        return $this->topic;
    }
}
class PhpBookProtoType extends BookProtoType
{
    public function __construct()
    {
        $this->topic = 'PHP';
    }
}
class DesignPatternBookProtoType extends BookProtoType
{
    public function __construct()
    {
        $this->topic = 'DesignPatterns';
    }
}

echo "Begin\n";
$phpProto = new BookProtoType();
$designProto = new DesignPatternBookProtoType();
$bookOne = clone $designProto;
$bookOne->setTitle('PHP');
echo "BookOne Topic: " . $bookOne->getTopic(), "\n";
echo "BookOne Title: " . $bookOne->getTitle(), "\n";
$bookTwo = clone $designProto;
$bookTwo->setTitle('Wings Of Fire');
echo "BookTwo Topic: " . $bookTwo->getTopic(), "\n";
echo "BookTwo Title: " . $bookTwo->getTitle(), "\n";

$bookThree = clone $designProto;
$bookThree->setTitle('My Attitude');
echo "BookTwo Topic: " . $bookThree->getTopic(), "\n";
echo "BookTwo Title: " . $bookThree->getTitle(), "\n";
