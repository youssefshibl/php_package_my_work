# shebl package

shebl package for my work

## installation

```bash
$ composer require shebl/handlemywork
```

## 1- Random Class

this class to generate random string

```php
use \Shebl\Functions\Random;
// the Rand method to generate random string&numbers with length of string
// default length is 10
Random::Rand($lenght);
// RandomOnlyNumber method to generate random number only with length
echo Random::RandOnlyNumber($lenght);
// RandomOnlyStr method to generate random string only with length
echo Random::RandOnlyStr($lenght);
```

## 2- JsonRes Class

this class to handle response to api

```php
use Shebl\Functions\JsonRes;
// SendError send status of false with error number as first parameters
// and second parameters is error message
JsonRes::SendError($error_number, $error_message);
JsonRes::SendError('101', 'nooo');
//output
$data = [
            'status' => false,
            'number' => $number,
            'message' => $message
        ];
// E.g.
// SendData method to send data to api
JsonRes::SendData($name_of_key , $value_of_key);
// E.g.
JsonRes::SendData('test', array("Peter" => 35, "Ben" => 37, "Joe" => 43));
// output
$data = [
            'status' => true,
            $key => $data
        ];
// SendSuccess method to send success response to Api
JsonRes::SendSuccess()
// output
$data = [
            'status' => true
        ];
```
