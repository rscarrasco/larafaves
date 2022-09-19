# Larafaves

*Please note that this project was developed with educational purposes in mind, and as such it is not recommended to be deployed in a production environment.* 

Larafaves is a Delicious clone made in Laravel.

## Running

If you have Docker installed, just execute:

```bash
./vendor/bin/sail up
```
After that, setup the database:

```bash
./vendor/bin/sail php artisan migrate:refresh
```

And then access `http://localhost`.