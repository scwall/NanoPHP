<?php
// automatically generated by the FlatBuffers compiler, do not modify

namespace MikeRow\NanoPHP\NanoAPI;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class EventConfirmation extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return EventConfirmation
     */
    public static function getRootAsEventConfirmation(ByteBuffer $bb)
    {
        $obj = new EventConfirmation();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return EventConfirmation
     **/
    public function init($_i, ByteBuffer $_bb)
    {
        $this->bb_pos = $_i;
        $this->bb = $_bb;
        return $this;
    }

    /**
     * @return sbyte
     */
    public function getConfirmationType()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->bb->getSbyte($o + $this->bb_pos) : \nanoapi\TopicConfirmationType::active_quorum;
    }

    public function getAccount()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getAmount()
    {
        $o = $this->__offset(8);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getHash()
    {
        $o = $this->__offset(10);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @return byte
     */
    public function getBlockType()
    {
        $o = $this->__offset(12);
        return $o != 0 ? $this->bb->getByte($o + $this->bb_pos) : \nanoapi\Block::NONE;
    }

    /**
     * @returnint
     */
    public function getBlock($obj)
    {
        $o = $this->__offset(14);
        return $o != 0 ? $this->__union($obj, $o) : null;
    }

    public function getElectionInfo()
    {
        $obj = new ElectionInfo();
        $o = $this->__offset(16);
        return $o != 0 ? $obj->init($this->__indirect($o + $this->bb_pos), $this->bb) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startEventConfirmation(FlatBufferBuilder $builder)
    {
        $builder->StartObject(7);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return EventConfirmation
     */
    public static function createEventConfirmation(FlatBufferBuilder $builder, $confirmation_type, $account, $amount, $hash, $block_type, $block, $election_info)
    {
        $builder->startObject(7);
        self::addConfirmationType($builder, $confirmation_type);
        self::addAccount($builder, $account);
        self::addAmount($builder, $amount);
        self::addHash($builder, $hash);
        self::addBlockType($builder, $block_type);
        self::addBlock($builder, $block);
        self::addElectionInfo($builder, $election_info);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param sbyte
     * @return void
     */
    public static function addConfirmationType(FlatBufferBuilder $builder, $confirmationType)
    {
        $builder->addSbyteX(0, $confirmationType, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addAccount(FlatBufferBuilder $builder, $account)
    {
        $builder->addOffsetX(1, $account, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addAmount(FlatBufferBuilder $builder, $amount)
    {
        $builder->addOffsetX(2, $amount, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addHash(FlatBufferBuilder $builder, $hash)
    {
        $builder->addOffsetX(3, $hash, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param byte
     * @return void
     */
    public static function addBlockType(FlatBufferBuilder $builder, $blockType)
    {
        $builder->addByteX(4, $blockType, 0);
    }

    public static function addBlock(FlatBufferBuilder $builder, $offset)
    {
        $builder->addOffsetX(5, $offset, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param int
     * @return void
     */
    public static function addElectionInfo(FlatBufferBuilder $builder, $electionInfo)
    {
        $builder->addOffsetX(6, $electionInfo, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endEventConfirmation(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}
