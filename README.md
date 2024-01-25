<p align="center">
     <img width="70" src="https://i.imgur.com/a3KjiYS.png" alt="Upvote Logo">
</p>

***Online Discussion Forum facilitating dynamic conversations and knowledge-sharing among users on diverse topics.***

![enter image description here](https://i.imgur.com/mIxoBkb.png)

## Environment Setup

 1. Make sure correct node version is installed as per `package.json` and php version as per `composer.json`
 2. Install dependencies `npm i` and `composer install`
 3. Make sure `.env` file is present with the required keys, look at `.env.example` for reference
 4. Generate app key - `php artisan key:generate`
 5. Link storage to public folder - `php artisan storage:link`
 6. Run Development Server -  `npm run watch` and `php artisan serve`
 7. Run database migrations - `php artisan migrate`
 8. Seed database - `php artisan db:seed`
 9. Should be running at `localhost:8000`


Note: `main` is stable branch

MySQL - `8.0`
Redis - `7.0`
Composer `1.10.27`

## Test Credentials
**Admin**
Email - `ritesh@example.com`
Password - `password`

Email - `admin_demo@example.com`
Password - `password`

**User**
Email - `user_demo@example.com`
Password - `password`


<details>
  <summary>More Screenshots</summary>
  <img src="https://i.imgur.com/a3KjiYS.png" alt="image-description"/>
  <img src="https://i.imgur.com/a3KjiYS.png" alt="image-description"/>
  <img src="https://i.imgur.com/a3KjiYS.png" alt="image-description"/>
</details>

