# Safe Storage
Store data safely in memory at runtime

# Example

```php
class Example
{
    use Hail\Util\SafeStorageTrait;
    
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
