# watson

To Test:
- Copy .env.example
- change DB name='watson'
- Add this on env
    GOOGLE_CLIENT_ID=464096936588-aq9j8f6g75qajq983kff6elcjdbse6fd.apps.googleusercontent.com
    GOOGLE_CLIENT_SECRET=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
    GOOGLE_REDIRECT_URL=http://localhost:8080/watson/public/sign-in/google/redirect


    FACEBOOK_CLIENT_ID=5058817657510676
    FACEBOOK_CLIENT_SECRET=a3b75480f5d462ac10c4218a8d49ae1f
    FACEBOOK_REDIRECT_URL=http://localhost:8080/watson/public/sign-in/facebook/redirect
- run php artisan migrate

Project Tools:
- Laravel Framework v8.83.1
  - Packages:
      - Breeze Authentication
      - Socialite
      -  ...
