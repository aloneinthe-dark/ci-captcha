## CI-Captcha

This is a example of how to use captcha helper in Codeigniter 3.1.11

### Running
Go to `http://<the-project>/komentar`. The code is available at `applications/controllers/Komentar.php` for the controller and `applications/views/komentar/index.php` for the view. `index()` function in `Komentar.php` responsible for generate the captcha and `simpanKomentarFunction()` is responsible for validate the captcha.

The word of captcha will be save in the session and we comparing the word sended by user with word in the session, if same then the captcha is valid is not then the capthca is wrong.

> Thanks!!! 😁