<?php

/**
 * Description of Master
 *
 * @author Administrator
 */
class Master
{
  // Constant
  const PACKET_SIZE = 1400;

  // Master Server info
  const MASTER_SERVER_HOST = 'hl2master.steampowered.com';
  const MASTER_SERVER_PORT = 27011;
  const MASTER_SERVER_QUERY = "\x31";
  const MASTER_SERVER_REPLY = "\x66\x0A";
  const MASTER_SERVER_IP = "0.0.0.0:0";

  // Areas
  const REGION_US_EAST = "\x00";
  const REGION_US_WEST = "\x01";
  const REGION_US_SOUTH = "\x02";
  const REGION_EUROPE = "\x03";
  const REGION_ASIA = "\x04";
  const REGION_AUSTRALIA = "\x05";
  const REGION_MIDDLE_EAST = "\x06";
  const REGION_AFRICA = "\x07";
  const REGION_OTHER = "\xFF";

  // Filters
  const FILTER_ALL = '';
  const FILTER_DEDICATED = "\x5C\x74\x79\x70\x65\x5C\x64"; //"\type\d
  const FILTER_SECURE = "\x5C\x73\x65\x63\x75\x72\x65\x5C\x31"; //"\secure\1
  const FILTER_GAME_CSTRIKE = "\x5C\x67\x61\x6D\x65\x64\x69\x72\x5C\x63\x73\x74\x72\x69\x6B\x65"; //"\gamedir\cstrike
  const FILTER_GAME_DODS    = "\x5c\x67\x61\x6d\x65\x64\x69\x72\x5c\x64\x6f\x64"; //"\gamedir\dod
  const FILTER_GAME_CSGO    = "\x5c\x67\x61\x6d\x65\x64\x69\x72\x5c\x63\x73\x67\x6F"; //"\gamedir\csgo
  const FILTER_GAME_TF2     = "\x5c\x67\x61\x6d\x65\x64\x69\x72\x5c\x74\x66"; //"\gamedir\tf2
  const FILTER_MAP_DE_DUST2 = "\x5C\x6D\x61\x70\x5C\x64\x65\x5F\x64\x75\x73\x74\x32"; //"\map\de_dust2
  const FILTER_LINUX = "\x5C\x6C\x69\x6E\x75\x78\x5C\x31"; //"\linux\1
  const FILTER_NOT_EMPTY = "\x5C\x65\x6D\x70\x74\x79\x5C\x31"; //"\empty\1
  const FILTER_NOT_FULL = "\x5C\x66\x75\x6C\x6C\x5C\x31"; //"\full\1
  const FILTER_PROXY = "\x5C\x70\x72\x6F\x78\x79\x5C\x31"; //"\proxy\1

  protected $game;

  public function __Construct($game)
  {
    $this->game = $game;
  }

  public function retrieveList()
  {
    switch ($this->game)
    {
      case 'css':
        $filter_game = self::FILTER_GAME_CSTRIKE;
        break;
    
      case 'csgo':
        $filter_game = self::FILTER_GAME_CSGO;
        break;

      case 'dods':
        $filter_game = self::FILTER_GAME_DODS;
        break;

      case 'tf2':
        $filter_game = self::FILTER_GAME_TF2;
        break;

      default:
        return false; break;
    }

    // Open connection with server
    $socket = stream_socket_client(
        'udp://'.gethostbyname(self::MASTER_SERVER_HOST).':'.self::MASTER_SERVER_PORT,
        $errno,
        $errstr,
        30
    );

    if(!$socket)
    {
      throw new Exception($errstr);
    }

    $list = array();

    // Start IP
    $currentIP = self::MASTER_SERVER_IP;

    do
    {
      // Construct request packet, min must contain :
      //   Byte - Message Type (0x31 - the character "1")
      //   Byte - Region Code
      //   String Zero - IP:Port
      //   String Zero - Filter
      $packet = self::MASTER_SERVER_QUERY
		.self::REGION_EUROPE
		.$currentIP
		."\x00"
		.self::FILTER_DEDICATED
		.$filter_game
		."\x00";

      // Send packet
      fwrite($socket, $packet);

      // Retreive data
      $string = fread($socket, self::PACKET_SIZE);

      // Clean response
      $pattern = "#\xFF\xFF\xFF\xFF".self::MASTER_SERVER_REPLY."#";
      $response = preg_replace($pattern, '', $string);

      while ($string)
      {
        // Parse data
        // IP adress - 4 Byte
        $ip = MasterData::getByte($string);
        $ip .= '.'.MasterData::getByte($string);
        $ip .= '.'.MasterData::getByte($string);
        $ip .= '.'.MasterData::getByte($string);

        // Port number - unsigned short
        $port = MasterData::getShortUnsigned($string);

        $currentIP = sprintf('%s:%d', $ip, $port);
        if(!in_array($currentIP, $list))
        {
          $list[] = $currentIP;
        }
        
       }
    
    } while($currentIP != self::MASTER_SERVER_IP);

    return $list;
  }

  function in_ip_range($ip_one, $ip_two)
  {
    if(ip2long($ip_one)<=ip2long($_SERVER['REMOTE_ADDR']) && ip2long($ip_two)>=ip2long($_SERVER['REMOTE_ADDR']))
    {
      return true;
    }

    return false;
  }
}
