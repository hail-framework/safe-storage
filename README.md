# Safe Storage
Store data safely in memory at runtime

# Example

```php
use Hail\SafeStorage\SafeStorageTrait;

class Example
{
    use SafeStorageTrait;
    
    public function __construct(string $password)
    {
        $this->setPassword($password);
    }
    
    public function usePassword()
    {
        $password = $this->getPassword();
    }
}
```
