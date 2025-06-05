# Laravel Helpers

Pacote com funções auxiliares (helpers) reutilizáveis para projetos Laravel.  
Ideal para padronizar e reaproveitar funções comuns em múltiplos projetos.

---

## ✅ Instalação

Adicione o repositório no seu `composer.json`:

```json
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/LuisFWS/LARAVEL-HELPERS"
  }
]
```

Depois, instale com:

```bash
composer require luisfws/laravel-helpers
```

---

## 📂 Estrutura

```
laravel-helpers/
├── composer.json
└── src/
    └── helpers.php
```

---

## 🧠 Uso

As funções definidas no arquivo `src/helpers.php` são carregadas automaticamente.  
Exemplo:

```php
slugify('Exemplo de Texto');
// Retorna: exemplo-de-texto
```

---

## 🚀 Atualizações

Sempre que o pacote for atualizado:

1. No repositório do pacote:
    ```bash
    git commit -am "Adiciona nova função"
    git tag v1.1.0
    git push origin main --tags
    ```

2. No projeto Laravel:
    ```bash
    composer update luisfws/laravel-helpers
    ```

---

## 📌 Requisitos

- PHP ^8.3
- Laravel ^11

---

## 📝 Licença

MIT © [LuisFWS](https://github.com/LuisFWS)
