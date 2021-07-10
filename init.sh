#!/bin/bash
cp .env.example .env
composer update
php artisan migrate
php artisan storage:link
php artisan key:generate
npm install
npm build && npm run watch
