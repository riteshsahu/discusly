<p align="center">
     <img width="70" src="https://i.imgur.com/9NMRSwU.png" alt="Disculy Logo">
</p>

***Discussion Forum facilitating dynamic conversations and knowledge-sharing among users on diverse topics.***

![enter image description here](https://i.imgur.com/NyWa455.png)

<details>
  <summary>More Screenshots</summary>
  <img src="https://i.imgur.com/7qvkMjs.png" alt="Screenshot 1" />
  <img src="https://i.imgur.com/x6MaXlc.png" alt="Screenshot 2" />
  <img src="https://i.imgur.com/BPrypln.png" alt="Screenshot 3" />
  <img src="https://i.imgur.com/zhDVyxM.png" alt="Screenshot 4" />
  <img src="https://i.imgur.com/7crFnkV.png" alt="Screenshot 5" />
  <img src="https://i.imgur.com/vb5xjEj.png" alt="Screenshot 6" />
  <img src="https://i.imgur.com/H5gHQUi.png" alt="Screenshot 7" />
  <img src="https://i.imgur.com/dizMzZ9.png" alt="Screenshot 8" />
  <img src="https://i.imgur.com/Ahbw0La.png" alt="Screenshot 9" />
  <img src="https://i.imgur.com/EcdBj3w.png" alt="Screenshot 10" />
  <img src="https://i.imgur.com/tgwmFuN.png" alt="Screenshot 11" />
  <img src="https://i.imgur.com/hPqvgUe.png" alt="Screenshot 12" />
</details>


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
**Admin** \
Email - `ritesh@example.com`  \
Password - `password`

Email - `admin_demo@example.com`  \
Password - `password`

**User**  \
Email - `user_demo@example.com` \
Password - `password`