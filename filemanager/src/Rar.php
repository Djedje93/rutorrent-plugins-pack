<?php


namespace Flm;


class Rar extends P7zip
{
    const PASSWORD_SWITCH = '-hp';
    const COMPRESSION_LEVEL_SWITCH = '-m';
    const OUTPUT_DIR_SWITCH = '  ';

    // available command args with default values
    protected $args = [
        '-ep' => 1,
        self::PASSWORD_SWITCH => null,
        self::COMPRESSION_LEVEL_SWITCH => null,
        self::VOLUME_SIZE_SWITCH => null,
        self::SWITCHES_DELIMITER => true,
        self::ARCHIVE_FILE_ARG => null,
        self::FILE_LIST_ARG => null,
        self::OUTPUT_DIR_SWITCH => null,
    ];

    public function __construct(string $binPath = 'rar')
    {
        parent::__construct($binPath);
    }

    public function setProgressIndicator(int $value = 1)
    {
        // not implemented
        return $this;
    }


}