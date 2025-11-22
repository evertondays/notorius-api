# Notorius API – Laravel + PostgreSQL com Docker

Este repositório contém uma aplicação **Laravel (API)** rodando em um ambiente Docker com:

- **PHP-FPM** (container `notorius_api`)
- **Nginx** (container `laravel_nginx`)
- **PostgreSQL** (container `notorius_db`)

A ideia é você subir tudo com `docker compose` e já ter o ambiente pronto para desenvolvimento.

---

## ✅ Pré-requisitos

- [Docker](https://www.docker.com/) instalado
- [Docker Compose](https://docs.docker.com/compose/) (v2 ou integrado ao Docker)
- Opcional: **Composer** instalado localmente (se quiser rodar fora do container)

## 🛠 Comandos Úteis

### Rodar Migrations

Para criar as tabelas no banco de dados, execute:

```bash
docker compose exec app php artisan migrate
```