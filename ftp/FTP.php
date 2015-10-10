<?php
namespace symacopee\net;

/**
 * Description of FTP
 *
 * @author satch
 */
class FTP {
  protected static $_sHost;
  protected static $_sUser;
  protected static $_sPass;
  protected static $_nPort;
  protected static $_nTmout;
  protected static $_oFP;
  
  public static function connect( $sHost, $nPort = 22, $sUser = 'anonymous', $sPass = null, $nTMOUT = 60 ) {
    static::$_sHost = $sHost;
    static::$_nPort = $nPort;
    static::$_sUser = $sUser;
    static::$_sPass = $sPass;
    static::$_nPort = $nPort;
  }
}
