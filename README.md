# 📦 Kalimero\ReadonlyArraySupport

A lightweight PHP package for Laravel-style `toReadonlyArray()` support — perfect for `DTO` (Data Transfer Objects), `JsonResource`, Jobs, Events, or any class where you want to output an **immutable array** version of an object.

## ✨ Features

- ✅ `ToReadonlyArray` interface for consistent API
- ✅ `CastsToReadonlyArray` trait that automatically converts public readonly properties into array
- ✅ Built for PHP 8.2+ and Laravel-style architecture
- ✅ Ideal for Clean Architecture & modular DTO-based apps
- ✅ Zero dependencies – ultra lightweight

---

## 🔧 Installation

```bash
composer require kalimero/readonly-array-support
```

> ⚠️ Requires PHP >= 8.2

---

## 🚀 Usage

### 1. Create a DTO

```php
use Kalimero\ReadonlyArray\Contracts\ToReadonlyArray;
use Kalimero\ReadonlyArray\Traits\CastsToReadonlyArray;

readonly class ProductDTO implements ToReadonlyArray
{
    use CastsToReadonlyArray;

    public function __construct(
        public int $id,
        public string $name,
        public float $price,
    ) {}
}
```

---

### 2. Use in your application

```php
$dto = new ProductDTO(1, 'T-Shirt', 29.99);

// Get as immutable array
$data = $dto->toReadonlyArray();

// Pass to Eloquent create
Product::create($data);
```

---

### 3. Works great for:

- ✅ FormRequest -> DTO -> Model
- ✅ Event Broadcasting
- ✅ Logging/Audit trails
- ✅ Queue Jobs
- ✅ JsonResource transformation

---

## 💡 Why `toReadonlyArray`?

Laravel supports `Arrayable`, `Responsable`, `JsonSerializable`, etc.
But sometimes you want to pass **clean, readonly arrays** between layers (DTOs, Jobs, APIs). This package gives you:

- ✅ Consistent, immutable snapshot of data
- ✅ DRY code – no more `fromArray()` or manual mapping
- ✅ Works beautifully with Laravel mass-assignment

---

## 🧪 Testing

```bash
vendor/bin/phpunit
```

---

## 📄 License

MIT License © 2025 [KalimeroMK](https://github.com/KalimeroMK)
