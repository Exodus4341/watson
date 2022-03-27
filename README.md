# watson

To Test:
- Copy .env.example
- change DB name='watson'
- Add this on env
    GOOGLE_CLIENT_ID=
    GOOGLE_CLIENT_SECRET=
    GOOGLE_REDIRECT_URL=http://localhost:8080/watson/public/sign-in/google/redirect


    FACEBOOK_CLIENT_ID=
    FACEBOOK_CLIENT_SECRET=
    FACEBOOK_REDIRECT_URL=http://localhost:8080/watson/public/sign-in/facebook/redirect
- run php artisan migrate

Project Tools:
- Laravel Framework v8.83.1
  - Packages:
      - Breeze Authentication
      - Socialite
      -  ...
