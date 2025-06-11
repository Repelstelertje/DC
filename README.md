# Dating Contact (DC)

Dating Contact is a small PHP demo dating website. The pages use Vue.js and Bootstrap to display profiles that are fetched from an external API. The project contains several PHP pages such as `index.php`, `profile.php` and `provincie.php`.

## Setup

1. Clone the repository.
2. Make sure you have PHP 7 or newer installed.
3. From the project root start a local PHP server:

```bash
php -S localhost:8000
```

Then open [http://localhost:8000/index.php](http://localhost:8000/index.php) in your browser.

## Environment variables

The site relies on a few script variables that can be adjusted for different environments:

- `api_url`: API endpoint used to retrieve profile data. It is defined inline in `index.php`, `profile.php` and `provincie.php`.
- `ref_id`: Referral identifier defined in `profile.php`.
- `BASE_URL` (optional): base URL of the site when serving from a sub directory.

Update these values as needed to point to your own API or domain.

## Running locally

After starting the PHP server you can navigate the site through the links on the landing page. The site is static apart from API calls, so no additional setup is required.
