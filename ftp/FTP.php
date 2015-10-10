<?php
namespace Symacopee\Net;

use InvalidArgumentException;

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
  
  public static function connect( $sHost = null, $nPort = 22, $sUser = 'anonymous', $sPass = null, $nTMOUT = 60 ) {
    if ( ! $sHost || is_numeric( $sHost ) || is_bool($sHost) || is_resource($sHost)) {
     throw new InvalidArgumentException();
    }
    
    
    static::$_sHost = $sHost;
    static::$_nPort = $nPort;
    static::$_sUser = $sUser;
    static::$_sPass = $sPass;
    static::$_nPort = $nPort;
    static::$_nTmout = $nTMOUT;
  }
  
  /**
   * 
   * @return string host provided
   */
  public static function getHost() {
    return static::$_sHost;
  }
  
  /**
   * 
   * @return string username if provided
   */
  public static function getUsername() {
    return static::$_sUser;
  }
  
  /**
   * 
   * @return string password provided
   */
  public static function getPassword() {
    return static::$_sPass;
  }
  
  /**
   * 
   * @return string port if provided
   */
  public static function getPort() {
    return static::$_nPort;
  }
  
  /**
   * 
   * @return string timeout if provided
   */
  public static function getTimeOut() {
    return static::$_nTmout;
  }
  
  
  /**
   * 
   * @param type $sFile
   */
  public static function get( $sFile ) {
    
  }
  
  /**
   * 
   * @param type $sDir
   */
  public static function chdir( $sDir ) {
    
  }
  
  /**
   * 
   * @param type $sFile
   * @param type $sDest
   */
  public static function put( $sFile, $sDest ) {
    
  }
  
  /**
   * 
   * @param type $sFile
   */
  public static function delete( $sFile ) {
    
  }
  
  /**
   * 
   */
  public static function close() {
    
  }
}
