
###### A simple implementation for codeigniter 3.*

This is a simple Codeigniter wrapper for braintree payment method.

`Braintree PHP SDK 3.11.0`
`Codeigniter 3.*`

##General Usage:

  In any controller
  
  ```
  function __construct(){
      parent::__construct();
      $this->load->library("braintree_lib");
  }

  ...

  function <function>{
      $token = $this->braintree_lib->create_client_token();
      return $token;
  }
  ```
  
  
