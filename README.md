# Class password generator PHP
* A simple class for generating passwords

### Basic usage

```PHP
$generator = new passwordGenerator();

try{
    echo $generator->generate(12); // 12 means the length of the password
}catch(Exception $e){
    echo $e->getMessage();
}
```

### Example Adding your own letters to complete the generation through them

```PHP
$generator = new passwordGenerator("abcdefghijklmnopqrstuvwxyz1234567890");
```

### Example of converting letters to uppercase

```PHP
$generator = new passwordGenerator(null, true);
```
