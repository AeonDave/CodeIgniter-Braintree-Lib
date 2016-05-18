#CodeIgniter-Braintree-Lib
###### A simple implementation for codeigniter 3.*

This is a simple Codeigniter wrapper for braintree php sdk.
Is ready to use, don't forget to put your keys inside the config file.
It has been tested with 3.11.0 version of Braintree but it can be updated with any braintree 3.* version

`Braintree PHP SDK 3.*`

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
  
  
