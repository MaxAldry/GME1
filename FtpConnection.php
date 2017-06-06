<?php
/**
 * Set up a connection to the GME FTP Repository
 *
 *
 *
 */
class FtpConnection {
    
    protected $ftpServer;
    protected $ftpUserName;
    private $ftpPassword;
    
    public function __construct($ftpServer, $ftpUserName, $ftpPassword) {
    
        $this->ftpServer = $ftpServer;
        $this->ftpUserName = $ftpUserName;
        $this->ftpPassword = $ftpPassword;
    }
    
    public function setupConnection() {
    
        $this->connId = ftp_connect($ftpServer);
        $this->loginResult = ftp_login($conn_id, $ftpUserName, $ftpPassword)
    
    }
 
}
 
